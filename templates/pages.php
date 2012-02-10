<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>
<?php if($settings->pages): ?>
<?php

$action   = action::sortPages();
$headline = ($panel->isHome) ? l::get('pages.title.home') : l::get('pages.title');
$children = ($panel->isHome) ? $pages : $page->children();

?>
<div class="subpages<?php echo ($panel->action == 'edit-pages') ? ' sortable' : '' ?>">

  <?php if($panel->action == 'edit-pages'): ?>
  <form method="post">
  <h3><?php echo $headline ?> 
    <span class="options">
      <button name="sort-action" value="ok"><?php echo l::get('ok') ?></button>
      <button name="sort-action" value="cancel"><?php echo l::get('cancel') ?></button>
    </span>
  </h3>
  <?php else: ?>
  <h3><?php echo $headline ?> 
    <span class="options">
      <?php if($children->count()): ?>
      <a class="sort" href="<?php echo dourl('pages', 'edit-pages') ?>"><?php echo l::get('pages.sort') ?></a>
      <?php endif ?>
      <a class="add" href="<?php echo dourl('pages', 'add-page') ?>"><?php echo l::get('pages.add') ?></a>
    </span>
  </h3>  
  <?php endif ?>

  <ul class="visible">
    <?php $n=0; foreach($children->visible() AS $child): ?>
    <li id="<?php echo $child->uid() ?>">
      <?php if($panel->action == 'edit-pages'): ?>
      <div class="handle"></div>
      <input type="hidden" name="visible[]" value="<?php echo $child->uid() ?>" />
      <?php else: ?>
      <a href="<?php echo dourl('pages', 'delete-page') ?>/?uid=<?php echo $child->uid() ?>" class="remove"><?php echo l::get('pages.delete') ?></a>
      <?php endif ?>

      <a href="<?php echo $child->url() ?>" class="title"><span class="num"><?php echo $child->num() ?></span><?php echo html($child->title()) ?></a>
    </li>
    <?php $n++; endforeach ?>
    <li class="empty<?php echo ($n>0) ? ' hide' : '' ?>"><em><?php echo l::get('pages.no.visible') ?></em></li>
  </ul>

  <h3><?php echo l::get('pages.invisible') ?></h3>
  
  <ul class="invisible">
    <?php $n=0; foreach($children->invisible() AS $child): ?>
    <li id="<?php echo $child->uid() ?>">
      <?php if($panel->action == 'edit-pages'): ?>
      <div class="handle"></div>
      <input type="hidden" name="invisible[]" value="<?php echo $child->uid() ?>" />
      <?php else: ?>
      <a href="<?php echo dourl('pages', 'delete-page') ?>/?uid=<?php echo $child->uid() ?>" class="remove"><?php echo l::get('pages.delete') ?></a>
      <?php endif ?>

      <a href="<?php echo $child->url() ?>" class="title"><?php echo html($child->title()) ?></a>
    </li>
    <?php $n++; endforeach ?>
    <li class="empty<?php echo ($n>0) ? ' hide' : '' ?>"><em><?php echo l::get('pages.no.invisible') ?></em></li>
  </ul>

  <?php if($panel->action == 'edit-pages'): ?>
  </form>
  <?php endif ?>
  
</div>

<?php require_once('pages.add.php') ?>
<?php require_once('pages.delete.php') ?>

<?php else: ?>
<div class="subpages">
<h3><?php echo l::get('nopages.title') ?></h3>
<ul>
  <li><em><?php echo l::get('nopages.text') ?></em></li>
</ul>
</div>
<?php endif ?>