<?php

if($panel->action != 'replace-file') return;

$action = action::replaceFile();
$file   = data::fileByFilename();

if(!$file) go(showurl('files'));

?>
<div class="overlay replace-file">

  <form method="post" enctype="multipart/form-data">

    <?php growl($action) ?>

    <fieldset>
      <h3>Replace this file</h3>

      <div class="field">
        <label>File: <strong><?php echo $file->filename() ?></strong></label>
      </div>
      
      <div class="field">
        <label>Please choose a new file from your computer…</label>
        <input type="file" name="file" />
      </div>

      <div class="buttons">
        <input type="hidden" name="filename" value="<?php echo $file->filename() ?>" />
        <input type="submit" name="replace-file" value="Upload" />
        <input class="cancel" type="submit" name="cancel-replace-file" value="Cancel" />
      </div>
                  
    </fieldset>  

  </form>
</div>