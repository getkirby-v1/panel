<?php

if($panel->action != 'delete-page') return;

$action = action::deleteContent();
$data   = data::childByUID(get('uid'));

if(!$data) go(showurl('pages'));

?>
<div class="overlay delete-page">

  <form method="post">

    <?php growl($action) ?>

    <fieldset>
      <h3>Delete this page</h3>
      
      <div class="field">
        <label><?php echo html($data->title()) ?></label>
      </div>

      <div class="buttons">
        <input type="submit" name="delete-page" value="Delete" />
        <input class="cancel" type="submit" name="cancel-delete-page" value="Cancel" />
      </div>
                  
    </fieldset>  

  </form>
</div>