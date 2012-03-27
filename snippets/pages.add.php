<?php

if(!defined('KIRBY')) die('Direct access is not allowed');

if($panel->action != 'add-page') return;

$action    = action::addContent();
$templates = data::findTemplates();

?>
<div class="overlay add-page">

  <form method="post">

    <?php growl($action) ?>

    <fieldset>
      <h3><?php echo l::get('pages.add.title') ?></h3>
      
      <div class="field">
        <label><?php echo l::get('pages.add.label.title') ?></label>
        <input type="text" name="title" value="<?php echo html(get('title')) ?>" />
      </div>
      
      <div class="field hide">
        <label><?php echo l::get('pages.add.label.url') ?></label>
        <input type="text" name="uid" value="<?php echo html(get('uid')) ?>" />
      </div>

      <div class="field">
        <?php if(count($templates) == 1): ?>
        <?php $template = a::first($templates) ?>
        <label><?php echo l::get('pages.add.label.template') ?>: <em><?php echo html(data::templateName($template)) ?> (<?php echo html($template) ?>)</em></label>
        <input type="hidden" name="template" value="<?php echo html($template) ?>" />
        <?php else: ?>
        <label><?php echo l::get('pages.add.label.template') ?></label>
        <select name="template">
          <?php foreach($templates as $value): ?>
          <option value="<?php echo html($value) ?>"<?php if(get('template', 'default') == $value) echo ' selected="selected"' ?>><?php echo html(data::templateName($value)) ?> (<?php echo html($value) ?>)</option>
          <?php endforeach ?>
        </select>
        <?php endif ?>
      </div>

      <div class="buttons">
        <input type="submit" name="add-page" value="<?php echo l::get('pages.add.button') ?>" />
        <input class="cancel" type="submit" name="cancel-add-page" value="<?php echo l::get('cancel') ?>" />
      </div>
                  
    </fieldset>  

  </form>
</div>