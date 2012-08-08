<?php
foreach($_SESSION as $session) {
  if(isset($session[strtolower($uservar)])) {
    $uservarc = $session[strtolower($uservar)];
  } else {
	  $uservarc = "";
  }
}
?>
<div><input type="hidden" name="<?php echo html($name); ?>" value="<?php echo $uservarc; ?>"></div>