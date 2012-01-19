<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// determine the folder name of the admin installation
$folder = basename(dirname(__FILE__));

// set the default roots
$root        = dirname(dirname(__FILE__));
$rootKirby   = $root . '/kirby';
$rootSite    = $root . '/site';
$rootContent = $root . '/content';
$rootPanel   = $root . '/' . $folder;

// include kirby
require_once($rootKirby . '/lib/kirby.php');
require_once($rootPanel . '/lib/load.php');

// set the root
c::set('root',         $root);
c::set('root.kirby',   $rootKirby);
c::set('root.site',    $rootSite);
c::set('root.content', $rootContent);
c::set('root.panel',   $rootPanel);

// set the admin url
c::set('panel.url',    c::get('url') . '/' . $folder);
c::set('panel.folder', $folder);

paneload::lib();
paneload::config();
paneload::parsers();
paneload::plugins();

// set the timezone to make sure we 
// avoid errors in php 5.3
@date_default_timezone_set(c::get('timezone'));

$site = new panel();
$site->load();

?>