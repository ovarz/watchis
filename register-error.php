<?php 
  $theme='light';
  $page='login-regis';
  $login='no';
  $channel='register-error';
  $slideshow='yes';
  $search_page='cari/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<div class="rancak-container">
  <?php $form_type='register'; $form_error='yes'; $form_next='register-success'; require ($_SERVER['WATCHIS'].'module/login-regis-form.php')?>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>