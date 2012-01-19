<?php

if($panel->action != 'upload-file') return;

$action = action::uploadFile();
$file   = data::fileByFilename();

if(!$file) go(showurl('files'));

?>
<div class="overlay upload-file">

  <form method="post" enctype="multipart/form-data">

    <?php growl($action) ?>

    <fieldset>
      <h3>Upload a new file</h3>
      
      <div class="field">
        <label>Please choose a file from your computer…</label>
        <input type="file" name="file" />
      </div>

      <div class="buttons">
        <input type="submit" name="upload-file" value="Upload" />
        <input class="cancel" type="submit" name="cancel-upload" value="Cancel" />
      </div>
                  
    </fieldset>  

  </form>
</div>