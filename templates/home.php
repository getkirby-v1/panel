<div class="home">

  <div class="left">
    <?php require_once('pages.php') ?>
  </div>

  <div class="right">
    <div class="info">
      <h3>Site info <span class="options"><a href="<?php echo showurl('info') ?>">Edit</a></span></h3>      
      <dl>
        <?php foreach(data::siteData() as $key => $value): ?>
        <dt><?php echo str::ucfirst($key) ?></dt>
        <dd><?php echo (empty($value)) ? '&nbsp;' : html($value) ?></dd>
        <?php endforeach ?>        
      </dl>
      
    </div>
  </div>       

</div>