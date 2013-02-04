<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

class data {

  static function childByUID($uid) {

    global $page, $pages, $site;
    return (!$site->uri->path(1)) ? $pages->findBy('uid', $uid) : $page->children()->findBy('uid', $uid);
  
  }

  static function fileByFilename($filename=false) {

    global $page;

    if(!$filename) $filename = base64_decode(get('file'));
    $file = $page->files()->find($filename);
        
    return $file;
        
  }

  static function changeDirname() {

    global $page, $pages;

    if($page->isHomePage()) return array(
      'status' => 'error',
      'msg'    => l::get('options.errors.homepage')
    );

    if($page->isErrorPage()) return array(
      'status' => 'error',
      'msg'    => l::get('options.errors.errorpage')
    );

    $uid  = get('uid');
    $name = ($page->num()) ? $page->num() . '-' . $uid : $uid;

    if(!c::get('lang.translated')) {
      if($name == $page->dirname()) return array(
        'status' => 'success',
        'msg'    => l::get('nochanges')
      );
    }

    if(str::length($uid) < 1 || !preg_match('!^[a-z0-9-_]+$!i', $name)) return array(
      'status' => 'error',
      'msg'    => l::get('options.errors.characters')
    );
    
    $oldRoot = $page->root();
    $newRoot = dirname($page->root()) . '/' . $name;

    if(!is_writable($oldRoot)) return array(
      'status' => 'error',
      'msg'    => l::get('options.errors.permissions')
    );
                
    if($newRoot != $oldRoot && is_dir($newRoot)) return array(
      'status' => 'error',
      'msg'    => l::get('options.errors.exists')
    );
    
    $siblings = $page->siblings()->not($page->uid());
    $check    = ($siblings) ? $siblings->find($uid) : false;
    
    if($check) return array(    
      'status' => 'error',
      'msg'    => l::get('options.errors.exists')
    );
    
    // don't change the dirname but change the URL-key instead
    if(c::get('lang.translated')) {
      
      $data = array();
      
      global $settings;
                  
      foreach($settings->fields as $key => $field) {
        $data[$key] = $page->{$key};
      }
      
      $data['URL-key'] = $uid;
      
      $file  = $page->root() . '/' . $page->intendedTemplate() . '.' . c::get('lang.current') . '.' . c::get('content.file.extension', 'txt');
      $write = data::write($file, $data);                  
      
      if(error($write)) return $write;
                                                
    } else {
        
      $move = dir::move($oldRoot, $newRoot);

      if(!$move) return array(
        'status' => 'error',
        'msg'    => l::get('options.errors.move')
      );

    }
    
    $page->root          = $newRoot;
    $page->uid           = $uid;
    $page->translatedUID = $uid;
    $page->uri           = ($page->parent()) ? $page->parent()->uri() . '/' . $page->translatedUID : $page->translatedUID;
    $page->translatedURI = ($page->parent()) ? $page->parent()->translatedURI() . '/' . $page->translatedUID : $page->translatedUID;
    $page->dirname       = $name;
    $page->diruri        = page::parseDirURI($page->root);
            
    if(c::get('lang.support')) {            
      $url = url($page->translatedURI() . '/show:options');
    } else {
      $url = url($page->uri() . '/show:options');    
    }
    
    self::killCache();
                    
    go($url);
                    
  }

  static function removeNum($uid) {
            
    $p = self::childByUID($uid);
    
    if(!$p) return array(
      'status' => 'error',
      'msg'    => l::get('pages.errors.notfound')
    );

    $dirname = dirname($p->root()) . '/' . $p->uid();
        
    if(!dir::move($p->root(), $dirname)) return array(
      'status' => 'error',
      'msg'    => l::get('pages.errors.move')
    );
    
    return array(
      'status' => 'success',
      'msg'    => l::get('pages.moved')
    );
    
  }

  static function changeNum($uid, $num) {
        
    $p = self::childByUID($uid);
        
    if(!$p) return array(
      'status' => 'error',
      'msg'    => l::get('pages.errors.notfound')
    );

    if($num === $p->num()) return array(
      'status' => 'success',
      'msg'    => l::get('nochanges')
    );

    $dirname = dirname($p->root()) . '/' . $num . '-' . $p->uid();
            
    if(!dir::move($p->root(), $dirname)) return array(
      'status' => 'error',
      'msg'    => l::get('pages.errors.move')
    );
    
    return array(
      'status' => 'success',
      'msg'    => l::get('pages.moved')
    );

  }
  
