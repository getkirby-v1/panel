<?php 

// define the default format if nothing is set
if(!isset($format)) $format = 'yy-mm-dd'; 

?>
<input class="input" type="text" data-format="<?php echo html($format) ?>" data-language="<?php echo html($GLOBALS['panel']->user->language) ?>" name="<?php echo html($name) ?>" value="<?php echo html($value) ?>" />
