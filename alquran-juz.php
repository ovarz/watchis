<?php 
  $theme='light';
  $page='alquran';
  $login='yes';
  $channel='juz';
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
	<div class="doa-list-container">
	  <?php 
        $doa_array = array();
        $doa_array[]=array('doa_primary'=>"Juz 1", 'doa_secondary'=>"Al-Fatihah 1 - Al-Baqarah 141", 'doa_link'=>'alquran-juz');
        $doa_array[]=array('doa_primary'=>"Juz 2", 'doa_secondary'=>"Al-Baqarah 142 - Al-Baqarah 252", 'doa_link'=>'alquran-juz');
        $doa_array[]=array('doa_primary'=>"Juz 3", 'doa_secondary'=>"Al-Baqarah 253 - Ali Imran 91", 'doa_link'=>'alquran-juz');
        $doa_array[]=array('doa_primary'=>"Juz 4", 'doa_secondary'=>"Ali Imran 92 - An-Nisa 23", 'doa_link'=>'alquran-juz');
        $doa_array[]=array('doa_primary'=>"Juz 5", 'doa_secondary'=>"An-Nisa 24 - An-Nisa 147", 'doa_link'=>'alquran-juz');
        $doa_array[]=array('doa_primary'=>"Juz 6", 'doa_secondary'=>"An-Nisa 148 - Al-Maidah 82", 'doa_link'=>'alquran-juz');
        $doa_array[]=array('doa_primary'=>"Juz 7", 'doa_secondary'=>"Al-Maidah 83 - Al-An'am 110", 'doa_link'=>'alquran-juz');
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