<?php 
  $theme='light';
  $page='login-regis';
  $login='no';
  $channel='register';
  $slideshow='yes';
  $search_page='cari/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<div class="rancak-container">
  <?php $form_type='register'; $form_error='no'; $form_next='register-error'; require ($_SERVER['WATCHIS'].'module/login-regis-form.php')?>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>