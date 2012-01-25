<?php

if(!defined('KIRBY')) die('Direct access is not allowed');

if($panel->action != 'delete-file') return;

$action = action::deleteFile();
$file   = data::fileByFilename();

if(!$file) go(showurl('files'));

?>
<div class="overlay delete-file">

  <form method="post">

    <?php growl($action) ?>

    <fieldset>
      <h3><?php echo l::get('files.delete.title') ?></h3>
      
      <div class="field">
        <label><?php echo html($file->filename()) ?></label>
      </div>

      <div class="buttons">
        <input type="hidden" name="filename" value="<?php echo $file->filename() ?>" />
        <input type="submit" name="delete-file" value="<?php echo l::get('files.delete.button') ?>" />
        <input class="cancel" type="submit" name="cancel-delete-file" value="<?php echo l::get('cancel') ?>" />
      </div>
                  
    </fieldset>  

  </form>
</div>