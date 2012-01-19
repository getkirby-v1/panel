<?php if($settings->pages): ?>
<?php

if(get('sort-action') == 'cancel') {
  go(showurl('pages'));
}

if(get('sort-action') == 'ok') {

  $result = data::sort();

  if(success($result)) go(showurl('pages'));
  growl($result);

}

$headline = ($panel->isHome) ? 'Main pages' : 'Pages';
$children = ($panel->isHome) ? $pages : $page->children();

?>
<div class="subpages<?php echo ($panel->action == 'edit-pages') ? ' sortable' : '' ?>">

  <?php if($panel->action == 'edit-pages'): ?>
  <form method="post">
  <h3><?php echo $headline ?> <span class="options"><button name="sort-action" value="ok">Ok</button><button name="sort-action" value="cancel">Cancel</button></span></h3>
  <?php else: ?>
  <h3><?php echo $headline ?> <span class="options"><a class="edit" href="<?php echo dourl('pages', 'edit-pages') ?>">Sort</a><a class="add" href="<?php echo dourl('pages', 'add-page') ?>">Add</a></span></h3>  
  <?php endif ?>

  <ul class="visible">
    <?php $n=0; foreach($children->visible() AS $child): ?>
    <li id="<?php echo $child->uid() ?>">
      <?php if($panel->action == 'edit-pages'): ?>
      <div class="handle"></div>
      <input type="hidden" name="visible[]" value="<?php echo $child->uid() ?>" />
      <?php else: ?>
      <a href="<?php echo dourl('pages', 'delete-page') ?>/?uid=<?php echo $child->uid() ?>" class="remove">Remove</a>
      <?php endif ?>

      <a href="<?php echo $child->url() ?>" class="title"><?php echo html($child->title()) ?></a>
    </li>
    <?php $n++; endforeach ?>
    <?php if($n==0): ?>
    <li class="empty"><em>No visible pages so far</em></li>
    <?php else: ?>    
    <li class="empty hide"><em>No visible pages so far</em></li>
    <?php endif ?>
  </ul>

  <h3>Insivible pages</h3>
  
  <ul class="invisible">
    <?php $n=0; foreach($children->invisible() AS $child): ?>
    <li id="<?php echo $child->uid() ?>">
      <?php if($panel->action == 'edit-pages'): ?>
      <div class="handle"></div>
      <input type="hidden" name="invisible[]" value="<?php echo $child->uid() ?>" />
      <?php else: ?>
      <a href="<?php echo dourl('pages', 'delete-page') ?>/?uid=<?php echo $child->uid() ?>" class="remove">Remove</a>
      <?php endif ?>

      <a href="<?php echo $child->url() ?>" class="title"><?php echo html($child->title()) ?></a>
    </li>
    <?php $n++; endforeach ?>
    <?php if($n==0): ?>
    <li class="empty"><em>No invisible pages so far</em></li>
    <?php else: ?>    
    <li class="empty hide"><em>No invisible pages so far</em></li>
    <?php endif ?>
  </ul>

  <?php if($panel->action == 'edit-pages'): ?>
  </form>
  <?php endif ?>
  
</div>

<?php require_once('pages.add.php') ?>
<?php require_once('pages.delete.php') ?>

<?php else: ?>
<div class="subpages">
<h3>Pages</h3>
<ul>
  <li><em>This page is not supposed to have subpages</em></li>
</ul>
</div>
<?php endif ?>