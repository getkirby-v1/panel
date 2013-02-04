<?php

// used for direct access protection
define('KIRBY', true);

/*

---------------------------------------
Panel folder name
---------------------------------------                                                                                                                                 
Will be autodetected. Only change if you 
know what you are doing

*/
$folder = basename(dirname(__FILE__));


/*

---------------------------------------
Document root of your kirby installation
---------------------------------------
By default the panel must be installed in a 
subfolder of your kirby site. Otherwise it 
won't be able to load all the required files. 
You can change that here but you must
also change all the other roots to lead to
the right folders. Don't change it if you 
are not sure about it. 

*/
$root = dirname(dirname(__FILE__));


/*

---------------------------------------
Kirby system folder
---------------------------------------
Link to the kirby system folder. 
The panel loads a bunch of system files 
from there, so this must be correct. 

*/
$rootKirby = $root . '/kirby';


/*

---------------------------------------
Site folder
---------------------------------------
If you moved or reanamed your site folder
you must change it here as well.
Blueprints, config and accounts will be loaded
from there. 

*/
$rootSite    = $root . '/site';
$rootContent = $root . '/content';
$rootPanel   = $root . '/' . $folder;

// include kirby
require_once($rootKirby . '/lib/kirby.php');
require_once($rootPanel . '/lib/load.php');

// set the root
c::set('root',          $root);
c::set('root.kirby',    $rootKirby);
c::set('root.site',     $rootSite);
c::set('root.content',  $rootContent);
c::set('root.panel',    $rootPanel);

// panel version
c::set('panel.version.string', '0.9.2');
c::set('panel.version.number', 0.92);
c::set('panel.min.kirby.version', 1.11);
c::set('panel.folder', $folder);

paneload::lib();
paneload::config();
paneload::parsers();

// switch on errors
if(c::get('debug')) {
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
} else {
  error_reporting(0);
  ini_set('display_errors', 0);
}

// set the timezone to make sure we 
// avoid errors in php 5.3
@date_default_timezone_set(c::get('timezone'));

$site = new panel();
$site->load();