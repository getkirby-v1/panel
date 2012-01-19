<?php

class panel extends site {

  function __construct() {

    s::start();
        
    c::set('home.keepurl', true);
    
    // auto-detect the url if it is not set
    if(!c::get('url')) c::set('url', c::get('scheme') . server::get('http_host'));
    
    // setup the thumb plugin
    c::set('thumb.cache.root', c::get('root') . '/thumbs');
    c::set('thumb.cache.url',  c::get('url')  . '/thumbs');

    c::set('url', c::get('url') . '/' . c::get('panel.folder'));

    // remove the panel folder name from the uri
    c::set('subfolder', ltrim(c::get('subfolder') . '/' . c::get('panel.folder'), '/'));

    // attach the uri after caching
    $this->uri = new uri();
    
    if(c::get('lang.support')) {
            
      $path  = $this->uri->path->toArray();
      $first = array_shift($path);
  
      if(!in_array($first, c::get('lang.available', array()))) $first = c::get('lang.default');
      
      // set the current language
      c::set('lang.current', $first);
          
      $this->uri->path = new uriPath($path);

    }

    // get the first set of pages
    $this->rootPages();
    // get the additional site info from content/site.txt
    $this->siteInfo();
                                  
  }
  
  function load() {

    // initiate the site and make pages and page
    // globally available
    $site     = $this;
    $panel    = $this;
    $pages    = $this->pages;
    $page     = $this->pages->active();

    g::set('site',  $this);
    g::set('pages', $pages);
    g::set('page',  $page);
    
    // initiate the user settings
    $settings = new settings();
    g::set('settings', $settings);
  
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
    
    switch($panel->show) {
      case 'logout':
        me::logout();
        exit();
        break;
      case 'files':
        $panel->fancybox = true;
        $panel->thumbs   = true;
        break;
      // more available views
      case 'info': case 'home': case 'pages': case 'options':
        break;
      default:
        if(!$panel->show && $panel->nocontent) go(showurl('files'));
        if(!$panel->show && $settings->tab)    go(showurl($settings->tab));
        $panel->show = 'content';
        break;
    }

    // set the template file;
    $panel->templateFile = $panel->show . '.php';
    $panel->templateRoot = c::get('root.panel') . '/templates';

    content::start();

    if(me::loggedIn()) {
      require($panel->templateRoot . '/header.php');
      require($panel->templateRoot . '/' . $panel->templateFile);
      require($panel->templateRoot . '/footer.php');
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
    
}

?>