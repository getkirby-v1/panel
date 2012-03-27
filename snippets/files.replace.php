<?php

if(!defined('KIRBY')) die('Direct access is not allowed');

if($panel->action != 'replace-file') return;

$action = action::replaceFile();
$file   = data::fileByFilename();

if(!$file) go(showurl('files'));

?>
<div class="overlay replace-file">

  <form method="post" enctype="multipart/form-data">

    <?php growl($action) ?>

    <fieldset>
      <h3><?php echo l::get('files.replace.title') ?></h3>

      <div class="field">
        <label><?php echo l::get('files.replace.file') ?>: <strong><?php echo $file->filename() ?></strong></label>
      </div>
      
      <div class="field">
        <label><?php echo l::get('files.replace.choose') ?></label>
        <input type="file" name="file" />
      </div>

      <div class="buttons">
        <input type="hidden" name="filename" value="<?php echo $file->filename() ?>" />
        <input type="submit" name="replace-file" value="<?php echo l::get('files.replace.button') ?>" />
        <input class="cancel" type="submit" name="cancel-replace-file" value="<?php echo l::get('cancel') ?>" />
      </div>
                  
    </fieldset>  

  </form>
</div>