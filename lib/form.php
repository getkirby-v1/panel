<?php

class form {
	
	function textarea($page, $var) {
		$html = '<div class="textarea-wrapper"><textarea name="' . $var . '">' . get($var, a::get($page, $var)) . '</textarea></div>';
		return $html;
	}

	function text($page, $var) {
		return '<input type="text" name="' . $var . '" value="' . get($var, a::get($page, $var)) . '" />';
	}

	function label($var) {
		return '<label>' . str::ucfirst($var) . '</label>';		
	}
	
	function value($page, $var) {
		return get($var, a::get($page, $var));	
	}
	
	function select($page, $var, $options, $default=false) {
		$selected = get($var, a::get($page, $var, $default));
		$html = '<select name="' . $var . '">';
		foreach($options AS $key => $value) {
			$sel   = ($key == $selected) ? ' selected="selected"' : '';
			$html .= '<option' . $sel . ' value="' . $key . '">' . $value . '</option>';
		} 
		$html .= '</select>';
		return $html;	
	}

	function checkbox($page, $var, $options, $default=false) {

		$selected = get($var, a::get($page, $var, $default));

		if(empty($selected)) $selected = array();
		if(!is_array($selected)) $selected = str::split(str::lower($selected));
		
		$html = '<ul class="checkbox">';

		foreach($options AS $key => $value) {
			$sel   = (in_array($key, $selected)) ? ' checked="checked"' : '';
			$html .= '<li><label class="inline"><input type="checkbox" name="' . $var . '[]" ' . $sel . ' value="' . $key . '" />' . $value . '</label></li>';
		} 

		$html .= '</ul>';
		return $html;	
	}

	function radio($page, $var, $options, $default=false) {
		$selected = get($var, a::get($page, $var, $default));
		$html = '<ul class="radio">';
		foreach($options AS $key => $value) {
			$sel   = ($key == $selected) ? ' checked="checked"' : '';
			$html .= '<li><label class="inline"><input type="radio" name="' . $var . '" ' . $sel . ' value="' . $key . '" />' . $value . '</label></li>';
		} 
		$html .= '</ul>';
		return $html;	
	}

	function yesno($page, $var, $default='yes') {
		
		$options = array(
			'yes' => 'Yes',
			'no'  => 'No',
		);
		
		return self::radio($page, $var, $options, $default);
		
	}

	function description($text) {
		if(empty($text)) return false;
		return '<p class="description"><span>' . htmlspecialchars($text) . '</span></p>';
	}
		
	function load($fields, $siteinfo=false) {

    if($siteinfo) {
      
      global $site;

      $data = data::siteData();
                  
      foreach($data as $key => $value) {
        $fields[$key] = array(
          'label' => str::ucfirst($key),
          'type'  => ($key == 'description') ? 'textarea' : 'text',
        ); 
      }      
      
    } else {

      global $page;
  
      $data = $page->_;

    }

			
		$output[] = '<fieldset>';
      
    $fields['title']['type']  = 'text';
    $fields['title']['label'] = a::get($fields['title'], 'label', 'Title');

		foreach($fields AS $name => $setup) {
									
			$class = '';
			
			if($setup['type'] == 'textarea') {
				$class = ' textarea';
				if(!empty($setup['height'])) $class .= ' ' . $setup['height'];
			} else if($setup['type'] == 'checkbox') {
				$class = ' checkbox';
			}
			
			$output[] = '<div class="field ' . $setup['type'] . $class . '">';
			$output[] = self::label($setup['label']);

			switch($setup['type']) {
				case 'textarea':
					$output[] = self::textarea($data, $name);
					break;
				case 'text':
					$output[] = self::text($data, $name);
					break;
				case 'select':
					$output[] = self::select($data, $name, $setup['options'], @$setup['default']);
					break;
				case 'checkbox':
					$output[] = self::checkbox($data, $name, $setup['options'], @$setup['default']);
					break;
				case 'radio':
					$output[] = self::radio($data, $name, $setup['options'], @$setup['default']);
					break;
			}

      if(!empty($setup['descr'])) {
  		  $output[] = self::description($setup['descr']);
  		}
			$output[] = '</div>';

		}
		
		$output[] = '</fieldset>';

		return implode("\n", $output);
				
	}

}

?>