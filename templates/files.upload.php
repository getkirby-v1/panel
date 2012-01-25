<?php

if(!defined('KIRBY')) die('Direct access is not allowed');

if($panel->action != 'upload-file') return;

$action = action::uploadFile();
$file   = data::fileByFilename();

if(!$file) go(showurl('files'));

?>
<div class="overlay upload-file">

  <form method="post" enctype="multipart/form-data">

    <?php growl($action) ?>

    <fieldset>
      <h3><?php echo l::get('files.upload.title') ?></h3>
      
      <div class="field">
        <label><?php echo l::get('files.upload.choose') ?></label>
        <input type="file" name="file" />
      </div>

      <div class="buttons">
        <input type="submit" name="upload-file" value="<?php echo l::get('files.upload.button') ?>" />
        <input class="cancel" type="submit" name="cancel-upload" value="<?php echo l::get('cancel') ?>" />
      </div>
                  
    </fieldset>  

  </form>
</div>