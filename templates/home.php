<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>

<?php snippet('header') ?>

<?php $check = check::all() ?>

<div class="dashboard">

  <?php if(!empty($check) && c::get('panel.check', true) !== false): ?>
  
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

  <?php else: ?>  

  <div class="info">
    <dl>
      <?php foreach(data::siteData() as $key => $value): ?>
      <dt><?php echo str::ucfirst($key) ?></dt>
      <dd><?php echo (empty($value)) ? '&nbsp;' : html($value) ?></dd>
      <?php endforeach ?>        
    </dl>
  </div>

  <?php endif ?>

</div>

<?php snippet('footer') ?>