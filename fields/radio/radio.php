<ul class="radio">
  <?php foreach($options AS $key => $text): ?>
  <li>
    <label class="inline">
      <input type="radio" name="<?php echo html($name) ?>"<?php if ($key == $value) echo ' checked="checked"' ?> value="<?php echo html($key) ?>" /><?php echo html($text) ?>
    </label>
  </li>
  <?php endforeach ?>
</ul>
