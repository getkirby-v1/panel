<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

class settings extends obj {

  function __construct() {

    global $page;

    $name   = (!$page->intendedTemplate) ? c::get('tpl.default') : $page->intendedTemplate;
    $params = self::load($name); 

    // handle defaults
    if(!isset($params['pages'])) $params['pages'] = true;
    if(!isset($params['files'])) $params['files']  = true;

    parent::__construct($params);
    
    $this->sortable = true;
    $this->flip     = false;
    $this->limit    = 10;
    
    if(isset($this->pages['sort'])) {
    
      switch($this->pages['sort']) {
        case 'no':
          $this->sortable = false;    
          break;
        case 'flip':
          $this->flip = true;
          break;
      }
    
    }
    
    if(isset($this->pages['limit'])) {
      $this->limit = intval($this->pages['limit']);
    }
    
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
    
    // the title is always required    
    $params['fields']['title']['required'] = true;
    return $params;

  }
  
}