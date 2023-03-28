<?php 
  $theme='light';
  $page='doa';
  $login='yes';
  $channel='doa';
  $slideshow='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<?php $page_label="Do'a"; $page_link=""; require ($_SERVER['WATCHIS'].'module/page-title.php')?>
<div class="rancak-container">
  <section class="section-container doa-list">
	<?php require ($_SERVER['WATCHIS'].'module/search-box.php')?>
	<div class="doa-list-container">
	  <?php 
        $doa_array = array();
        $doa_array[]=array('doa_label'=>"Do'a Masuk Rumah", 'doa_link'=>'doa-detail');
        $doa_array[]=array('doa_label'=>"Do'a Keluar Rumah", 'doa_link'=>'doa-detail');
        $doa_array[]=array('doa_label'=>"Do'a Sebelum Tidur", 'doa_link'=>'doa-detail');
        $doa_array[]=array('doa_label'=>"Do'a Bangun Tidur", 'doa_link'=>'doa-detail');
        $doa_array[]=array('doa_label'=>"Do'a Masuk Masjid", 'doa_link'=>'doa-detail');
        $doa_array[]=array('doa_label'=>"Do'a Keluar Masjid", 'doa_link'=>'doa-detail');
        $doa_array[]=array('doa_label'=>"Do'a Masuk Kamar Mandi", 'doa_link'=>'doa-detail');
        $doa_array[]=array('doa_label'=>"Do'a Keluar Kamar Mandi", 'doa_link'=>'doa-detail');
        $doa_array[]=array('doa_label'=>"Do'a Keluar Dijauhkan Dari Maksiat", 'doa_link'=>'doa-detail');
        $doa_array[]=array('doa_label'=>"Do'a Agar Hati Tergerak Untuk Ibadah", 'doa_link'=>'doa-detail');
	    foreach($doa_array as $doa_list){ 
	  ?>
        <a aria-label="<?php echo($doa_list['doa_label'])?>" title="<?php echo($doa_list['doa_label'])?>" class="dlc-box" 
        href="<?php echo($doa_list['doa_link'])?>.php">
          <div class="dlc-label"><?php echo($doa_list['doa_label'])?></div>
          <div class="dlc-arrow content_center"><?php require ($_SERVER['WATCHIS'].'img/icon/next.svg')?></div>
        </a>
	  <?php } ?>
	</div>
  </section>
</div>
<?php $share='no'; require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>