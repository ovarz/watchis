<?php 
  $page='home';
  $channel='home';
  $slideshow='yes';
  $search_page='cari/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<div class="rancak-container">
  <section class="header-home">
    <div class="header-home-bg flex_ori thumb-loading">
	  <img alt="img_title" class="lazyload" data-original="img/home-header.png" />
	</div>
	<div class="header-home-content">
	  <div class="hhc-top flex_ori thumb-loading">
	    <img alt="img_title" class="lazyload" data-original="img/logo-icon.png" />
	  </div>
	  <div class="hhc-bottom">
	    <div class="hhc-bottom-time">Subuh 04:36 WIB</div>
	    <div class="hhc-bottom-date">2 Februari 2023 / 11 Rajab 1444</div>
	  </div>
	</div>
  </section>
  
  
  
  <section class="section-container section-article">
    <div class="section-title">Info Watchis</div>
	<div class="section-article-list">
	  <?php for ($i=1; $i <= 10 ; $i++) { ?>
	    <?php require ($_SERVER['WATCHIS'].'module/content-list.php')?>
	  <?php } ?>
	</div>
  </section>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/footer.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>