  static function sort($flip=true) {
    
    $visible   = get('visible');
    $invisible = get('invisible');
    $errors    = array();    
    
    if(empty($visible) && empty($invisible)) return array(
      'status' => 'error',
      'msg'    => l::get('pages.errors.nosort')
    );

    if(!empty($visible)) {

      $cnt = count($visible);
      $len = str::length($cnt);
      $num = 0;
      
      if($len <= 1) $len = 2;

      if($flip) $visible = array_reverse($visible);
            
      foreach($visible as $uid) {
        $num++;
        $sort = self::changeNum($uid, pad($num, $len));
        
        if(error($sort)) $errors[] = $sort;      
              
      }
                  
    } 
        
    if(!empty($invisible)) {

      foreach($invisible as $uid) {
        $sort = self::removeNum($uid);
        if(error($sort)) $errors[] = $sort;      
      }
          
    }
        
    if(!empty($errors)) return array(
      'status' => 'error',
      'msg'    => l::get('pages.errors.sort'),
      'error'  =>  $errors
    );

    self::killCache();
    
    return array(
      'status' => 'success',
      'msg'    => l::get('pages.sorted')
    );    
        
  }
  
  static function deleteDir() {

    $delete = self::childByUID(get('uid'));
        
    if(!$delete) return array(
      'status' => 'error',
      'msg'    => l::get('pages.errors.notfound')
    );

    if($delete->isHomePage()) return array(
      'status' => 'error',
      'msg'    => l::get('pages.delete.errors.homepage')
    );

    if($delete->isErrorPage()) return array(
      'status' => 'error',
      'msg'    => l::get('pages.delete.errors.errorpage')
    );

    if($delete->hasChildren()) return array(
      'status' => 'error',
      'msg'    => l::get('pages.delete.errors.subpages')
    );
    
    if(!dir::remove($delete->root())) return array(
      'status' => 'error',
      'msg'    => l::get('pages.delete.errors.permissions')
    );

    self::killCache();
    
    return array(
      'status' => 'success',
      'msg'    => l::get('pages.delete.success')
    );        
        
  }

  static function addContent() {
    
    global $page, $pages, $site;
    
    $uid   = get('uid');
    $title = get('title');
    $tpl   = get('template', 'default');
    $data  = self::fetchData($tpl, array('title' => $title));
    
    if(empty($title)) return array(
      'status' => 'error',
      'msg'    => l::get('pages.add.errors.title')
    );
    
    // build a urlified uid
    if(empty($uid)) $uid = str::urlify($title);
    
    if(empty($uid)) return array(
      'status' => 'error',
      'msg'    => l::get('pages.add.errors.url')
    );
    
    if(!preg_match('!^[a-z0-9-_]+$!i', $uid)) return array(
      'status' => 'error',
      'msg'    => l::get('pages.add.errors.characters')
    );

    $check = self::childByUID($uid);
        
    if($check) return array(    
      'status' => 'error',
      'msg'    => l::get('pages.add.errors.exists') . ': ' . $uid
    );

    if(!$site->uri->path(1)) {
      $dir = c::get('root.content') . '/' . $uid;
      $url = url($uid);
    } else {
      $dir = $page->root() . '/' . $uid;
      $url = $page->url() . '/' . $uid;
    }
        
    if(!dir::make($dir)) return array(
      'status' => 'error',
      'msg'    => l::get('pages.add.errors.permissions')
    );

    if(c::get('lang.support')) {
      
      foreach(c::get('lang.available') as $lang) {
        $file  = $dir . '/' . $tpl . '.' . $lang . '.' . c::get('content.file.extension', 'txt');
        $write = data::write($file, $data);        
        if(error($write)) return $write;
      }    
    
    } else {

      // write the default file
      $file  = $dir . '/' . $tpl . '.' . c::get('content.file.extension', 'txt');
      $write = data::write($file, $data);        
  
      if(error($write)) return $write;
    
    }    

    self::killCache();
    
    return array(
      'status' => 'success',
      'msg'    => l::get('pages.add.success'),
      'url'    => $url    
    );
              
  }

  static function updateContent() {
    
    global $panel, $page;
        
    $file   = self::file();    
    $data   = self::fetchData();
    $errors = array();
    
    foreach($panel->form->required as $key => $field) {
      if(a::get($data, $key) == '') $errors[$key] = $field;
    }

    foreach($panel->form->validate as $key => $field) {
      if(!self::validate($field['validate'], $data[$key])) $errors[$key] = $field;
    }
                          
    if(!empty($errors)) {

      $panel->form->errors = $errors;

      return array(
        'status' => 'error',
        'msg'    => l::get('pages.update.errors')
      );  
    }
          
    // remove the file without language code    
    if(c::get('lang.support')) {
      
      // check for an untranslated file
      $untranslated = $page->root() . '/' . $page->intendedTemplate . '.' . c::get('content.file.extension', 'txt');
      
      // check if the default file exitst
      $defaultfile = $page->root() . '/' . $page->intendedTemplate . '.' . c::get('lang.default') . '.' . c::get('content.file.extension', 'txt');

      if(file_exists($untranslated)) {
        if(file_exists($defaultfile)) {      
          // remove the untranslated file if there's already a fallback file
          f::remove($untranslated);
        } else {
          // rename the untranslated file to become the fallback file                    
          f::move($untranslated, $defaultfile);          
        }
      }

      if(c::get('lang.translated')) {

        // make sure to pass on the URL Key      
        if($page->url_key != '') {
          $data['URL-key'] = $page->url_key;      
        }

      }

    }

    self::killCache();
                                           
    return self::write($file, $data);
        
  }

