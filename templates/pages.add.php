<?php

if($panel->action != 'add-page') return;

$action    = action::addContent();
$templates = data::findTemplates();

?>
<div class="overlay add-page">

  <form method="post">

    <?php growl($action) ?>

    <fieldset>
      <h3>Add a new page</h3>
      
      <div class="field">
        <label>Title</label>
        <input type="text" name="title" value="<?php echo html(get('title')) ?>" />
      </div>
      
      <div class="field hide">
        <label>URL</label>
        <input type="text" name="uid" value="<?php echo html(get('uid')) ?>" />
      </div>

      <div class="field">
        <?php if(count($templates) == 1): ?>
        <label>Template: <em><?php echo html(a::first($templates)) ?></em></label>
        <input type="hidden" name="template" value="<?php echo a::first($templates) ?>" />
        <?php else: ?>
        <label>Template</label>
        <select name="template">
          <?php foreach($templates as $value): ?>
          <option value="<?php echo html($value) ?>"<?php if(get('template', 'default') == $value) echo ' selected="selected"' ?>><?php echo html($value) ?></option>
          <?php endforeach ?>
        </select>
        <?php endif ?>
      </div>

      <div class="buttons">
        <input type="submit" name="add-page" value="Save" />
        <input class="cancel" type="submit" name="cancel-add-page" value="Cancel" />
      </div>
                  
    </fieldset>  

  </form>
</div>