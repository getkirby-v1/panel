<ul class="radio">
  <?php foreach($options AS $key => $text): ?>
  <li>
    <label class="inline">
      <input type="radio" name="<?php html($name) ?>"<?php if ($key == $value) ' checked="checked"' ?> value="<?php html($key) ?>" /><?php html($text) ?>
    </label>
  </li>
  <?php endforeach ?>
</ul>
