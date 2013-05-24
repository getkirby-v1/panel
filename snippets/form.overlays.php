<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>

<div id="form-overlay-link" class="form-overlay overlay modal" data-tag="link">
  <form method="post">
    <fieldset>
      <h3><?php echo l::get('form.overlay.link.title') ?></h3>

      <div class="field">
        <label><?php echo l::get('form.overlay.link.link') ?></label>
        <input type="url" name="link" class="input" placeholder="http://" />      
      </div>  
      <div class="field">
        <label><?php echo l::get('form.overlay.link.text') ?></label>
        <input type="text" name="text" class="input" />      
      </div>  
      <div class="buttons">
        <input type="submit" name="ok" value="<?php echo l::get('form.overlay.link.button') ?>" />
        <input class="cancel" type="submit" value="<?php echo l::get('cancel') ?>" />
      </div>
    </fieldset>
  </form>
</div>

<div id="form-overlay-email" class="form-overlay overlay modal" data-tag="email">
  <form method="post">
    <fieldset>
      <h3><?php echo l::get('form.overlay.email.title') ?></h3>

      <div class="field">
        <label><?php echo l::get('form.overlay.email.link') ?></label>
        <input type="email" name="link" class="input" />      
      </div>  
      <div class="field">
        <label><?php echo l::get('form.overlay.email.text') ?></label>
        <input type="text" name="text" class="input" />      
      </div>  
      <div class="buttons">
        <input type="submit" name="ok" value="<?php echo l::get('form.overlay.email.button') ?>" />
        <input class="cancel" type="submit" value="<?php echo l::get('cancel') ?>" />
      </div>
    </fieldset>
  </form>
</div>

<div id="form-overlay-youtube" class="form-overlay overlay modal" data-tag="youtube">
  <form method="post">
    <fieldset>
      <h3><?php echo l::get('form.overlay.youtube.title') ?></h3>

      <div class="field">
        <label><?php echo l::get('form.overlay.youtube.link') ?></label>
        <input type="url" name="link" class="input" />      
      </div>  
      <div class="field">
        <label><?php echo l::get('form.overlay.youtube.width') ?></label>
        <input type="text" name="width" class="input" />      
      </div>  
      <div class="field">
        <label><?php echo l::get('form.overlay.youtube.height') ?></label>
        <input type="text" name="height" class="input" />      
      </div>  
      <div class="buttons">
        <input type="submit" name="ok" value="<?php echo l::get('form.overlay.youtube.button') ?>" />
        <input class="cancel" type="submit" value="<?php echo l::get('cancel') ?>" />
      </div>
    </fieldset>
  </form>
</div>

<div id="form-overlay-vimeo" class="form-overlay overlay modal" data-tag="vimeo">
  <form method="post">
    <fieldset>
      <h3><?php echo l::get('form.overlay.vimeo.title') ?></h3>

      <div class="field">
        <label><?php echo l::get('form.overlay.vimeo.link') ?></label>
        <input type="url" name="link" class="input" />      
      </div>  
      <div class="field">
        <label><?php echo l::get('form.overlay.vimeo.width') ?></label>
        <input type="text" name="width" class="input" />      
      </div>  
      <div class="field">
        <label><?php echo l::get('form.overlay.vimeo.height') ?></label>
        <input type="text" name="height" class="input" />      
      </div>  
      <div class="buttons">
        <input type="submit" name="ok" value="<?php echo l::get('form.overlay.vimeo.button') ?>" />
        <input class="cancel" type="submit" value="<?php echo l::get('cancel') ?>" />
      </div>
    </fieldset>
  </form>
</div>

<div id="form-overlay-image" class="form-overlay overlay modal" data-tag="image">
  <form method="post">
    <fieldset>
      <h3><?php echo l::get('form.overlay.image.title') ?></h3>

      <div class="field">
        <label><?php echo l::get('form.overlay.image.images') ?></label>
        <?php
  	global $site;
		
		$page = $site->pages()->active();
		
		if ($page->hasImages()) {
	      echo '<select name="image">';
		  echo '<option value="0">'.l::get('form.overlay.image.first').'</option>';
		  $images = $page->images();
		  foreach($images AS $image) {
		    $title = /*($image->title()) ? $image->title() :*/ $image->filename();
		    echo '<option value="'.$image->filename().'">'.$title.'</option>';
	      }
		  
		  echo '</select>';
		}
		else {
			echo l::get('form.overlay.image.noimage');
		}
	    ?>
      </div>
      <div class="field">
        <label><?php echo l::get('form.overlay.image.width') ?></label>
        <input type="text" name="width" class="input" />      
      </div>  
      <div class="field">
        <label><?php echo l::get('form.overlay.image.height') ?></label>
        <input type="text" name="height" class="input" />      
      </div>  
      <div class="field">
        <label><?php echo l::get('form.overlay.image.alt') ?></label>
        <input type="text" name="alt" class="input" />      
      </div>  
      <div class="field">
        <label><?php echo l::get('form.overlay.image.link') ?></label>
        <input type="text" name="link" class="input" />      
      </div>  
      <div class="field">
        <label><?php echo l::get('form.overlay.image.class') ?></label>
        <input type="text" name="class" class="input" />      
      </div>  
      <div class="buttons">
        <input type="submit" name="ok" value="<?php echo l::get('form.overlay.image.button') ?>" />
        <input class="cancel" type="submit" value="<?php echo l::get('cancel') ?>" />
      </div>
    </fieldset>
  </form>
</div>
