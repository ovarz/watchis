<?php 
  $theme='light';
  $page='login-regis';
  $login='no';
  $channel='register-success';
  $slideshow='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<?php $page_label="Login Watchlist"; $page_link=""; require ($_SERVER['WATCHIS'].'module/page-title.php')?>
<div class="rancak-container">
  <?php $form_type='login'; $form_error='no'; $form_next='profile'; require ($_SERVER['WATCHIS'].'module/login-regis-form.php')?>
</div>
<?php $share='no'; require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>