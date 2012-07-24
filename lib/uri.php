<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

class paneluri extends uri {

  static function raw($uri=false) {
    $raw = ($uri) ? $uri : ltrim(server::get('request_uri'), '/');
    // strip subfolders from uri    
    if(c::get('subfolder')) $raw = ltrim(preg_replace('!^' . preg_quote(c::get('subfolder')) . '\/!i', '/', $raw), '/');
    return $raw;
  }

}