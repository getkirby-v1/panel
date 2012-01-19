<?php

if($panel->action != 'delete-file') return;

$action = action::deleteFile();
$file   = data::fileByFilename();

if(!$file) go(showurl('files'));

?>
<div class="overlay delete-file">

  <form method="post">

    <?php growl($action) ?>

    <fieldset>
      <h3>Delete this file</h3>
      
      <div class="field">
        <label><?php echo html($file->filename()) ?></label>
      </div>

      <div class="buttons">
        <input type="hidden" name="filename" value="<?php echo $file->filename() ?>" />
        <input type="submit" name="delete-file" value="Delete" />
        <input class="cancel" type="submit" name="cancel-delete-file" value="Cancel" />
      </div>
                  
    </fieldset>  

  </form>
</div>