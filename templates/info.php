<?php

if(!defined('KIRBY')) die('Direct access is not allowed');

$action = action::updateSiteinfo();

?>
<div class="form full">		
  
  <form method="post" class="<?php echo $page->template() ?>">
    <?php echo form::load(array(), true); ?>		

    <fieldset class="bottom">
      <div class="buttons">
        <input class="cancel" type="reset" onclick="window.history.back()" name="cancel-update-content" value="<?php echo l::get('cancel') ?>" />
        <input type="submit" name="update-info" value="<?php echo l::get('siteinfo.button') ?>" />
      </div>
    </fieldset>

  </form>
    
</div>