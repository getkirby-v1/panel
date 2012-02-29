<?php

if(!defined('KIRBY')) die('Direct access is not allowed');

$action = action::updateSiteinfo();
$check  = check::infoIsWritable();

?>
<div class="form full">		
  
  <?php if($check): ?>
  
  <form method="post" class="<?php echo $page->template() ?>">
    <?php echo form::load(array(), true); ?>		

    <fieldset class="bottom">
      <div class="buttons">
        <input class="cancel" type="reset" onclick="window.history.back()" name="cancel-update-content" value="<?php echo l::get('cancel') ?>" />
        <input type="submit" name="update-info" value="<?php echo l::get('siteinfo.button') ?>" />
      </div>
    </fieldset>

  </form>

  <?php else: ?>

  <p><strong>content/site.txt</strong> is not writable. <br />Please change its permissions and try again.</p>

  <?php endif ?>
    
</div>