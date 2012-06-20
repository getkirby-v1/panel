<?php

if(!defined('KIRBY')) die('Direct access is not allowed');

if($panel->action != 'edit-file') return;

$action = action::editFile();
$file   = data::fileByFilename();
$form   = new fileform($settings, $file);

if(!$file) go(showurl('files'));

?>
<div class="overlay edit-file">

  <form method="post">

    <?php growl($action) ?>

    <fieldset>
      <h3><?php echo l::get('files.edit.title') ?></h3>
      
      <div class="field">
        <label><?php echo l::get('files.edit.filename') ?></label>
        <input type="text" name="newname" value="<?php echo html(get('name', $file->name())) ?>" />
      </div>
    
    </fieldset>

    <?php echo $form->load() ?>		

    <fieldset>
      <div class="buttons">
        <input type="hidden" name="filename" value="<?php echo $file->filename() ?>" />
        <input type="submit" name="edit-file" value="<?php echo l::get('files.edit.button') ?>" />
        <input class="cancel" type="submit" name="cancel-edit-file" value="<?php echo l::get('cancel') ?>" />
      </div>
    </fieldset>  

  </form>
</div>