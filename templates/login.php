<?php 

if(!defined('KIRBY')) die('Direct access is not allowed');

$action = action::login();

?>
<!DOCTYPE html>
<html class="login">
<head>

<title><?php echo html($site->title()) ?></title>

<meta charset="utf-8" />
<meta name="viewport" id="viewport" content="width=device-width; initial-scale=1.0; user-scalable=1;" />
<meta name="robots" content="noindex,nofollow,noarchive" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<link rel="shortcut icon" href="<?= url('assets/images/favicon.png') ?>" type="image/png" />
<link rel="icon" href="<?= url('assets/images/favicon.png') ?>" type="image/png" />
<link rel="apple-touch-icon" href="<?= url('assets/images/apple-touch-icon.png') ?>" />

<link rel="stylesheet" href="<?php echo c::get('panel.url') ?>/assets/css/styles.css" media="all" type="text/css" />

</head>

<body>

<div class="form">

	<?php growl($action) ?>

  <form action="<?php echo thisURL() ?>" method="post">
    <div class="field text">
      <label><?php echo l::get('login.username') ?></label>
      <input type="text" name="username" value="<?php echo html(get('username')) ?>" />
    </div>
    <div class="field text">
      <label><?php echo l::get('login.password') ?></label>
      <input type="password" name="password" />
    </div>
    <div class="field buttons">
      <input type="submit" name="login" value="<?php echo l::get('login.button') ?>" />
    </div>
  </form>
  
</div>

</body>

</html>