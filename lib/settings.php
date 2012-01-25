<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

class settings extends obj {

  function __construct() {

    global $page;
        
    $params = self::load($page->template()); 
        
    // handle defaults
    if(!isset($params['pages'])) $params['pages'] = true;
    if(!isset($params['files'])) $params['files']  = true;

    parent::__construct($params);
    
  }

  static function load($template) {

    $blueprint = c::get('root.site') . '/' . c::get('panel.folder') . '/blueprints/' . $template . '.php';
    
    // default fallback
    if(!file_exists($blueprint)) {
      $blueprint = c::get('root.panel') . '/blueprints/default.php';
    }

    $params = spyc_load_file($blueprint);

    // add the default fields
    $params = self::defaultFields($params);
   
    return $params;
    
  }
  
  static function defaultFields($params) {

    // add the fields
    if(!isset($params['fields'])) $params['fields'] = array();
    
    // add the title field
    if(!isset($params['fields']['title'])) {
      
      $title = array('title' => array(
        'label' => 'Title',
        'type'  => 'text'
      ));
      
      $params['fields'] = array_merge($title, $params['fields']);      
                      
    }

    return $params;
  }
  
}

?>