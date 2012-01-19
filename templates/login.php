<?php 

$login = false;

if(get('login')) {
	$login = me::login();
	if(success($login)) go(thisURL());
}

?>
<!DOCTYPE html>
<html>
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

<body class="login">

<div class="form">

	<?php growl($login) ?>

  <form action="<?php echo thisURL() ?>" method="post">
    <div class="field text">
      <label>Username</label>
      <input type="text" name="username" />
    </div>
    <div class="field text">
      <label>Password</label>
      <input type="password" name="password" />
    </div>
    <div class="field buttons">
      <input type="submit" name="login" value="Login" />
    </div>
  </form>
  
</div>

</body>

</html>