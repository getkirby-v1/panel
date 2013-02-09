<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

class action {

  static function login() {
    
    global $panel;
    
    $result = false;
    
    if(get('login')) {
      $result = $panel->user->login();
      if(success($result)) go(thisURL());
    }
    
    return $result;
    
  }

  static function addContent() {

    $result = false;
    
    if(get('cancel-add-page')) {
      go(showurl('content'));
      return false;
    }
    
    if(get('add-page')) {
      $result = data::addContent();
      if(success($result)) go($result['url'] . '/show' . c::get('uri.param.separator') . 'content');
    }
    
    return $result;
  
  }

  static function updateContent() {

    $result = false;

    if(get('cancel-update-content')) {
      go(showurl('content'));
      return false;
    }
    
    if(get('update-content')) {
      $result = data::updateContent();
      if(success($result)) go(showurl('content'));
      growl($result);
    }
    
    return $result;

  }
  
  static function deleteContent() {

    $result = false;
    
    if(get('cancel-delete-page')) {
      go(showurl('dashboard'));
      return false;
    }
    
    if(get('delete-page')) {
      $result = data::deleteDir();
      if(success($result)) go(showurl('dashboard'));
    }
    
    return $result;
  
  }

  static function sortPages($flip=false) {
  
    if(get('sort-action') == 'cancel') {
      go(showurl('dashboard'));
      return false;
    }
    
    if(get('sort-action') == 'ok') {
    
      $result = data::sort($flip);
    
      if(success($result)) go(showurl('dashboard'));
      growl($result);
    
    }
    
  }

  static function updateURL() {
    
    $result = false;

    if(get('options')) {
      $result = data::changeDirname();
      if(success($result)) return $result;
      growl($result);
    }
  
  }
  
  static function updateSiteinfo() {

    $result = false;

    if(get('cancel-update-info')) {
      go(showurl('content'));
      return false;
    }

    if(get('update-info')) {
      $result = data::updateInfo();
      if(success($result)) go(showurl('content'));
      growl($result);
    }

    return $result;
      
  }

  static function uploadFile() {

    $result = false;
    
    if(get('cancel-upload')) {
      go(showurl('files'));
      return false;
    }
    
    if(get('upload-file')) {
      $result = data::uploadFile();
      if(success($result)) go(showurl('files'));
    }

    return $result;

  }

  static function editFile() {
  
    $result = false;
    
    if(get('cancel-edit-file')) {
      go(showurl('files'));
      return false;
    }
    
    if(get('edit-file')) {
      $result = data::editFile();
      if(success($result)) go(showurl('files'));
    }
    
    return $result;
  
  }

  static function replaceFile() {

    $result = false;
    
    // cancel action    
    if(get('cancel-replace-file')) {
      go(showurl('files'));
      return false;
    }

    // submit action    
    if(get('replace-file')) {

      $result = data::replaceFile();
      if(success($result)) go(showurl('files'));
            
    }

    return $result;
  
  }

  static function deleteFile() {
  
    $result = false;
    
    // cancel action    
    if(get('cancel-delete-file')) {
      go(showurl('files'));
      return false;
    }
    
    // submit action    
    if(get('delete-file')) {

      $result = data::deleteFile();
      if(success($result)) go(showurl('files'));
                
    }

    return $result;
  
  }

}
