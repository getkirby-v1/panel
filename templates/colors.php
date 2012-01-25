<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>
<?php $color = c::get('panel.color', '#9818b8') ?>
<style>
  
a:hover,
h2,
h4,
.subheader h1 a:hover,
.subheader h2 a,
.home .info dt,
.files .url {
  color: <?php echo $color ?>
}  

.subpages,
.subheader,
.home .subpages,
.form .pagination {
  border-color: <?php echo $color ?>;
}
    
</style>