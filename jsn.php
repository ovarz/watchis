<?php 
  $theme='light';
  $page='jsn';
  $login='no';
  $channel='jsn';
  $slideshow='yes'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<?php $page_label="JSN"; $page_link=""; require ($_SERVER['WATCHIS'].'module/page-title.php')?>
<div class="rancak-container">
  <section class="section-container section-video">
    <div class="jsn-head">
	  <h2 class="jsn-title">Jati Sumono Negoro</h2>
	  <h3 class="jsn-desc">Media Resmi Bagi Keluarga Habib Muhammad Luthfi Bin Hasyim Bin Yahya. JSN ini juga dibawah naungan langsung dari Habib Husain Bin Luthfi Bin Yahya.</h3>
	</div>
	<div class="section-video-list">
	  <?php for ($i=1; $i <= 10 ; $i++) { ?>
	    <?php $content_type='video'; $channel_link=''; require ($_SERVER['WATCHIS'].'module/content-list.php')?>
	  <?php } ?>
	</div>
  </section>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>