<?php

if($panel->action != 'edit-file') return;

$action = action::editFile();
$file   = data::fileByFilename();

if(!$file) go(showurl('files'));

?>
<div class="overlay edit-file">

  <form method="post">

    <?php growl($action) ?>

    <fieldset>
      <h3>Edit file</h3>
      
      <div class="field">
        <label>Filename (without extension)</label>
        <input type="text" name="newname" value="<?php echo html(get('name', $file->name())) ?>" />
      </div>

      <div class="buttons">
        <input type="hidden" name="filename" value="<?php echo $file->filename() ?>" />
        <input type="submit" name="edit-file" value="Save" />
        <input class="cancel" type="submit" name="cancel-edit-file" value="Cancel" />
      </div>
                  
    </fieldset>  

  </form>
</div>