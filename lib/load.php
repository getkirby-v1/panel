<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

// load the original loading class
require_once($rootKirby . '/lib/load.php');

class paneload extends load {

  static function lib() {

    $root      = c::get('root.kirby');
    $rootPanel = c::get('root.panel');
      
    require_once($root . '/defaults.php');

    c::set('root.snippets', $rootPanel . '/snippets');

    require_once($root . '/lib/cache.php');
    require_once($root . '/lib/obj.php');
    require_once($root . '/lib/pagination.php');
    require_once($root . '/lib/files.php');
    require_once($root . '/lib/variables.php');
    require_once($root . '/lib/pages.php');
    require_once($root . '/lib/site.php');
    require_once($root . '/lib/uri.php');
    require_once($root . '/lib/helpers.php');
    require_once($root . '/lib/template.php');
    
    // load panel stuff    
    require_once($rootPanel . '/lib/uri.php');
    require_once($rootPanel . '/lib/data.php');
    require_once($rootPanel . '/lib/check.php');
    require_once($rootPanel . '/lib/actions.php');
    require_once($rootPanel . '/lib/user.php');
    require_once($rootPanel . '/lib/helpers.php');
    require_once($rootPanel . '/lib/settings.php');
    require_once($rootPanel . '/lib/thumb.php');
    require_once($rootPanel . '/lib/form.php');
    require_once($rootPanel . '/lib/panel.php');
    require_once($rootPanel . '/lib/upload.php');
                    
  }

  static function config() {

    parent::config();

    // load the default panel config file 
    self::file(c::get('root.panel') . '/defaults/config/config.php');
    
    $root = c::get('root.site') . '/' . c::get('panel.folder') . '/config';

    self::file($root . '/config.php');
    self::file($root . '/config.' . server::get('server_name') . '.php');

    if(c::get('panel.rewrite') === false) {
      c::set('rewrite', false);
    }
    
  }
  
  static function language() {

    global $panel;
        
    $lang = ($panel->user->language) ? $panel->user->language : c::get('panel.language');
    $root = c::get('root.panel');
    $file = $root . '/languages/' . $lang . '.php';

    // load the fallback language
    require_once($root . '/languages/en.php');

    if($lang && $lang != 'en' && file_exists($file)) require_once($file);

  }
  
}