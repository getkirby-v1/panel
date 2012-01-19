<?php if(!$settings->nocontent): ?>
<?php action::updateContent() ?>
<div class="form">		
  
  <form action="<?php echo showurl('content') ?>" method="post">
    <?php echo form::load($settings->fields); ?>		

    <fieldset class="bottom">
      <div class="buttons">
        <input type="submit" name="update-content" value="Save" />
      </div>
    </fieldset>
  </form>

  <div class="pagination">
    <?php if($page->hasPrev()): ?>
    <a class="prev" href="<?php echo $page->prev()->url() ?>/show:content">&lsaquo; Previous</a>
    <?php endif ?>
  
    <?php if($page->hasNext()): ?>
    <a class="next" href="<?php echo $page->next()->url() ?>/show:content">Next &rsaquo;</a>
    <?php endif ?>
  </div>
      
</div>

<?php else: ?>
<div class="form">
  <h3>No Content</h3>
  <em class="empty">There's no content for this page available.</em>
</div>
<?php endif ?>