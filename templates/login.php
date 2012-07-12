<?php 

if(!defined('KIRBY')) die('Direct access is not allowed');

$action = action::login();

?>
<!DOCTYPE html>
<html class="login">
<head>

<title><?php echo html($site->title()) ?></title>

<meta charset="utf-8" />
<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="robots" content="noindex,nofollow,noarchive" />

<link rel="stylesheet" href="<?php echo c::get('panel.url') ?>/assets/css/screen.css" />
<link rel="stylesheet" href="<?php echo c::get('panel.url') ?>/assets/css/login.css" />
<link rel="stylesheet" href="<?php echo c::get('panel.url') ?>/assets/css/login.mobile.css" media="only screen and (max-width: 500px)" />

<?php if(c::get('panel.color') && c::get('panel.color') != 'red') snippet('colors') ?>

</head>

<body>

<div class="form">

  <!--[if lt IE 8]>
  <div class="ie-error">
    <h2><?php echo l::get('login.error.browser.title') ?></h2>
    <p><?php echo l::get('login.error.browser.text') ?></p>
  </div>
  
  <div class="hide">
  <![endif]-->
  <form method="post">
    <div class="field text">
      <label><?php echo l::get('login.username') ?></label>
      <input type="text" class="input" id="username" name="username" />
    </div>
    <div class="field text">
      <label><?php echo l::get('login.password') ?></label>
      <input type="password" class="input" name="password" />
    </div>
    <div class="field buttons">
      <input<?php if(error($action)) echo ' class="error"' ?> type="submit" name="login" value="<?php echo l::get('login.button') ?>" />
    </div>
  </form>
  <!--[if lt IE 8]>
  </div>
  <![endif]-->

</div>

<script>

var username = document.getElementById('username');
if(username) username.focus();

</script>

</body>

</html>