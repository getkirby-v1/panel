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

<link rel="stylesheet" href="<?php echo c::get('panel.url') ?>/assets/css/styles.css" />

<script src="<?php echo c::get('panel.url') ?>/assets/js/jquery.js"></script>
<script src="<?php echo c::get('panel.url') ?>/assets/js/jquery.ui.js"></script>
<script src="<?php echo c::get('panel.url') ?>/assets/js/scripts.js"></script>

<?php if($panel->fancybox): ?>
<link rel="stylesheet" href="<?php echo c::get('panel.url') ?>/assets/fancybox/jquery.fancybox.css" />
<script src="<?php echo c::get('panel.url') ?>/assets/fancybox/jquery.fancybox.js"></script>
<?php endif ?>

<?php if($panel->form) echo $panel->form->css() ?>

<?php if(c::get('panel.color') && c::get('panel.color') != 'red') require_once('colors.php') ?>

</head>

<body class="<?php echo $panel->uri->path(1) ?> <?php echo browser::css() ?>">

<div class="menu">
  <h1><a class="home" href="<?php echo u() ?>">Kirby Panel</a></h1>
  <?php require('pages.php') ?>
</div>

<div class="content">

  <div class="header<?php if($panel->isHome) echo ' home' ?>">
    
    <?php if($panel->isHome): ?>
    <h2>
      <?php if($panel->show == 'info'): ?>
      <a href="<?php echo u() ?>"><?php echo l::get('subheader.site') ?></a> <small>&rarr;</small> <a href="<?php echo showurl('info') ?>"><?php echo l::get('subheader.info') ?></a>
      <?php else: ?>
      <a href="<?php echo u() ?>"><?php echo l::get('subheader.site') ?></a>    
      <?php endif ?>
    </h2>
    <?php else: ?>
    <h2>
      <?php foreach($site->breadcrumb() as $l): ?>
      <a<?php if($l->isActive()) echo ' class="active"' ?> href="<?php echo $l->url() ?>"><?php echo $l->title() ?></a> <small>&rarr;</small>
      <?php endforeach ?> 
    </h2>
    <?php endif ?>

    <a class="logout" href="<?php echo showurl('logout') ?>"><?php echo l::get('header.logout') ?></a>
      
  </div>

  <?php if(!$panel->isHome): ?>    
  <ul class="bar submenu">
    <li><a<?php echo $panel->show == 'content' ?   ' class="active"' : '' ?> href="<?php echo showurl('content') ?>"><?php echo l::get('tabs.content') ?></a></li>  
    <li><a<?php echo $panel->show == 'files'   ?   ' class="active"' : '' ?> href="<?php echo showurl('files') ?>"><?php echo l::get('tabs.files') ?></a></li>  
    <li><a<?php echo $panel->show == 'options' ?   ' class="active"' : '' ?> href="<?php echo showurl('options') ?>"><?php echo l::get('tabs.options') ?></a></li>  
    <li class="preview"><a target="_blank" href="<?php echo ourl($page->url()) ?>"><?php echo l::get('tabs.preview') ?></a></li>  
  </ul>
  <?php else: ?>
  <ul class="bar submenu">
    <li><a<?php echo $panel->show != 'info' ? ' class="active"' : '' ?> href="<?php echo u() ?>"><?php echo l::get('tabs.overview') ?></a></li>  
    <li><a<?php echo $panel->show == 'info' ? ' class="active"' : '' ?> href="<?php echo showurl('info') ?>"><?php echo l::get('tabs.info') ?></a></li>  
    <li class="preview"><a title="<?php echo l::get('tabs.preview') ?>" target="_blank" href="<?php echo ourl() ?>"><?php echo l::get('tabs.preview') ?></a></li>  
  </ul>  
  <?php endif ?>
