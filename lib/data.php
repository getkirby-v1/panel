<?php

class data {

  static function childByUID($uid) {

    global $page, $pages, $site;
    return (!$site->uri->path(1)) ? $pages->find($uid) : $page->children()->find($uid);
  
  }

  static function fileByFilename($filename=false) {

    global $page;

    if(!$filename) $filename = get('file');
    $file = $page->files()->find($filename);
    
    return $file;
        
  }

  static function changeDirname() {

    global $page, $pages;

    if($page->isHomePage()) return array(
      'status' => 'error',
      'msg'    => 'You can\'t change the name of the homepage'
    );

    if($page->isErrorPage()) return array(
      'status' => 'error',
      'msg'    => 'You can\'t change the name of the error page'
    );

    $uid  = get('uid');
    $name = ($page->num()) ? $page->num() . '-' . $uid : $uid;

    if($name == $page->dirname()) return array(
      'status' => 'success',
      'msg'    => 'Nothing has changed'
    );

    if(!preg_match('!^[a-z0-9-_]+$!i', $name)) return array(
      'status' => 'error',
      'msg'    => 'Please only use the following characters a-z, 0-9, _, -'
    );
    
    $oldRoot = $page->root();
    $newRoot = dirname($page->root()) . '/' . $name;

    if(!is_writable($oldRoot)) return array(
      'status' => 'error',
      'msg'    => 'The directory name can not be changed'
    );
    
    if(is_dir($newRoot)) return array(
      'status' => 'error',
      'msg'    => 'The new url name already exists'
    );
    
    $siblings = $page->siblings();
    $check    = ($siblings) ? $siblings->find($uid) : false;
    
    if($check) return array(    
      'status' => 'error',
      'msg'    => 'The new url already exists'
    );
    
    $move = dir::move($oldRoot, $newRoot);
    
    if(!$move) return array(
      'status' => 'error',
      'msg'    => 'The directory could not be moved'
    );
    
    $url = str_replace('/' . $page->uid() . '/', '/' . $uid . '/', thisURL());

    self::killCache();
            
    go($url);
                    
  }

  static function removeNum($uid) {
            
    $p = self::childByUID($uid);
    
    if(!$p) return array(
      'status' => 'error',
      'msg'    => 'The page could not be found'
    );

    $dirname = dirname($p->root()) . '/' . $p->uid();
        
    if(!dir::move($p->root(), $dirname)) return array(
      'status' => 'error',
      'msg'    => 'The page could not be moved'    
    );
    
    return array(
      'status' => 'success',
      'msg'    => 'The page has been moved'
    );
    
  }

  static function changeNum($uid, $num) {
        
    $p = self::childByUID($uid);
        
    if(!$p) return array(
      'status' => 'error',
      'msg'    => 'The page could not be found'
    );

    if($num == $p->num()) return array(
      'status' => 'success',
      'msg'    => 'Nothing has changed'
    );

    $dirname = dirname($p->root()) . '/' . $num . '-' . $p->uid();
        
    if(!dir::move($p->root(), $dirname)) return array(
      'status' => 'error',
      'msg'    => 'The page could not be moved'    
    );
    
    return array(
      'status' => 'success',
      'msg'    => 'The page has been moved'
    );

  }
  
  static function sort() {
    
    $visible   = get('visible');
    $invisible = get('invisible');
    $errors    = array();    
    
    if(empty($visible) && empty($invisible)) return array(
      'status' => 'error',
      'msg'    => 'Nothing to sort'
    );

    if(!empty($visible)) {

      $cnt = count($visible);
      $len = str::length($cnt);
      $num = 0;
      
      if($len <= 1) $len = 2;
            
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
      'msg'    => 'Not all pages could be sorted',
      'error'  =>  $errors
    );

    self::killCache();
    
    return array(
      'status' => 'success',
      'msg'    => 'The pages have been sorted'
    );    
        
  }
  
  static function deleteDir() {

    $delete = self::childByUID(get('uid'));
        
    if(!$delete) return array(
      'status' => 'error',
      'msg'    => 'The page could not be found'
    );

    if($delete->isHomePage()) return array(
      'status' => 'error',
      'msg'    => 'You can\'t delete the homepage'
    );

    if($delete->isErrorPage()) return array(
      'status' => 'error',
      'msg'    => 'You can\'t delete the error page'
    );

    if($delete->hasChildren()) return array(
      'status' => 'error',
      'msg'    => 'This page has subpages. Please delete them first.'
    );
    
    if(!dir::remove($delete->root())) return array(
      'status' => 'error',
      'msg'    => 'The page could not be removed'
    );

    self::killCache();
    
    return array(
      'status' => 'success',
      'msg'    => 'The page has been removed'
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
      'msg'    => 'Please add a Title'
    );
    
    // build a urlified uid
    if(empty($uid)) $uid = str::urlify($title);
    
    if(empty($uid)) return array(
      'status' => 'error',
      'msg'    => 'Please add a URL for your page'
    );
    
    if(!preg_match('!^[a-z0-9-_]+$!i', $uid)) return array(
      'status' => 'error',
      'msg'    => 'Please only use the following characters a-z, 0-9, _, - for the URL'
    );

    $check = self::childByUID($uid);
        
    if($check) return array(    
      'status' => 'error',
      'msg'    => 'A page with that url already exists ' . $uid
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
      'msg'    => 'The directory could not be created'
    );

    if(c::get('lang.support')) {
      
      foreach(c::get('lang.available') as $lang) {
        $file  = $dir . '/' . $tpl . '.' . $lang . '.txt';
        $write = data::write($file, $data);        
        if(error($write)) return $write;
      }    
    
    } else {

      // write the default file
      $file  = $dir . '/' . $tpl . '.txt';
      $write = data::write($file, $data);        
  
      if(error($write)) return $write;
    
    }    

    self::killCache();
    
    return array(
      'status' => 'success',
      'msg'    => 'The new page has been created',
      'url'    => $url    
    );
              
  }

