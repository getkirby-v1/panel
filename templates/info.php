<?php

if(!defined('KIRBY')) die('Direct access is not allowed');

snippet('header');

$action = action::updateSiteinfo();
$check  = check::infoIsWritable();

?>
<div class="form full">		
  
  <?php if($check): ?>
  
  <form method="post" class="<?php echo $page->template() ?>">
    <?php echo $panel->form->load(); ?>		

    <fieldset class="bottom">
      <div class="buttons">
        <input type="submit" name="update-info" value="<?php echo l::get('siteinfo.button') ?>" />
      </div>
    </fieldset>

  </form>

  <?php else: ?>

  <p><?php echo l::get('siteinfo.errors.permissions') ?></p>

  <?php endif ?>
    
</div>

<?php snippet('footer') ?>