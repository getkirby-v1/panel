<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

class form {

  var $fields = array();
  var $css    = array();
  var $js     = array();
  var $data   = array();
  
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
      
      $field['root'] = $root;      
      $field['file'] = $file;      
      $field['name'] = $name;

      // check for css
      if(file_exists($css)) $this->css[$type] = $css;
      // check for js
      if(file_exists($js))  $this->js[$type]  = $js;
    
      $this->fields[$name] = $field;
    
    }
    
  }
    
  function field($field) {

    global $panel;

    extract($field);

    // define a size selector  
    $default = (isset($default)) ? $default : false;
    $size    = (isset($size)) ? ' ' . $size : '';
    $value   = (string)get($name, a::get($this->data, $name, $default));
            
    $output = array();
    $output[] = '<div class="field ' . $type . $size . '">';
    $output[] = self::label($label);

    if($type == 'textarea' && isset($buttons) && $buttons == true) {
      $output[] = self::buttons($buttons);
    }
        
    // load the field template
    content::start();
    require($file);
    $output[] = content::end(true);

    // add the help text if available
    if(!empty($help)) $output[] = self::help($help);

    $output[] = '</div>';
    
    return implode("\n", $output);    
      
  }
  
  function label($var) {
    return '<label>' . str::ucfirst($var) . '</label>';   
  }

  function help($text) {
    if(empty($text)) return false;
    return '<p class="description"><span>' . htmlspecialchars($text) . '</span></p>';
  }
      
  function load() {
            
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
      'link'   => '<a href="#form-modal-link" rel="modal:open">' . l::get('form.buttons.link') . '</a>',
      'email'  => '<a href="#form-modal-email" rel="modal:open">' . l::get('form.buttons.email') . '</a>',
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

?>