<?php 
  $theme='light';
  $page='alquran';
  $login='yes';
  $channel='tersimpan';
  $slideshow='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<?php $page_label="Al-Qur'an"; $page_link=""; require ($_SERVER['WATCHIS'].'module/page-title.php')?>
<div class="rancak-container">
  <?php require ($_SERVER['WATCHIS'].'module/alquran-tab.php')?>
  
  
  
  <section class="section-container doa-list alquran-list">
	<?php require ($_SERVER['WATCHIS'].'module/search-box.php')?>
	<div class="default-empty alquran-empty content_center">
	  <span>
	    <div class="default-empty-icon content_center">
		  <?php require ($_SERVER['WATCHIS'].'img/icon/empty-bookmark.svg')?>
		</div>
		<div class="default-empty-title">Anda Belum Menyimpan Apapun</div>
		<div class="default-empty-desc">Tambahkan ayat Al-Qur'an ke bookmark agar kamu mudah untuk menemukannya</div>
	  </span>
	</div>
  </section>
</div>
<?php $share='no'; require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>