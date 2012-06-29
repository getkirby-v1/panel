<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

class panel extends site {

  function __construct() {

    s::start();
        
    $this->urlSetup();
                        
    // setup the thumb plugin
    c::set('thumb.cache.root', c::get('root') . '/thumbs');
    c::set('thumb.cache.url',  dirname(c::get('url'))  . '/thumbs');

    // set the rewrite mode
    $rewrite = c::get('rewrite');
    $config  = c::get();
    
    if(isset($config['panel.rewrite'])) $rewrite = $config['panel.rewrite'];
    
    c::set('panel.rewrite', $rewrite);

    // attach the uri after caching
    $this->uri = new paneluri();
    
    if(c::get('lang.support')) {
            
      $path  = $this->uri->path->toArray();
      $first = array_shift($path);
  
      if(!in_array($first, c::get('lang.available', array()))) {
        if(empty($first)) {
          $first = c::get('lang.default');
        } else {
          go(c::get('panel.url'));
        }
      }
      
      // set the current language
      c::set('lang.current', $first);
          
      $this->uri->path = new uriPath($path);

      // mark if this is a translated version or the default version
      (c::get('lang.current') != c::get('lang.default')) ? c::set('lang.translated', true) : c::set('lang.translated', false);

    }

    // get the first set of pages
    $this->rootPages();
    // get the additional site info from content/site.txt
    $this->info();
                                  
  }
  
  function load() {

    // initiate the site and make pages and page
    // globally available
    $site     = $this;
    $panel    = $this;
    $pages    = $this->pages;
    $page     = $this->pages->active();

    if($page->isErrorPage() && $this->uri()->path() != c::get('404')) {
      go(url(c::get('404')));
    }

    g::set('site',  $this);
    g::set('panel', $this);
    g::set('pages', $pages);
    g::set('page',  $page);

    // set the global template vars
    tpl::set('site',  $this);
    tpl::set('panel', $this);
    tpl::set('pages', $pages);
    tpl::set('page',  $page);
    
    // initiate the user settings
    $settings = new settings();
    g::set('settings', $settings);
    tpl::set('settings', $settings);

    // add a user
    $panel->user = new user;
        
    // load the language
    paneload::language();

    // check for a valid array of user accounts and other correct setups
    if(!check::installed() || !check::hasAccounts() || check::stillHasDefaultAccount() || check::wrongKirbyVersion() || check::wrongPanelVersion()) {
      require(c::get('root.panel') . '/modals/installation.php');    
      return;
    }

    // add all panel info  
    $panel->isHome    = (!$panel->uri->path(1)) ? true : false;
    $panel->show      = $panel->uri->param('show');
    $panel->action    = $panel->uri->param('do');
    $panel->nocontent = ((string)$page->contents() == '') ? true : false;
              
    if($panel->isHome && $panel->show != 'info' && $panel->show != 'logout') $panel->show = 'home';
                  
    switch($panel->action) {
      case 'edit-pages':
        $panel->sortable = true;
        break;
    }

    if($panel->isHome) {
      $settings->pages = true;            
      $settings->flip  = false;            
    }
    
    switch($panel->show) {
      case 'logout':
        $panel->user->logout();
        exit();
        break;
      case 'files':
        $thumbDir = c::get('root') . '/thumbs';
        $panel->fancybox = true;
        $panel->thumbs   = (is_dir($thumbDir) && is_writable($thumbDir)) ? true : false;
        break;
      // more available views
      case 'info': case 'home': case 'pages': case 'options':
        
        if(($panel->show == 'home' || $panel->show == 'info') && !$panel->isHome) {
          go(url() . '/show:' . $panel->show);
        }
        
        break;
      default:
        
        $valid = array('options', 'content');
        if(!in_array($panel->show, $valid)) {
          $panel->show = 'content';                
        } 
              
        break;
    }

    // init the form
    if($panel->show == 'info' || $panel->show == 'content') {
      $panel->form = new form($settings);
    }

    // set the template file;
    $panel->templateFile = $panel->show . '.php';
    $panel->templateRoot = c::get('root.panel') . '/templates';
    
    content::start();

    if($panel->user->isLoggedIn()) {
      require($panel->templateRoot . '/' . $panel->templateFile);
    } else {
      require($panel->templateRoot . '/login.php');
    }

    content::end();
  
  }

  function breadcrumb() {
    
    $breadcrumb = parent::breadcrumb();
    $breadcrumb = $breadcrumb->toArray();
    array_shift($breadcrumb);
    
    return new pages($breadcrumb);
      
  }

  function urlSetup() {

    c::set('home.keepurl', true);

    parent::urlSetup();

    $url         = c::get('url');
    $panelFolder = c::get('panel.folder');
    $subfolder   = c::get('subfolder');
    
    // add the panel folder to the subfolder
    if($subfolder && !preg_match('!' . preg_quote($panelFolder) . '$!i', $subfolder)) $subfolder .= '/' . $panelFolder;
        
    // check if the url already contains the subfolder      
    // so it's not included twice
    if(!preg_match('!' . preg_quote($panelFolder) . '$!i', $url)) $url .= '/' . $panelFolder;
    
    // make sure everyting is added to the config    
    c::set('subfolder', $subfolder);
    c::set('panel.url', $url);
    c::set('url', $url);
    
  }

}