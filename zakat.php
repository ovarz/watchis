<?php 
  $theme='light';
  $page='zakat';
  $login='no';
  $channel='zakat';
  $slideshow='yes'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<?php $page_label="Zakat"; $page_link=""; require ($_SERVER['WATCHIS'].'module/page-title.php')?>
<div class="rancak-container">
  <section class="section-container section-zakat">
    <a aria-label="Link_Title" title="Link_Title" class="btn calculator-button" href="zakat-calculator.php">
	  <?php require ($_SERVER['WATCHIS'].'img/icon/calculator.svg')?>
	  <span>Kalkulator Zakat</span>
	</a>
	
	<div class="zakat-head">
	  <div class="zakat-head-title">Zakat, Infaq</div>
	  <div class="zakat-head-desc">Salurkan bantuan zakat terbaik anda bersama watchis.</div>
	</div>
	
	<div class="section-article-list">
	  <?php for ($i=1; $i <= 10 ; $i++) { ?>
		<div class="content-box">
		  <div class="content-thumb">
			<a aria-label="Link_Title" title="Link_Title" class="content-thumb-frame flex_ori thumb-loading" href="zakat.php">
			  <img alt="img_title" class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
			</a>
		  </div>
		  <div class="content-info zakat-info">
			<a aria-label="Link_Title" title="Link_Title" class="content-info-title" href="zakat.php">
			  <h2><?php echo $random_zakat[array_rand($random_zakat)]; ?></h2>
			</a>
			<div class="zakat-progress">
			  <div class="zakat-progressbar" style="width:<?php echo rand(1,99); ?>%;"></div>
			</div>
			<div class="zakat-misc">
			  <div class="zakat-rupiah">Rp.000.000.000</div>
			  <div class="zakat-time">88 hari lagi</div>
			</div>
		  </div>
		</div>
	  <?php } ?>
	</div>
  </section>
</div>
<?php $share='no'; require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>