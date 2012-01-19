<?php if($settings->files): ?>
<div class="files">		

  <h3>Files <span class="options"><a class="upload" href="<?php echo dourl('files', 'upload-file') ?>">Upload a new file</a></span></h3>
  
  <ul>
    <?php $n=0; foreach($page->files() as $file): ?>
    <?php if($file->type() == 'content') continue ?>
    <li>
      <a target="_blank" rel="files" title="<?php echo html($file->filename()) ?>" href="<?php echo ourl($file->url()) ?>">
        <span class="preview">
          <span>
            <?php if($file->type() == 'image'): ?>
            
            <?php if($file->width() <= 2000 && $settings->thumbs): ?>
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
        <a href="<?php echo dourl('files', 'edit-file') ?>/?file=<?php echo $file->filename() ?>">Edit</a>
        <a href="<?php echo dourl('files', 'replace-file') ?>/?file=<?php echo $file->filename() ?>">Replace</a>
        <a href="<?php echo dourl('files', 'delete-file') ?>/?file=<?php echo $file->filename() ?>">Delete</a>
      </div>
    </li>
    <?php $n++; endforeach ?>
    
    <?php if($n==0): ?>
    <li class="empty"><em>No files so far</em></li>
    <?php endif ?>
    
  </ul>
    
</div>

<?php require('files.upload.php') ?>
<?php require('files.edit.php') ?>
<?php require('files.replace.php') ?>
<?php require('files.delete.php') ?>

<?php else: ?>
<div class="files">
<h3>Files</h3>
<ul>
  <li class="empty"><em>This page is not supposed to have files</em></li>
</ul>
</div>
<?php endif ?>