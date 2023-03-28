<?php 
  $theme='light';
  $page='detail';
  $login='yes';
  $channel='info-watchlist';
  $slideshow='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>

<div class="page-title detail-media detail-media-article flex_ori thumb-loading">
  <img alt="img_title" class="lazyload" data-original="img/sample/sample-21.jpg" />
</div>

<div class="rancak-container">
  <main class="section-container detail-main">
	<?php require ($_SERVER['WATCHIS'].'module/detail-head.php')?>
	<?php require ($_SERVER['WATCHIS'].'module/detail-content.php')?>
  </main>
</div>
<?php $share='yes'; require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>