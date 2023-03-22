<?php 
  $theme='light';
  $page='profile';
  $login='yes';
  $channel='profile';
  $slideshow='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<div class="rancak-container">
  <section class="section-container profile-head">
    <div class="profile-head-left">
	  <div class="profile-thumb flex_ori thumb-loading">
	    <img alt="img_title" class="lazyload" data-original="img/sample/icon-profile-<?php echo rand(1,5); ?>.jpg" />
	  </div>
	</div>
	
	<div class="profile-head-right">
	  <h2 class="profile-name"><?php echo $random_author[array_rand($random_author)]; ?></h2>
	  <h3 class="profile-phone">+62-800-0000-0000</h3>
	</div>
  </section>
  
  
  
  <section class="section-container profile-list">
    <div class="section-title">Akun Anda</div>
	<div class="profile-list-container">
	  <?php 
        $profile_array = array();
        $profile_array[]=array('profile_icon'=>'edit', 'profile_label'=>'Ubah Profil', 'profile_link'=>'profile');
	    foreach($profile_array as $profile_list){ 
	  ?>
	  <a aria-label="<?php echo($profile_list['profile_label'])?>" title="<?php echo($profile_list['profile_label'])?>" class="plc-box" 
	  href="<?php echo($profile_list['profile_link'])?>.php">
	    <div class="plc-icon content_center"><?php require ($_SERVER['WATCHIS'].'img/icon/profile-'.$profile_list['profile_icon'].'.svg')?></div>
		<div class="plc-label"><?php echo($profile_list['profile_label'])?></div>
		<div class="plc-arrow content_center"><?php require ($_SERVER['WATCHIS'].'img/icon/next.svg')?></div>
	  </a>
	  <?php } ?>
	</div>
  </section>
  
  
  
  <section class="section-container profile-list">
    <div class="section-title">Keamanan</div>
	<div class="profile-list-container">
	  <?php 
        $profile_array = array();
        $profile_array[]=array('profile_icon'=>'password', 'profile_label'=>'Password', 'profile_link'=>'profile');
        $profile_array[]=array('profile_icon'=>'pobox', 'profile_label'=>'Kode Pos', 'profile_link'=>'profile');
	    foreach($profile_array as $profile_list){ 
	  ?>
	  <a aria-label="<?php echo($profile_list['profile_label'])?>" title="<?php echo($profile_list['profile_label'])?>" class="plc-box" 
	  href="<?php echo($profile_list['profile_link'])?>.php">
	    <div class="plc-icon content_center"><?php require ($_SERVER['WATCHIS'].'img/icon/profile-'.$profile_list['profile_icon'].'.svg')?></div>
		<div class="plc-label"><?php echo($profile_list['profile_label'])?></div>
		<div class="plc-arrow content_center"><?php require ($_SERVER['WATCHIS'].'img/icon/next.svg')?></div>
	  </a>
	  <?php } ?>
	</div>
  </section>
  
  
  
  <section class="section-container profile-list">
    <div class="section-title">Tentang</div>
	<div class="profile-list-container">
	  <?php 
        $profile_array = array();
        $profile_array[]=array('profile_icon'=>'complain', 'profile_label'=>'Keluhan Pelanggan', 'profile_link'=>'profile');
        $profile_array[]=array('profile_icon'=>'faq', 'profile_label'=>'FAQ', 'profile_link'=>'profile');
        $profile_array[]=array('profile_icon'=>'tutorial', 'profile_label'=>'Tutorial', 'profile_link'=>'profile');
        $profile_array[]=array('profile_icon'=>'term', 'profile_label'=>'Syarat dan Ketentuan', 'profile_link'=>'profile');
        $profile_array[]=array('profile_icon'=>'privacy', 'profile_label'=>'Kebijakan Privasi', 'profile_link'=>'profile');
	    foreach($profile_array as $profile_list){ 
	  ?>
	  <a aria-label="<?php echo($profile_list['profile_label'])?>" title="<?php echo($profile_list['profile_label'])?>" class="plc-box" 
	  href="<?php echo($profile_list['profile_link'])?>.php">
	    <div class="plc-icon content_center"><?php require ($_SERVER['WATCHIS'].'img/icon/profile-'.$profile_list['profile_icon'].'.svg')?></div>
		<div class="plc-label"><?php echo($profile_list['profile_label'])?></div>
		<div class="plc-arrow content_center"><?php require ($_SERVER['WATCHIS'].'img/icon/next.svg')?></div>
	  </a>
	  <?php } ?>
	</div>
  </section>
  
  
  
  <section class="section-container profile-list">
    <div class="section-title">Lainnya</div>
	<div class="profile-list-container">
	  <?php 
        $profile_array = array();
        $profile_array[]=array('profile_icon'=>'logout', 'profile_label'=>'Logout', 'profile_link'=>'index');
	    foreach($profile_array as $profile_list){ 
	  ?>
	  <a aria-label="<?php echo($profile_list['profile_label'])?>" title="<?php echo($profile_list['profile_label'])?>" class="plc-box" 
	  href="<?php echo($profile_list['profile_link'])?>.php">
	    <div class="plc-icon content_center"><?php require ($_SERVER['WATCHIS'].'img/icon/profile-'.$profile_list['profile_icon'].'.svg')?></div>
		<div class="plc-label"><?php echo($profile_list['profile_label'])?></div>
		<div class="plc-arrow content_center"><?php require ($_SERVER['WATCHIS'].'img/icon/next.svg')?></div>
	  </a>
	  <?php } ?>
	</div>
  </section>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>