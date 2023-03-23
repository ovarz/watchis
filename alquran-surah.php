<?php 
  $theme='light';
  $page='alquran';
  $login='yes';
  $channel='surah';
  $slideshow='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<div class="rancak-container">
  <section class="section-container">
    <div class="section-title section-title-single">Al-Qur'an</div>
  </section>
  
  
  
  <?php require ($_SERVER['WATCHIS'].'module/alquran-tab.php')?>
  
  
  
  <section class="section-container doa-list alquran-list">
	<?php require ($_SERVER['WATCHIS'].'module/search-box.php')?>
	<div class="doa-list-container">
	  <?php 
        $doa_array = array();
        $doa_array[]=array('doa_primary'=>"Al-Fatihah", 'doa_secondary'=>"Pembukaan", 'doa_link'=>'alquran-detail');
        $doa_array[]=array('doa_primary'=>"Al-Baqarah", 'doa_secondary'=>"Sapi Betina", 'doa_link'=>'alquran-detail');
        $doa_array[]=array('doa_primary'=>"Ali Imran", 'doa_secondary'=>"Keluarga Imran", 'doa_link'=>'alquran-detail');
        $doa_array[]=array('doa_primary'=>"An-Nisa", 'doa_secondary'=>"Wanita", 'doa_link'=>'alquran-detail');
        $doa_array[]=array('doa_primary'=>"Al-Maidah", 'doa_secondary'=>"Hidangan", 'doa_link'=>'alquran-detail');
        $doa_array[]=array('doa_primary'=>"Al-An’am", 'doa_secondary'=>"Binatang Ternak", 'doa_link'=>'alquran-detail');
        $doa_array[]=array('doa_primary'=>"Al-A’raf", 'doa_secondary'=>"Tempat Tertinggi", 'doa_link'=>'alquran-detail');
        $doa_array[]=array('doa_primary'=>"Al-Anfal", 'doa_secondary'=>"Rampasan Perang", 'doa_link'=>'alquran-detail');
        $doa_array[]=array('doa_primary'=>"At-Taubah", 'doa_secondary'=>"Pengampunan", 'doa_link'=>'alquran-detail');
        $doa_array[]=array('doa_primary'=>"Yunus", 'doa_secondary'=>"Yunus", 'doa_link'=>'alquran-detail');
        $doa_array[]=array('doa_primary'=>"Hud", 'doa_secondary'=>"Hud", 'doa_link'=>'alquran-detail');
        $doa_array[]=array('doa_primary'=>"Yusuf", 'doa_secondary'=>"Yusuf", 'doa_link'=>'alquran-detail');
        $doa_array[]=array('doa_primary'=>"Ar-Ra’d", 'doa_secondary'=>"Guruh", 'doa_link'=>'alquran-detail');
        $doa_array[]=array('doa_primary'=>"Ibrahim", 'doa_secondary'=>"Ibrahim", 'doa_link'=>'alquran-detail');
	    foreach($doa_array as $doa_list){ 
	  ?>
        <a aria-label="<?php echo($doa_list['doa_primary'])?>" title="<?php echo($doa_list['doa_primary'])?>" class="dlc-box" 
        href="<?php echo($doa_list['doa_link'])?>.php">
          <div class="dlc-number">
		    <div class="dlc-frame"><?php require ($_SERVER['WATCHIS'].'img/icon/octaframe.svg')?></div>
		    <div class="dlc-post content_center">000</div>
		  </div>
          <div class="dlc-label">
		    <div class="dlc-label-primary"><?php echo($doa_list['doa_primary'])?></div>
		    <div class="dlc-label-secondary"><?php echo($doa_list['doa_secondary'])?></div>
		  </div>
          <div class="dlc-arrow content_center"><?php require ($_SERVER['WATCHIS'].'img/icon/next.svg')?></div>
        </a>
	  <?php } ?>
	</div>
  </section>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>