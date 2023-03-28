<?php 
  $theme='light';
  $page='tahlil';
  $login='no';
  $channel='tahlil';
  $slideshow='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<?php $page_label="Tahlil"; $page_link=""; require ($_SERVER['WATCHIS'].'module/page-title.php')?>
<div class="rancak-container">
  <section class="section-container section-tahlil">
	<div class="tahlil-list">
	  <?php for ($i=1; $i <= 10 ; $i++) { ?>
	    <div class="tahlil-box flex_ori thumb-loading">
		  <img alt="img_title" class="lazyload" data-original="img/sample/tahlil.jpg" />
		</div>
	  <?php } ?>
	</div>
  </section>
</div>
<?php $share='no'; require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>