<?php 

// define the default format if nothing is set
if(!isset($format)) $format = 'yy-mm-dd'; 

?>
<input class="input" type="text" data-format="<?php echo $format ?>" data-language="<?php echo $panel->user->language ?>" name="<?php echo $name ?>" value="<?php echo $value ?>" />
