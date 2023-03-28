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

<div class="page-title detail-media detail-media-video flex_ori thumb-loading">
  <iframe width="560" height="315" class="lazyload" data-original="https://www.youtube.com/embed/JD2Y1Vur2-8?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<div class="rancak-container">
  <main class="section-container detail-main">
	<?php $content_type='video'; require ($_SERVER['WATCHIS'].'module/detail-head.php')?>
	<?php require ($_SERVER['WATCHIS'].'module/detail-content.php')?>
  </main>
  
  
  
  <section class="section-container section-video">
    <div class="section-title">Video Terkait</div>
	<div class="section-video-list">
	  <?php for ($i=1; $i <= 10 ; $i++) { ?>
	    <?php $content_type='video'; $detail_link='detail-video'; require ($_SERVER['WATCHIS'].'module/content-list.php')?>
	  <?php } ?>
	</div>
  </section>
</div>
<?php $share='yes'; require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>