  static function updateContent() {
    
    global $page;
        
    $file = self::file();    
    $data = self::fetchData();
    
    if(empty($data['title'])) return array(
      'status' => 'error',
      'msg' => 'Please add a title'
    );
  
    // remove the file without language code    
    if(c::get('lang.support') && c::get('lang.current') == c::get('lang.default')) {
      $filename = $page->contents()->first()->name() . '.txt';
      $remove = $page->root() . '/' . $filename;
      if(file_exists($remove)) f::remove($remove);
    }

    self::killCache();
                                           
    return self::write($file, $data);
        
  }

  static function updateInfo() {
    
    if(c::get('lang.support')) {
      $file = c::get('root.content') . '/site.' . c::get('lang.current') . '.txt';    
    } else {
      $file = c::get('root.content') . '/site.txt';        
    }
    $keys = self::siteData();
    $data = array();

    foreach($keys as $key => $value) {
      $data[$key] = get($key);
    }
    
    if(empty($data['title'])) return array(
      'status' => 'error',
      'msg' => 'Please add a title'
    );
  
    // remove the file without language code    
    if(c::get('lang.support') && c::get('lang.current') == c::get('lang.default')) {
      $remove = c::get('root.content') . '/site.txt';
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
      $filename = $page->contents()->first()->name() . '.' . c::get('lang.current') . '.txt';
    } else {
      $filename = $page->contents()->first()->name() . '.txt';    
    }

    return $page->root() . '/' . $filename;  

  }
  
  static function uploadFile() {
    
    global $page;
    
    $upload = upload::file('file', $page->root() . '/{name}.{extension}');
    if(error($upload)) return $upload;

    self::killCache();

    return array(
      'status' => 'success',
      'msg'    => 'The file has been uploaded'
    );
  
  }  
  
  static function replaceFile() {
    
    global $page;

    $filename = get('filename');
    $file = $page->files()->find($filename);

    if(!$file) return array(
      'status' => 'error',
      'msg' => 'The file could not be found'
    );
    
    $upload = upload::file('file', $page->root() . '/' . $filename);
    if(error($upload)) return $upload;

    self::killCache();

    return array(
      'status' => 'success',
      'msg'    => 'The file has been uploaded'
    );
  
  }  

  static function editFile() {
    
    global $page;

    $filename = get('filename');
    $newname  = str::urlify(get('newname'));
    $file = $page->files()->find($filename);

    if(!$file) return array(
      'status' => 'error',
      'msg' => 'The file could not be found'
    );
    
    $newfilename = $newname . '.' . $file->extension();
    
    if($newfilename == $file->filename()) return array(
      'status' => 'success',
      'msg'    => 'Nothing has changed'
    );
    
    $newroot = dirname($file->root()) . '/' . $newfilename;

    if(file_exists($newroot)) return array(
      'status' => 'error',
      'msg'    => 'The the new name already exists'
    );
    
    if(!f::move($file->root(), $newroot)) return array(
      'status' => 'error',
      'msg'    => 'The file could not be renamed'
    );

    self::killCache();
            
    return array(
      'status' => 'success',
      'msg'    => 'The file has been uploaded'
    );
  
  }  

  static function deleteFile() {
        
    global $page;

    $filename = get('filename');
    $file = $page->files()->find($filename);

    if(!$file) return array(
      'status' => 'error',
      'msg' => 'The file could not be found'
    );
            
    if(!f::remove($file->root())) return array(
      'status' => 'error',
      'msg'    => 'The file could not be delete'
    );
            
    self::killCache();

    return array(
      'status' => 'success',
      'msg'    => 'The file has been deleted'
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
      $data[$key] = a::get($input, $key);
    }
    
    return $data;
    
  }

  static function write($file, $values) {
        
    if(file_exists($file) && !is_writable($file)) return array(
      'status' => 'error',
      'msg'    => 'The file is not writable'
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
      $break = "\n\r\n\r----\n\r\n\r";    
    }
    @chmod(basename($file), 0666);
    $write = f::write($file, $result);
      
    if(!$write || !file_exists($file)) return array(
      'status' => 'error',
      'msg'    => 'The data could not be added'
    );
    
    return array(
      'status' => 'success',
      'msg'    => 'The file has been saved'
    );
    
  }
  
  static function killCache() {
    
    if(c::get('cache.autoupdate'))    return false;
    if(!is_dir(c::get('root.cache'))) return false;      
    
    return dir::clean(c::get('root.cache'));
        
  }

  static function findTemplates() {

    global $settings, $pages, $page, $site;

    $templates = array();

    if(@$settings->pages['template'] && !$site->isHome) {
      $templates[] = $settings->pages['template'];
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


}

?>