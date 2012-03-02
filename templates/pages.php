<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>
<?php if($settings->pages): ?>
<?php

$children  = ($panel->isHome) ? $pages : $page->children();
$visible   = $children->visible();
$invisible = $children->invisible();

if($settings->flip) $visible = $visible->flip();

$action = action::sortPages($this->flip);

$visibleHeadline   = ($panel->isHome) ? l::get('pages.title.home') : l::get('pages.title');
$invisibleHeadline = ($panel->isHome) ? l::get('pages.invisible.home') : l::get('pages.invisible');

?>
<div class="subpages<?php echo ($panel->action == 'edit-pages') ? ' sortable' : '' ?>">

  <?php if(!$panel->isHome): ?>
  <h3><?php echo l::get('pages.parent') ?></h3>
  <ul>
    <li><a class="parent" href="<?php echo ($page->parent()) ? $page->parent()->url() : url() ?>"><b>&lsaquo;</b><?php echo ($page->parent()) ? html($page->parent()->title()) : l::get('pages.home') ?></a></li>
  </ul>
  <?php endif ?>
  
  <?php if($panel->action == 'edit-pages'): ?>
  <form method="post">
  <h3><?php echo $visibleHeadline ?> 
    <span class="options">
      <button name="sort-action" value="ok"><?php echo l::get('ok') ?></button>
      <button name="sort-action" value="cancel"><?php echo l::get('cancel') ?></button>
    </span>
  </h3>
  <?php else: ?>
  <h3><?php echo $visibleHeadline ?> 
    <span class="options">
      <?php if($children->count() && $settings->sortable): ?>
      <a class="sort" href="<?php echo dourl('dashboard', 'edit-pages') ?>"><?php echo l::get('pages.sort') ?></a>
      <?php endif ?>
      <a class="add" href="<?php echo dourl('dashboard', 'add-page') ?>"><?php echo l::get('pages.add') ?></a>
    </span>
  </h3>  
  <?php endif ?>

  <ul class="visible">
    <?php $n=0; foreach($visible AS $child): ?>
    <li<?php if($settings->limit && $n>=$settings->limit) echo ' class="more"' ?> id="<?php echo $child->uid() ?>">
      <?php if($panel->action == 'edit-pages'): ?>
      <div class="handle"></div>
      <input type="hidden" name="visible[]" value="<?php echo $child->uid() ?>" />
      <?php else: ?>
      <a href="<?php echo dourl('dashboard', 'delete-page') ?>/?uid=<?php echo $child->uid() ?>" class="remove"><?php echo l::get('pages.delete') ?></a>
      <?php endif ?>

      <a href="<?php echo $child->url() ?>/show:dashboard" class="title"><?php echo html($child->title()) ?></a>
    </li>
    <?php $n++; endforeach ?>
    <li class="empty<?php echo ($n>0) ? ' hide' : '' ?>"><em><?php echo l::get('pages.no.visible') ?></em></li>
  </ul>

  <?php if($settings->limit && $visible->count() > $settings->limit): ?>
  <a class="more" href="#more-visible" data-more="<?php echo l::get('pages.show.more') ?>…" data-less="<?php echo l::get('pages.show.less') ?>…"><?php echo l::get('pages.show.more') ?>…</a>  
  <?php endif ?>

  <h3><?php echo $invisibleHeadline ?></h3>
  
  <ul class="invisible">
    <?php $n=0; foreach($invisible AS $child): ?>
    <li<?php if($settings->limit && $n>=$settings->limit) echo ' class="more"' ?> id="<?php echo $child->uid() ?>">
      <?php if($panel->action == 'edit-pages'): ?>
      <div class="handle"></div>
      <input type="hidden" name="invisible[]" value="<?php echo $child->uid() ?>" />
      <?php else: ?>
      <a href="<?php echo dourl('dashboard', 'delete-page') ?>/?uid=<?php echo $child->uid() ?>" class="remove"><?php echo l::get('pages.delete') ?></a>
      <?php endif ?>

      <a href="<?php echo $child->url() ?>/show:dashboard" class="title"><?php echo html($child->title()) ?></a>
    </li>
    <?php $n++; endforeach ?>
    <li class="empty<?php echo ($n>0) ? ' hide' : '' ?>"><em><?php echo l::get('pages.no.invisible') ?></em></li>
  </ul>

  <?php if($settings->limit && $invisible->count() > $settings->limit): ?>
  <a class="more" href="#more-invisible" data-more="<?php echo l::get('pages.show.more') ?>…" data-less="<?php echo l::get('pages.show.less') ?>…"><?php echo l::get('pages.show.more') ?>…</a>  
  <?php endif ?>

  <?php if($panel->action == 'edit-pages'): ?>
  </form>
  <?php endif ?>
  
</div>

<?php require_once('pages.add.php') ?>
<?php require_once('pages.delete.php') ?>

<?php else: ?>
<div class="subpages">

<?php if(!$panel->isHome): ?>
<h3><?php echo l::get('pages.parent') ?></h3>
<ul>
  <li><a class="parent" href="<?php echo ($page->parent()) ? $page->parent()->url() : url() ?>"><b>&lsaquo;</b><?php echo ($page->parent()) ? html($page->parent()->title()) : l::get('pages.home') ?></a></li>
</ul>
<?php endif ?>

<h3><?php echo l::get('nopages.title') ?></h3>
<ul>
  <li><em><?php echo l::get('nopages.text') ?></em></li>
</ul>
</div>
<?php endif ?>