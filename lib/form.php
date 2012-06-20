<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

class form {

  var $fields   = array();
  var $css      = array();
  var $js       = array();
  var $data     = array();
  var $required = array();
  var $errors   = array();
  var $validate = array();
  
  function __construct($settings) {

    global $panel, $page;

    $fields = (array)$settings->fields;
  
    // prepare the site info form
    if($panel->show == 'info') {
      
      $this->data = data::siteData();
      $fields = array();  
                  
      foreach($this->data as $key => $value) {
        $fields[$key] = array(
          'label' => str::ucfirst($key),
          'type'  => ($key == 'description') ? 'textarea' : 'text',
        ); 
      }      
      
    } else {
      $this->data = $page->_;
    }
        
    $this->prepare($fields);      
        
  }
  
  function prepare($fields) {

    foreach($fields as $name => $field) {

      $type = a::get($field, 'type', 'text');
      // custom field root      
      $root = c::get('root.site') . '/' . c::get('panel.folder') . '/fields/' . $type;
      
      if(!file_exists($root)) {
        // fallback root
        $root = c::get('root.panel') . '/fields/' . $type;
      }

      // main file
      $file = $root . '/' . $type . '.php';
      // css file
      $css = $root . '/' . $type . '.css';
      // js file
      $js = $root . '/' . $type . '.js';
      // config file
      $config = $root . '/' . $type . '.config.php';
      
      $field['root']   = $root;      
      $field['file']   = $file;      
      $field['name']   = $name;
      $field['config'] = (file_exists($config)) ? $config : false;

      if(!file_exists($field['file'])) die('Field misconfiguration: <strong>' . $type . ' field is broken</strong>');

      // check for css
      if(file_exists($css)) $this->css[$type] = $css;
      // check for js
      if(file_exists($js))  $this->js[$type]  = $js;
    
      // check for required fields
      if(@$field['required'] == true) {
        $this->required[$name] = $field;
      }

      // check for fields that need validation
      if(@$field['validate'] != false) {
        $this->validate[$name] = $field;
      }
      
      // add the field to the global fields array    
      $this->fields[$name] = $field;
    
    }
  
  }
    
  function field($params) {

    global $panel;

    $defaults = array(
      'label'     => false,
      'default'   => false,
      'size'      => false,
      'autolabel' => true,
      'buttons'   => false,
      'config'    => false,
      'file'      => false,
      'help'      => false,
      'type'      => false,
      'error'     => false,
      'class'     => false,
      'required'  => false,
    );

    $options = array_merge($defaults, $params);
    
    // set the value, which should be placed in the field
    $options['value'] = (string)get($options['name'], a::get($this->data, $options['name'], $options['default']));
        
    // check if this is an error field
    $options['error'] = array_key_exists($options['name'], $this->errors);
    
    // include the field config file, which makes 
    // it possible to overwrite the default options
    if($options['config']) require($options['config']);    

    $output = array();
    $output[] = '<div class="field ' . $this->fieldcss($options) . '">';

    if($options['autolabel']) {
      $output[] = self::label($options['label'], $options);
    }

    if($options['type'] == 'textarea' && $options['buttons'] == true) {
      $output[] = self::buttons($options['buttons']);
    }
    
    // load the field template    
    $output[] = $this->fieldtemplate($options);

    // add the help text if available
    if(!empty($options['help'])) $output[] = self::help($options['help']);

    $output[] = '</div>';
    
    return implode("\n", $output);    
      
  }
  
  function fieldtemplate($params) {
    content::start();
    extract($params);
    require($file);
    return content::end(true);      
  }
  
  function fieldcss($options) {
    if($options['type'])  $css[] = $options['type'];
    if($options['class']) $css[] = $options['class'];
    if($options['size'])  $css[] = $options['size'];
    if($options['error']) $css[] = 'error';
    return implode(' ', $css);
  }
  
  function label($var, $field) {
    
    $text = self::multilangtext($var, $field['name']);
            
    $required = $field['required'] == true ? '<span class="required">*</span>' : '';
    $lang = (c::get('lang.support')) ? '<small>' . c::get('lang.current') . '</small>' : '';
    return '<label>' . str::ucfirst($text) . $lang . $required . '</label>';   
  }

