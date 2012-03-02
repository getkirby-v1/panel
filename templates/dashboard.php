<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>

<div class="dashboard">
  <div class="left">
    <?php require('pages.php') ?>  
  </div>

  <div class="right">
    <div class="info">
      
      <?php if($page->content()): ?>
      <h3><?php echo l::get('dashboard.content') ?> <span class="options"><a href="<?php echo showurl('content') ?>"><?php echo l::get('dashboard.edit') ?></a></span></h3>      

      <dl>
        <?php foreach($page->content()->variables() as $key => $value): ?>
        <dt><?php echo str::ucfirst($key) ?></dt>
        <dd><?php echo (empty($value)) ? '&nbsp;' : html(str::short($value, 140)) ?></dd>
        <?php endforeach ?>        
      </dl>
      <?php else: ?>
      <h3><?php echo l::get('dashboard.content') ?></h3>
      
      <p class="empty"><?php echo l::get('dashboard.content.empty') ?></p>
      <?php endif ?>

      <h3><?php echo l::get('dashboard.files') ?> <small><?php echo data::countFiles() ?></small> <span class="options"><a href="<?php echo showurl('files') ?>"><?php echo l::get('dashboard.edit') ?></a></span></h3>
      
      <ul class="stats">
        <li><a href="<?php echo showurl('files') ?>"><?php echo l::get('dashboard.stats.images') ?> <strong><?php echo $page->files()->images()->count() ?></strong></a></li>
        <li><a href="<?php echo showurl('files') ?>"><?php echo l::get('dashboard.stats.videos') ?> <strong><?php echo $page->files()->videos()->count() ?></strong></a></li>
        <li><a href="<?php echo showurl('files') ?>"><?php echo l::get('dashboard.stats.docs') ?>   <strong><?php echo $page->files()->documents()->count() ?></strong></a></li>
        <li><a href="<?php echo showurl('files') ?>"><?php echo l::get('dashboard.stats.sound') ?>  <strong><?php echo $page->files()->sounds()->count() ?></strong></a></li>
        <li><a href="<?php echo showurl('files') ?>"><?php echo l::get('dashboard.stats.others') ?> <strong><?php echo $page->files()->others()->count() ?></strong></a></li>
      </ul>

      <h3><?php echo l::get('dashboard.template') ?></h3>
      <p class="empty"><?php echo html(data::templateName()) ?></p>
            
    </div>
  </div>       

</div>