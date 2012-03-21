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

<link rel="stylesheet" href="<?php echo c::get('panel.url') ?>/assets/css/styles.css" media="all" type="text/css" />
<link rel="stylesheet" href="<?php echo c::get('panel.url') ?>/assets/css/login.css" media="all" type="text/css" />

</head>

<body>

<div class="form">

	<?php growl($action) ?>

  <!--[if lt IE 8]>
  <div class="ie-error">
    <h2><?php echo l::get('login.error.browser.title') ?></h2>
    <p><?php echo l::get('login.error.browser.text') ?></p>
  </div>
  
  <div class="hide">
  <![endif]-->
  <form action="<?php echo thisURL() ?>" method="post">
    <div class="field text">
      <label><?php echo l::get('login.username') ?></label>
      <input type="text" class="input" name="username" value="<?php echo html(get('username')) ?>" />
    </div>
    <div class="field text">
      <label><?php echo l::get('login.password') ?></label>
      <input type="password" class="input" name="password" />
    </div>
    <div class="field buttons">
      <input type="submit" name="login" value="<?php echo l::get('login.button') ?>" />
    </div>
  </form>
  <!--[if lt IE 8]>
  </div>
  <![endif]-->

</div>

</body>

</html>