<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

if(check::wrongPanelVersion()) {  
  $step = 4;
} else if(check::wrongKirbyVersion()) {  
  $step = 3;
} else if(check::installed()) {
  $step = 2; 
} else {
  $step = 1;
}

function relativePath($path) {
  return str_replace(server::get('DOCUMENT_ROOT'), '', $path);  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
<title>Kirby Panel Installation</title>
<meta charset="utf-8" />
<meta name="robots" content="noindex, nofollow" />

<style>

* {
  padding: 0;
  margin: 0;
}

body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 20px;
  color: #222;
  width: 500px;
  margin: 50px auto;
}

a {
  color: red;
  text-decoration: none;
}

p {
  margin-bottom: 20px;
}
h1 {
  margin-bottom: 50px;
}
h2 {
  color: red;
  font-size: 17px;
  margin-bottom: 20px;
}

pre {
  font-family: "Monaco", "Courier", monospace;
  position: relative;
  overflow: auto;
  background: #f9f9f9;
  -webkit-box-shadow: rgba(0,0,0, .05) 0px 2px 10px inset;
  -moz-box-shadow: rgba(0,0,0, .05) 0px 2px 10px inset;
  -o-box-shadow: rgba(0,0,0, .05) 0px 2px 10px inset;
  box-shadow: rgba(0,0,0, .05) 0px 2px 10px inset;
  padding: 20px;
  font-size: 13px;
  line-height: 22px;
  margin-bottom: 20px;
}
pre code {
  font-family: "Monaco", "Courier", monospace;
  background: none;
  padding: 0;
  white-space: pre;
}


</style>

</head>

<body>

<h1>Kirby Panel Installation</h1>

<?php if($step == 1): ?>

<h2>1. Step / Panel Configuration</h2>

<p>

  To get your Kirby panel up and running, <strong>copy the "defaults" folder</strong> 
  <code>
  <pre><?php echo relativePath(c::get('root.panel')) ?>/defaults</pre>
  </code>

  …paste it into your site folder and rename it to "<?php echo c::get('panel.folder') ?>"<br /><br />

  <code>
  <pre><?php echo relativePath(c::get('root.site'))  ?>/<?php echo c::get('panel.folder') ?></pre>
  </code>

  <input type="button" onclick="window.location.reload()" value="Ok, got it!" />
  
</p>

<?php elseif($step == 2): ?>

<h2>2. Step / Account Setup</h2>

<p>

Go to…
  
<code>
<pre><?php echo relativePath(c::get('root.site')) ?>/panel/accounts</pre>
</code>
    
… and rename <strong>admin.php</strong> to match your desired <strong>username</strong>. <br />Here are some examples:
<br />
<br />  

<code>
<pre>
username: peter => filename: peter.php
username: paul &nbsp;=> filename: paul.php
username: mary &nbsp;=> filename: mary.php 
</pre>
</code>    
  
Open your account file in your favorite editor and change the credentials:
<br />
<br />  

<code>
<pre>
username: yourusername
password: yourpassword
language: en
</pre>
</code>
    
</p>
<p>
  <input type="button" onclick="window.location.reload()" value="Login!" />
</p>

<?php elseif($step == 3): ?>

<h2>Update Kirby</h2>

You are running an old version of the Kirby core. 
Please upgrade to the latest version to make the panel work. 
<br />
<br />
Minimum requirement: <a href="http://getkirby.com/downloads"><strong>Kirby CMS <?php echo c::get('panel.min.kirby.version') ?></strong></a><br />
Your Version: <strong>Kirby CMS <?php echo c::get('version.number') ?></strong>

<?php elseif($step == 4): ?>

<h2>Update the Panel</h2>

You are running an old version of the Kirby Panel, which does not work well with Kirby CMS. 
Please upgrade to the latest version to make the panel work. 
<br />
<br />
Minimum requirement: <a href="http://getkirby.com/downloads"><strong>Kirby Panel <?php echo c::get('panel.min.version') ?></strong></a><br />
Your Version: <strong>Kirby Panel <?php echo c::get('panel.version.number') ?></strong>

<?php endif ?>

</body>

</html>