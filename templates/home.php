<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>
<?php $check = array(); //check::all() ?>
<div class="home">

  <?php if(!empty($check)): ?>
  
  <div class="warning">

    <h3><?php echo l::get('home.warning.title') ?></h3>

    <?php foreach($check as $key => $warnings): ?>
      
      <p>
        <strong><?php echo l::get('home.warning.' . $key . '.title', $key) ?></strong><br />
        <?php echo l::get('home.warning.' . $key . '.text') ?>
      </p>
      
      <ul>  
        <?php foreach($warnings as $warning): ?>
        <li><?php echo $warning ?></li>
        <?php endforeach ?>
      </ul>

    <?php endforeach ?>
    
  </div>
  
  <?php endif ?>

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