  static function validate($method, $value) {
    
    switch($method) {
      case 'date':
        return v::date($value);
        break;      
      case 'url':
        return v::url($value);
        break;
      case 'email':
        return v::email($value);
        break;
      default:
        
        if(is_array($method)) {
          
          $match = null;
          $minlength = $maxlength = 0;
          
          extract($method);
                    
          if($match && !preg_match($match, $value)) return false;
          if($minlength && str::length($value) < $minlength) return false;
          if($maxlength && str::length($value) > $maxlength) return false;
        
        }        
        
        break;
    }
    
    return true;
  
  }

  static function updateInfo() {
    
    if(c::get('lang.support')) {
      $file = c::get('root.content') . '/site.' . c::get('lang.current') . '.' . c::get('content.file.extension', 'txt');    
    } else {
      $file = c::get('root.content') . '/site.' . c::get('content.file.extension', 'txt');        
    }
    $keys = self::siteData();
    $data = array();

    foreach($keys as $key => $value) {
      $data[$key] = get($key);
    }
    
    if(empty($data['title'])) return array(
      'status' => 'error',
      'msg' => l::get('siteinfo.errors.title')
    );
  
    // remove the file without language code    
    if(c::get('lang.support') && c::get('lang.current') == c::get('lang.default')) {
      $remove = c::get('root.content') . '/site.' . c::get('content.file.extension', 'txt');
      if(file_exists($remove)) f::remove($remove);
    }

    self::killCache();
                                           
    return self::write($file, $data);
        
  }

  static function siteData() {
    
    global $site;
    
    $data = $site->variables;
    return $data;
    
  }

  static function file() {

    global $page;

    if(c::get('lang.support')) {
      $filename = $page->intendedTemplate . '.' . c::get('lang.current') . '.' . c::get('content.file.extension', 'txt');
    } else {
      $filename = $page->intendedTemplate . '.' . c::get('content.file.extension', 'txt');    
    }

    return $page->root() . '/' . $filename;  

  }
  
  static function uploadFile() {
    
    global $page;
    
    $upload = upload::file('file', $page->root() . '/{name}.{extension}');

    if(error($upload)) return $upload;

    self::killCache();
    
    return $upload;
      
  }  
  
  static function replaceFile() {
    
    global $page;

    $filename = get('filename');
    $file = $page->files()->find($filename);

    if(!$file) return array(
      'status' => 'error',
      'msg' => l::get('files.replace.errors.notfound')
    );
    
    $upload = upload::file('file', $page->root() . '/' . $filename);
    if(error($upload)) return $upload;

    self::killCache();

    return array(
      'status' => 'success',
      'msg'    => l::get('files.replace.success')
    );
  
  }  

  static function editFile() {
    
    global $panel, $page;

    $filename = get('filename');
    $newname  = str::urlify(get('newname'));
    $file     = $page->files()->find($filename);

    if(!$file) return array(
      'status' => 'error',
      'msg' => l::get('files.edit.errors.notfound')
    );

    if(str::length($newname) < 1) return array(
      'status' => 'error',
      'msg'    => l::get('files.edit.errors.filename')
    );
    
    $newfilename = $newname . '.' . $file->extension();
    
    if($newfilename != $file->filename()) {
    
      $newroot = dirname($file->root()) . '/' . $newfilename;
  
      if(file_exists($newroot)) return array(
        'status' => 'error',
        'msg'    => l::get('files.edit.errors.exists')
      );
    
      if(!f::move($file->root(), $newroot)) return array(
        'status' => 'error',
        'msg'    => l::get('files.edit.errors.permissions')
      );

      // delete the old meta file
      if(c::get('lang.support')) {

        // make sure to remove the meta file without language extension        
        $invalidfile = dirname($file->root()) . '/' . $file->filename() . '.' . c::get('content.file.extension', 'txt');
        f::remove($invalidfile);

        // remove the translated meta file
        $oldmeta = dirname($file->root()) . '/' . $file->filename() . '.' . c::get('lang.current') . '.' . c::get('content.file.extension', 'txt');
      } else {
        $oldmeta = dirname($file->root()) . '/' . $file->filename() . '.' . c::get('content.file.extension', 'txt');      
      }
      f::remove($oldmeta);

    }
    
    if(c::get('lang.support')) {    

      // delete the untranslated file
      $delete = dirname($file->root()) . '/' . $newfilename . '.' . c::get('content.file.extension', 'txt');
      f::remove($delete);
      
      // set the translated file      
      $destination = dirname($file->root()) . '/' . $newfilename . '.' . c::get('lang.current') . '.' . c::get('content.file.extension', 'txt');
    } else {
      $destination = dirname($file->root()) . '/' . $newfilename . '.' . c::get('content.file.extension', 'txt');
    }
  
    $updateInfo  = self::updateFileinfo($file, $destination);

    if(error($updateInfo)) return $updateInfo;

    self::killCache();
            
    return array(
      'status' => 'success',
      'msg'    => l::get('files.edit.success')
    );
  
  }  
  
