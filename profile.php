<?php 
  $theme='light';
  $page='profile';
  $login='yes';
  $channel='profile';
  $slideshow='no';
  $search_page='cari/'; 
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
  
  
  
  <section class="section-container">
    <div class="section-title">Akun Anda</div>
  </section>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>