<?php

if(!defined('KIRBY')) die('Direct access is not allowed');

if($panel->action != 'delete-page') return;

$action = action::deleteContent();
$data   = data::childByUID(get('uid'));

if(!$data) go(showurl('pages'));

?>
<div class="overlay delete-page">

  <form method="post">

    <?php growl($action) ?>

    <fieldset>
      <h3><?php echo l::get('pages.delete.title') ?></h3>
      
      <div class="field">
        <label><?php echo html($data->title()) ?></label>
      </div>

      <div class="buttons">
        <input type="submit" name="delete-page" value="<?php echo l::get('pages.delete.button') ?>" />
        <input class="cancel" type="submit" name="cancel-delete-page" value="<?php echo l::get('cancel') ?>" />
      </div>
    </fieldset>  

  </form>
</div>