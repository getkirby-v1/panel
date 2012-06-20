<?php 

if(!defined('KIRBY')) die('Direct access is not allowed');

snippet('header');

if(!$page->isHomePage() && !$page->isErrorPage()):

$action = action::updateURL();

?>
<div class="options form">

  <form action="<?php echo thisURL() ?>" method="post">
    
    <fieldset>    
      <div class="field url">
        <label><?php echo l::get('options.url') ?></label>
        <span class="url input"><em><?php echo dirname(ourl($page->url())) ?>/</em><strong><input type="url" name="uid" value="<?php echo $page->uid() ?>" /></strong></span>
      </div>
    </fieldset>
    <fieldset class="bottom">
      <div class="buttons">
        <input type="submit" name="options" value="<?php echo l::get('options.button') ?>">
      </div>
    </fieldset>
    
  </form>
    
</div>
<?php else: ?>
<div class="options form">
  <h3><?php echo l::get('options.home.url') ?></h3>
  <?php if($page->isHomePage()): ?>
  <em class="empty"><?php echo l::get('options.home.text') ?></em>
  <?php else: ?>
  <em class="empty"><?php echo l::get('options.error.text') ?></em>  
  <?php endif ?>
</div>
<?php endif ?>

<?php snippet('footer') ?>