<?php

if(get('update-info')) {
  $result = data::updateInfo();
  if(success($result)) go();
  growl($result);
}

?>

<div class="form full">		
  
  <form method="post" class="<?php echo $page->template() ?>">
    <?php echo form::load(array(), true); ?>		

    <fieldset class="bottom">
      <div class="buttons">
        <input type="submit" name="update-info" value="Save" />
      </div>
    </fieldset>

  </form>
    
</div>