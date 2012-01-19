<?php if(!$page->isHomePage()): ?>
<?php

if(get('options')) {
  $result = data::changeDirname();
  growl($result);
}

?>
<div class="options form">

  <form action="<?php echo thisURL() ?>" method="post">
    
    <fieldset>    
      <div class="field url">
        <label>URL</label>
        <span class="url"><em><?php echo dirname(ourl($page->url())) ?>/</em><strong><input type="url" name="uid" value="<?php echo $page->uid() ?>" /></strong></span>
      </div>
    </fieldset>
    <fieldset class="bottom">
      <div class="buttons">
        <input type="submit" name="options" value="Save">
      </div>
    </fieldset>
    
  </form>
    
</div>
<?php else: ?>
<div class="options form">
  <h3>URL</h3>
  <em class="empty">You cannot change the URL of the homepage</em>
</div>
<?php endif ?>