  static function updateFileinfo($file, $destination) {

    global $panel, $settings;

    $fields = $settings->filefields;
    $data   = array();
    $input  = r::data();

    if(empty($fields)) false;
    
    foreach($fields as $key => $value) {
      $v = a::get($input, $key);
      if(is_array($v)) {
        $data[$key] = implode(', ', $v);
      } else {
        $data[$key] = trim($v);
      }
    }
    
    return self::write($destination, $data);
              
  }

  static function deleteFile() {
        
    global $page;

    $filename = get('filename');
    $file = $page->files()->find($filename);

    if(!$file) return array(
      'status' => 'error',
      'msg' => l::get('files.delete.errors.notfound')
    );
            
    if(!f::remove($file->root())) return array(
      'status' => 'error',
      'msg'    => l::get('files.delete.errors.permissions')
    );
    
    // remove the meta file
    $meta = dirname($file->root()) . '/' . $file->filename() . '.' . c::get('content.file.extension', 'txt');
    f::remove($meta);
    
    if(c::get('lang.support')) {
      // delete each translated meta file
      foreach(c::get('lang.available') as $lang) {
        $meta = dirname($file->root()) . '/' . $file->filename() . '.' . $lang . '.' . c::get('content.file.extension', 'txt');
        f::remove($meta);          
      }
    }
            
    self::killCache();

    return array(
      'status' => 'success',
      'msg'    => l::get('files.delete.success') 
    );
  
  }  

  static function fetchData($template = false, $input=false) {
    
    if(!$input) $input = r::get();
    
    if($template) {    
      $params = settings::load($template);
      $fields = $params['fields'];
    } else {
      global $settings;
      $fields = $settings->fields;
    }
    
    $data = array();
    
    foreach($fields as $key => $value) {
      $v = a::get($input, $key);
      if(is_array($v)) {
        $data[$key] = implode(', ', $v);
      } else {
        $data[$key] = trim($v);
      }
    }
    
    return $data;
    
  }

  static function write($file, $values) {
        
    if(file_exists($file) && !is_writable($file)) return array(
      'status' => 'error',
      'msg'    => l::get('writer.errors.permissions')
    );

    $break  = false;
    $result = "\xEF\xBB\xBF";   
    $keys   = array();
    foreach($values AS $k => $v) {
      $k = str::urlify($k);
      $k = str::ucfirst(str_replace('-', '_', $k));
      if(in_array($k, $keys) || empty($k)) continue;
      $keys[] = $k;     
      $result .= $break . $k . ': ' . trim($v);
      $break = "\n\n----\n\n";    
    }
    @chmod(basename($file), 0666);
    $write = f::write($file, $result);
      
    if(!$write || !file_exists($file)) return array(
      'status' => 'error',
      'msg'    => l::get('writer.errors.write')
    );
    
    return array(
      'status' => 'success',
      'msg'    => l::get('writer.success')
    );
    
  }
  
  static function killCache() {
    return dir::clean(c::get('root.cache'));
  }

  static function findTemplates() {

    global $settings, $pages, $page, $site;

    $templates = array();

    if(@$settings->pages['template'] && !$site->isHome) {
      if(is_array($settings->pages['template'])) {
        $templates = $settings->pages['template'];   
      } else {
        $templates[] = $settings->pages['template'];
      }
    } else {

      $files = dir::read(c::get('root.site') . '/templates');
      
      foreach($files as $file) {

        $name = f::name($file);

        // check if it is valid or already there.
        if(empty($name) || in_array($name, $templates)) continue;

        // add it to the list of templates
        $templates[] = $name;            

      }
      
    }
            
    return $templates;  
  
  }

  static function countFiles() {
    
    global $page;
    $count = $page->files()->count()-1;
    if($count < 0) $count = 0;
    return $count;
    
  }

  static function templateName($name=false) {
    
    global $page;

    $template = ($name) ? $name : $page->template();
    $settings = settings::load($template);
    
    return ($settings) ? a::get($settings, 'title', str::ucfirst($template)) : str::ucfirst($template);
        
  }

}