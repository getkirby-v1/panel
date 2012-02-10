<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

class settings extends obj {

  function __construct() {

    global $page;

    $name   = (!$page->content || !$page->content->name) ? c::get('tpl.default') : $page->content->name;
    $params = self::load($name); 

    // handle defaults
    if(!isset($params['pages'])) $params['pages'] = true;
    if(!isset($params['files'])) $params['files']  = true;

    parent::__construct($params);
    
  }

  static function load($template) {

    $blueprint = c::get('root.site') . '/' . c::get('panel.folder') . '/blueprints/' . $template . '.php';
    
    // custom default
    if($template != 'default' && !file_exists($blueprint)) {
      $blueprint = c::get('root.site') . '/' . c::get('panel.folder') . '/blueprints/default.php';    
    }
    
    // default fallback
    if(!file_exists($blueprint)) {
      $blueprint = c::get('root.panel') . '/defaults/blueprints/default.php';
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