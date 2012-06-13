<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>

<?php snippet('header') ?>

<?php if($settings->files): ?>
<div class="files">		

  <h3><?php echo l::get('files.title') ?> <span class="options"><a class="upload" href="<?php echo dourl('files', 'upload-file') ?>"><?php echo l::get('files.upload') ?></a></span></h3>
  
  <ul>
    <?php $n=0; foreach($page->files() as $file): ?>
    <?php if($file->type() == 'content' || $file->type() == 'meta') continue ?>
    <li>
      <a target="_blank"<?php if($file->type() == 'image') echo ' rel="image"' ?> title="<?php echo html($file->filename()) ?>" href="<?php echo ourl($file->url()) ?>">
        <span class="preview">
          <span>
            <?php if($file->type() == 'image'): ?>
            
            <?php if($file->width() <= 2000 && $panel->thumbs): ?>
            <?php echo thumb($file, array('width' => 150, 'height' => 150)) ?>
            <?php else: ?>
            <?php $file = $file->fit(150) ?>
            <img src="<?php echo ourl($file->url()) ?>" width="<?php echo $file->width() ?>" height="<?php echo $file->height() ?>" />            
            <?php endif ?>
            
            <?php else: ?>
            <?php echo $file->extension() ?>
            <?php endif ?>
          </span>
        </span>
        <span class="info">
          <span class="name"><?php echo $file->filename() ?></span> 
          <span class="url"><?php echo str_replace(ourl(), '', ourl($file->url())) ?></span> 
          <span class="size"><?php echo $file->niceSize() ?> <?php if($file->type == 'image'): ?>(<?php echo $file->width() ?> x <?php echo $file->height() ?> px)<?php endif ?></span>
        </span>
      </a>

      <div class="filemenu">
        <a href="<?php echo dourl('files', 'edit-file') ?>/?file=<?php echo base64_encode($file->filename()) ?>"><?php echo l::get('files.edit') ?></a>
        <a href="<?php echo dourl('files', 'replace-file') ?>/?file=<?php echo base64_encode($file->filename()) ?>"><?php echo l::get('files.replace') ?></a>
        <a href="<?php echo dourl('files', 'delete-file') ?>/?file=<?php echo base64_encode($file->filename()) ?>"><?php echo l::get('files.delete') ?></a>
      </div>
    </li>
    <?php $n++; endforeach ?>
    
    <?php if($n==0): ?>
    <li class="empty"><em><?php echo l::get('files.empty') ?></em></li>
    <?php endif ?>
    
  </ul>
    
</div>

<?php snippet('files.upload') ?>
<?php snippet('files.edit') ?>
<?php snippet('files.replace') ?>
<?php snippet('files.delete') ?>

<?php else: ?>
<div class="files">
<h3><?php echo l::get('nofiles.title') ?></h3>
<ul>
  <li class="empty"><em><?php echo l::get('nofiles.text') ?></em></li>
</ul>
</div>
<?php endif ?>

<?php snippet('footer') ?>