<?php

// load the original loading class
require_once($rootKirby . '/lib/load.php');

class paneload extends load {

  static function lib() {

    parent::lib();
    
    $root = c::get('root.panel');
    
    require_once($root . '/lib/spyc.php');
    require_once($root . '/lib/data.php');
    require_once($root . '/lib/actions.php');
    require_once($root . '/lib/me.php');
    require_once($root . '/lib/helpers.php');
    require_once($root . '/lib/settings.php');
    require_once($root . '/lib/form.php');
    require_once($root . '/lib/panel.php');
    require_once($root . '/lib/upload.php');
                    
  }
  
}

?>