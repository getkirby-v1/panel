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

<?php if(c::get('panel.color')) require_once('colors.php') ?>

</head>

<body class="<?php echo $panel->uri->path(1) ?> <?php echo browser::css() ?>">

<div class="header">

  <a class="logo" href="<?php echo url() ?>">Kirby CMS</a>
  
  <?php if(c::get('lang.support')): ?>
  <select class="lang" onchange="window.location = this.value">
    <?php foreach(c::get('lang.available') as $lang): ?>  

    <option value="<?php echo str_replace(c::get('panel.folder') . '/' . c::get('lang.current') . '/', c::get('panel.folder') . '/' . $lang . '/', thisURL()) ?>"<?php if($lang == c::get('lang.current')) echo ' selected="selected"' ?>><?php echo str::upper($lang) ?></option>
    <?php endforeach ?>
  </select>
  <?php endif ?>
    
  <a class="logout" href="<?php echo showurl('logout') ?>">Logout</a>

</div>

<div class="subheader<?php if($panel->isHome) echo ' home' ?>">
  
  <?php if($panel->isHome): ?>
  <h1>
    <?php if($panel->show == 'info'): ?>
    <a class="home" href="<?php echo u() ?>"><strong>Home</strong> <span>&rsaquo;</span> Your Site <span>&rsaquo;</span></a>
    <a href="<?php echo showurl('info') ?>">Info</a>
    <?php else: ?>
    <a class="home" href="<?php echo u() ?>"><strong>Home</strong> <span>&lsaquo;</span> Your Site</a>    
    <?php endif ?>
  </h1>
  <h2>
    <a target="_blank" title="<?php echo ourl() ?>" href="<?php echo ourl() ?>"><?php echo ourl() ?></a>
  </h2>
  <?php else: ?>
  <h1>
    <a class="home" href="<?php echo u() ?>"><strong>Home</strong> <span>&rsaquo;</span></a>
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
    <li><a<?php echo $panel->show == 'content' ?  ' class="active"' : '' ?> href="<?php echo showurl('content') ?>">Content</a></li>  
    <li><a<?php echo $panel->show == 'pages' ?    ' class="active"' : '' ?> href="<?php echo showurl('pages') ?>">Pages <strong><?php echo $page->children()->count() ?></strong></a></li>  
    <li><a<?php echo $panel->show == 'files'   ?  ' class="active"' : '' ?> href="<?php echo showurl('files') ?>">Files <strong><?php echo $page->files()->count()-1 ?></strong></a></li>  
    <li><a<?php echo $panel->show == 'options' ?  ' class="active"' : '' ?> href="<?php echo showurl('options') ?>">URL</a></li>  
  </ul>
  <?php endif ?>
  
</div>

<div class="content">
