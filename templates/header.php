<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>
<!DOCTYPE html>
<html>
<head>

<?php if($panel->isHome): ?>
<title><?php echo html($panel->title()) ?></title>
<?php else: ?>
<title><?php echo html($panel->title()) ?> - <?php echo html($page->title()) ?></title>
<?php endif ?>

<meta charset="utf-8" />
<meta name="viewport" id="viewport" content="width=device-width; initial-scale=1.0; user-scalable=1;" />
<meta name="robots" content="noindex,nofollow,noarchive" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<?php require_once('standalone.php') ?>

<link rel="shortcut icon" href="<?= url('assets/images/favicon.png') ?>" type="image/png" />
<link rel="icon" href="<?= url('assets/images/favicon.png') ?>" type="image/png" />
<link rel="apple-touch-icon" href="<?= url('assets/images/apple-touch-icon.png') ?>" />

<link rel="stylesheet" href="<?php echo c::get('panel.url') ?>/assets/css/styles.css" />

<script src="<?php echo c::get('panel.url') ?>/assets/js/jquery.js"></script>
<?php if($panel->sortable): ?>
<script src="<?php echo c::get('panel.url') ?>/assets/js/jquery-ui.js"></script>
<?php endif ?>
<script src="<?php echo c::get('panel.url') ?>/assets/js/scripts.js"></script>

<?php if($panel->fancybox): ?>
<link rel="stylesheet" href="<?php echo c::get('panel.url') ?>/assets/fancybox/jquery.fancybox.css" />
<script src="<?php echo c::get('panel.url') ?>/assets/fancybox/jquery.fancybox.js"></script>
<?php endif ?>

<?php if(c::get('panel.color') && c::get('panel.color') != 'red') require_once('colors.php') ?>

</head>

<body class="<?php echo $panel->uri->path(1) ?> <?php echo browser::css() ?>">

<div class="header">

  <a class="logo" href="<?php echo url() ?>"><?php echo l::get('kirby.title') ?></a>
  
  <?php if(c::get('lang.support')): ?>
  <select class="lang" onchange="window.location = this.value">
    <?php foreach(c::get('lang.available') as $lang): ?>  

    <option value="<?php echo str_replace(c::get('panel.folder') . '/' . c::get('lang.current') . '/', c::get('panel.folder') . '/' . $lang . '/', thisURL()) ?>"<?php if($lang == c::get('lang.current')) echo ' selected="selected"' ?>><?php echo str::upper($lang) ?></option>
    <?php endforeach ?>
  </select>
  <?php endif ?>
    
  <a class="logout" href="<?php echo showurl('logout') ?>"><?php echo l::get('header.logout') ?></a>

</div>

<div class="subheader<?php if($panel->isHome) echo ' home' ?>">
  
  <?php if($panel->isHome): ?>
  <h1>
    <?php if($panel->show == 'info'): ?>
    <a class="home" href="<?php echo u() ?>"><strong><?php echo l::get('subheader.home') ?></strong> <span>&rsaquo;</span> <?php echo l::get('subheader.site') ?> <span>&rsaquo;</span></a>
    <a href="<?php echo showurl('info') ?>"><?php echo l::get('subheader.info') ?></a>
    <?php else: ?>
    <a class="home" href="<?php echo u() ?>"><strong><?php echo l::get('subheader.home') ?></strong> <span>&lsaquo;</span> <?php echo l::get('subheader.site') ?></a>    
    <?php endif ?>
  </h1>
  <h2>
    <a target="_blank" title="<?php echo ourl() ?>" href="<?php echo ourl() ?>"><?php echo ourl() ?></a>
  </h2>
  <?php else: ?>
  <h1>
    <a class="home" href="<?php echo u() ?>"><strong><?php echo l::get('subheader.home') ?></strong> <span>&rsaquo;</span></a>
    <?php foreach($site->breadcrumb() as $l): ?>
    <a<?php if($l->isActive()) echo ' class="active"' ?> href="<?php echo $l->url() ?>"><?php echo $l->title() ?> <span>&rsaquo;</span></a>
    <?php endforeach ?> 
  </h1>
  <h2>
    <a target="_blank" title="<?php echo ourl($page->url()) ?>" href="<?php echo ourl($page->url()) ?>"><?php echo ourl($page->url()) ?>/</a>
  </h2>
  <?php endif ?>
  
  <?php if(!$panel->isHome): ?>    
  <ul class="submenu">
    <li><a<?php echo $panel->show == 'content' ?  ' class="active"' : '' ?> href="<?php echo showurl('content') ?>"><?php echo l::get('tabs.content') ?></a></li>  
    <li><a<?php echo $panel->show == 'pages' ?    ' class="active"' : '' ?> href="<?php echo showurl('pages') ?>"><?php echo l::get('tabs.pages') ?> <strong><?php echo $page->children()->count() ?></strong></a></li>  
    <li><a<?php echo $panel->show == 'files'   ?  ' class="active"' : '' ?> href="<?php echo showurl('files') ?>"><?php echo l::get('tabs.files') ?> <strong><?php echo data::countFiles() ?></strong></a></li>  
    <li><a<?php echo $panel->show == 'options' ?  ' class="active"' : '' ?> href="<?php echo showurl('options') ?>"><?php echo l::get('tabs.options') ?></a></li>  
  </ul>
  <?php endif ?>
  
</div>

<div class="content">
