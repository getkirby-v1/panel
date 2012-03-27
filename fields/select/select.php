<select name="<?php echo $name ?>">
  <?php foreach($options AS $key => $text): ?>
  <option<?php if($key == $value) echo ' selected="selected"' ?> value="<?php echo html($key) ?>"><?php echo html($text) ?></option>
  <?php endforeach ?>
</select>
