<ul>
  <?php foreach($options AS $key => $text): ?>
  <li><label class="inline input"><input type="checkbox" value="<?php echo html($key) ?>" name="<?php echo html($name) ?>[]"<?php if(in_array($key, $value)) echo ' checked="checked"' ?>> <?php echo html($text) ?></label></li>
  <?php endforeach ?>
</ul>