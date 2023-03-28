<?php 
  $theme='light';
  $page='dzikir';
  $login='yes';
  $channel='dzikir';
  $slideshow='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<?php $page_label="Dzikir"; $page_link=""; require ($_SERVER['WATCHIS'].'module/page-title.php')?>
<div class="rancak-container">
  <section class="section-container default-full dzikir-container content_center">
	<span>
	  <div class="dzikir-bg flex_ori thumb-loading">
	    <img alt="img_title" class="lazyload" data-original="img/dzikir-bg.png" />
	  </div>
	  <button title="Tambah" class="dzikir-button dzikir-button-add content_center"></button>
	  <button title="Reset" class="dzikir-button dzikir-button-reset content_center">
	    <?php require ($_SERVER['WATCHIS'].'img/icon/loadmore.svg')?>
	  </button>
	  <div class="dzikir-number">0</div>
	</span>
  </section>
</div>
<?php $share='no'; require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>