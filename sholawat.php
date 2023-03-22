<?php 
  $theme='light';
  $page='sholawat';
  $login='yes';
  $channel='sholawat';
  $slideshow='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<div class="rancak-container">
  <section class="section-container doa-list">
    <div class="section-title">Sholawat</div>
	<?php require ($_SERVER['WATCHIS'].'module/search-box.php')?>
	<div class="doa-list-container">
	  <?php 
        $doa_array = array();
        $doa_array[]=array('doa_label'=>"Sholawat Asyghill", 'doa_link'=>'sholawat-detail');
        $doa_array[]=array('doa_label'=>"Sholawat Thibbil Qulub", 'doa_link'=>'sholawat-detail');
        $doa_array[]=array('doa_label'=>"Sholawat Munijyat", 'doa_link'=>'sholawat-detail');
        $doa_array[]=array('doa_label'=>"Sholawat Nariyah", 'doa_link'=>'sholawat-detail');
        $doa_array[]=array('doa_label'=>"Sholawat Fatih", 'doa_link'=>'sholawat-detail');
        $doa_array[]=array('doa_label'=>"Sholawat Nuril Anwar", 'doa_link'=>'sholawat-detail');
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
<?php require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>