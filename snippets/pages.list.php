<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>
<?php 

$children = ($type == 'visible') ? $children->visible() : $children->invisible();
if($settings->flip && $type == 'visible') $children = $children->flip();

?>
<h3><?php echo $headline ?></h3>
<ul class="<?php echo $type ?>">
  <?php $n=0; foreach($children AS $child): ?>
  <li<?php if($settings->limit && $n>=$settings->limit) echo ' class="more"' ?> id="<?php echo $child->uid() ?>">
    <?php if($panel->action == 'edit-pages'): ?>
    <div class="handle"></div>
    <input type="hidden" name="<?php echo $type ?>[]" value="<?php echo $child->uid() ?>" />
    <?php else: ?>
    <a href="<?php echo dourl('content', 'delete-page') ?>/?uid=<?php echo $child->uid() ?>" class="remove"><?php echo l::get('pages.delete') ?></a>
    <?php endif ?>

    <a href="<?php echo $child->url() ?>" class="title"><?php echo html(($child->title() != '') ? $child->title() : $child->uid()) ?></a>
  </li>
  <?php $n++; endforeach ?>
  <li class="empty<?php echo ($n>0) ? ' hide' : '' ?>"><em><?php echo l::get('pages.no.' . $type) ?></em></li>
</ul>

<?php if($settings->limit && $children->count() > $settings->limit): ?>
<a class="more" href="#more-<?php echo $type ?>" data-more="<?php echo l::get('pages.show.more') ?>…" data-less="<?php echo l::get('pages.show.less') ?>…"><?php echo l::get('pages.show.more') ?>…</a>  
<?php endif ?>