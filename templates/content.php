<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>

<?php snippet('header') ?>

<?php if(!$panel->nocontent): ?>
<?php action::updateContent() ?>

<div class="form">		
  
  <form action="<?php echo showurl('content') ?>" method="post">
    
    <?php echo $panel->form->load() ?>		

    <fieldset class="bottom">
      <div class="buttons">
        <input type="submit" name="update-content" value="<?php echo l::get('content.save') ?>" />
      </div>
    </fieldset>
  </form>
      
</div>

<?php echo $panel->form->overlays() ?>
<?php echo $panel->form->js() ?>

<?php else: ?>
<div class="form">
  <h3><?php echo l::get('nocontent.title') ?></h3>
  <em class="empty"><?php echo l::get('nocontent.text') ?></em>
</div>
<?php endif ?>

<?php snippet('footer') ?>