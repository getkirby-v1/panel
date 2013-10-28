<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>
<?php $color = c::get('panel.color', 'red') ?>
<style>
  
a:hover,
h2,
h4,
.header h2 a:hover,
.submenu a.active,
.submenu a:hover,
.dashboard .warning li {
  color: <?php echo $color ?>;
}  

.growl.error,
.login input.error {
  background: <?php echo $color ?>;
}

.header {
  border-color: <?php echo $color ?>;
}
    
</style>