  function help($text) {

    $text = self::multilangtext($text, false);

    if(empty($text)) return false;
    return '<p class="description"><span>' . htmlspecialchars($text) . '</span></p>';
  }

  function multilangtext($array, $default=false) {
    
    // multi-lang labels
    if(is_array($array)) {

      global $panel;
      
      // desired label
      $text = a::get($array, $panel->user()->language());

      // fallback
      if(empty($text)) $text = a::get($array, c::get('panel.language'));
      
      // last resort
      if(empty($text)) $text = $default;
      
      return $text;
                              
    } else {
      return $array;
    }
    
      
  }
      
  function load() {

    if(empty($this->fields)) return false;
            
    $output[] = '<fieldset>';
            
    foreach($this->fields AS $field) {
      $output[] = $this->field($field);
    }
    
    $output[] = '</fieldset>';

    return implode("\n", $output);
        
  }

  function css() {
    
    $output = array();
        
    $output[] = '<style type="text/css">';
    foreach($this->css as $file) $output[] = content::load($file) . "\n";
    $output[] = '</style>';

    return implode("\n", $output);
            
  }
  
  function js() {
    
    $output = array();
    
    $output[] = '<script type="text/javascript">';
    foreach($this->js as $file) $output[] = content::load($file) . "\n";
    $output[] = '</script>';

    return implode("\n", $output);
            
  }
  
  function buttons($active) {
            
    $html = array();
    
    $buttons   = array();
    $available = array(
      'h1'     => '<a href="#h1" rel="tag" data-tag-open="# ">' . l::get('form.buttons.h1') . '</a>',
      'h2'     => '<a href="#h2" rel="tag" data-tag-open="## ">' . l::get('form.buttons.h2') . '</a>',
      'h3'     => '<a href="#h3" rel="tag" data-tag-open="### ">' . l::get('form.buttons.h3') . '</a>',
      'bold'   => '<a href="#bold" rel="tag" data-tag-open="**" data-tag-close="**" data-tag-sample="' . l::get('form.buttons.bold.sample') . '">' . l::get('form.buttons.bold') . '</a>',
      'italic' => '<a href="#italic" rel="tag" data-tag-open="*" data-tag-close="*" data-tag-sample="' . l::get('form.buttons.italic.sample') . '">' . l::get('form.buttons.italic') . '</a>',
      'link'   => '<a href="#form-overlay-link" rel="overlay">' . l::get('form.buttons.link') . '</a>',
      'email'  => '<a href="#form-overlay-email" rel="overlay">' . l::get('form.buttons.email') . '</a>',
    );
    
    if(is_array($active)) {
      foreach($active as $b) {
        $buttons[] = a::get($available, $b);
      }
    } else {
      $buttons = $available;
    }
                
    $html[] = '<div class="form-buttons">';
    $html[] = '<ul>';    
    
    foreach($buttons as $button) {
      $html[] = '<li>' . $button . '</li>';    
    }

    $html[] = '</ul>';    
    $html[] = '</div>';    
    
    return implode("\n", $html);
    
  }

  function overlays() {
    return snippet('form.overlays', false, true);
  }

}


class fileform extends form {
  
  function __construct($settings, $file) {

    global $panel, $page;

    $fields = (array)$settings->filefields;

    $this->data = $file->_;
  
    foreach($fields as $key => $field) {
      
      // skip unwanted fields
      if(!in_array($field['type'], array('text', 'textarea'))) {
        unset($fields[$key]);
      }
      
      // make sure we switch off unavailable features
      $fields[$key]['buttons']  = false;
      $fields[$key]['required'] = false;
      $fields[$key]['validate'] = false;
      $fields[$key]['help']     = false;
      $fields[$key]['size']     = false;
      
    }

    $this->prepare($fields);      
        
  }
  
  function load() {

    if(empty($this->fields)) return false;
            
    $output[] = '<fieldset class="customfields">';
            
    foreach($this->fields AS $field) {
      $output[] = $this->field($field);
    }
    
    $output[] = '</fieldset>';

    return implode("\n", $output);
        
  }

}