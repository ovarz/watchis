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
	<?php $content_type='article'; require ($_SERVER['WATCHIS'].'module/detail-head.php')?>
	<?php require ($_SERVER['WATCHIS'].'module/detail-content.php')?>
  </main>
  
  
  
  <section class="section-container section-article">
    <div class="section-title">Artikel Terkait</div>
	<div class="section-article-list">
	  <?php for ($i=1; $i <= 10 ; $i++) { ?>
	    <?php $content_type='article'; $detail_link='detail-article'; require ($_SERVER['WATCHIS'].'module/content-list.php')?>
	  <?php } ?>
	</div>
  </section>
</div>
<?php $share='yes'; require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>