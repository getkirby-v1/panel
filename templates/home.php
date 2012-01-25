<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>
<div class="home">

  <div class="left">
    <?php require_once('pages.php') ?>
  </div>

  <div class="right">
    <div class="info">
      <h3><?php echo l::get('home.siteinfo') ?> <span class="options"><a href="<?php echo showurl('info') ?>"><?php echo l::get('home.edit') ?></a></span></h3>      
      <dl>
        <?php foreach(data::siteData() as $key => $value): ?>
        <dt><?php echo str::ucfirst($key) ?></dt>
        <dd><?php echo (empty($value)) ? '&nbsp;' : html($value) ?></dd>
        <?php endforeach ?>        
      </dl>
    </div>
  </div>       

</div>