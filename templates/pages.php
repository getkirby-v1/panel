<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>
<?php if($settings->pages): ?>
<?php

$children  = ($panel->isHome) ? $pages : $page->children();
$visible   = $children->visible();
$invisible = $children->invisible();

if($settings->flip) $visible = $visible->flip();

$action = action::sortPages($settings->flip);

$visibleHeadline   = ($panel->isHome) ? l::get('pages.title.home') : l::get('pages.title');
$invisibleHeadline = ($panel->isHome) ? l::get('pages.invisible.home') : l::get('pages.invisible');

?>
<div class="subpages<?php echo ($panel->action == 'edit-pages') ? ' sortable' : '' ?>">

  <form method="post">

  <div class="bar">

    <?php if(!$panel->isHome): ?>
    <a class="button back" href="<?php echo ($page->parent()) ? $page->parent()->url() : url() ?>"><span><?php echo ($page->parent()) ? html($page->parent()->title()) : l::get('pages.home') ?></span></a>
    <?php endif ?>

    <?php if($panel->action == 'edit-pages'): ?>
    <span class="buttons">
      <button class="button" name="sort-action" value="ok"><?php echo l::get('ok') ?></button>
      <button class="button" name="sort-action" value="cancel"><?php echo l::get('cancel') ?></button>
    </span>
    <?php else: ?>
    <span class="buttons">
      <?php if($children->count() && $settings->sortable): ?>
      <a class="button sort" href="<?php echo dourl('dashboard', 'edit-pages') ?>"><?php echo l::get('pages.sort') ?></a>
      <?php endif ?>
      <a class="button add" title="<?php echo l::get('pages.add') ?>" href="<?php echo dourl('dashboard', 'add-page') ?>"><?php echo l::get('pages.add') ?></a>
    </span>
    <?php endif ?>

  </div>

  <h3><?php echo $visibleHeadline ?></h3>
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

  </form>
  
</div>

<?php require_once('pages.add.php') ?>
<?php require_once('pages.delete.php') ?>

<?php else: ?>
<div class="subpages">

  <div class="bar">
    <?php if(!$panel->isHome): ?>
    <a class="button back" href="<?php echo ($page->parent()) ? $page->parent()->url() : url() ?>"><span><?php echo ($page->parent()) ? html($page->parent()->title()) : l::get('pages.home') ?></span></a>
    <?php endif ?>
  </div>

  <h3><?php echo l::get('nopages.title') ?></h3>
  <ul>
    <li class="empty"><em><?php echo l::get('nopages.text') ?></em></li>
  </ul>

</div>
<?php endif ?>