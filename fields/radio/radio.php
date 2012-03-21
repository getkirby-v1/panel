<ul class="radio">
  <?php foreach($options AS $key => $text): ?>
  <li>
    <label class="inline">
      <input type="radio" name="<?php $name ?>"<?php if ($key == $value) ' checked="checked"' ?> value="<?php $key ?>" /><?php $text ?>
    </label>
  </li>
  <?php endforeach ?>
</ul>
