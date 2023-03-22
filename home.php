<?php 
  $theme='light';
  $page='home';
  $login='no';
  $channel='home';
  $slideshow='yes'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<div class="rancak-container">
  <section class="header-home">
    <div class="header-home-bg flex_ori thumb-loading">
	  <img alt="img_title" class="lazyload" data-original="img/home-header.png" />
	</div>
	<div class="header-home-content">
	  <div class="hhc-top flex_ori thumb-loading">
	    <img alt="img_title" class="lazyload" data-original="img/logo-icon.png" />
	  </div>
	  <div class="hhc-bottom">
	    <div class="hhc-bottom-time">Subuh 04:36 WIB</div>
	    <div class="hhc-bottom-date">2 Februari 2023 / 11 Rajab 1444</div>
	  </div>
	</div>
  </section>
  
  
  
  <section class="section-container section-feature">
    <?php 
      $feature_array = array();
      $feature_array[]=array('feature_name'=>'Belajar<br/>Al-Quran', 'feature_icon'=>'alquran', 'feature_link'=>'alquran');
      $feature_array[]=array('feature_name'=>'Belajar Kitab', 'feature_icon'=>'kitab', 'feature_link'=>'home');
      $feature_array[]=array('feature_name'=>'Pesantern Online', 'feature_icon'=>'pesantren', 'feature_link'=>'home');
      $feature_array[]=array('feature_name'=>'Ngaji Online', 'feature_icon'=>'ngaji', 'feature_link'=>'home');
      $feature_array[]=array('feature_name'=>'Info Watchis', 'feature_icon'=>'info', 'feature_link'=>'home');
      $feature_array[]=array('feature_name'=>'Peta', 'feature_icon'=>'peta', 'feature_link'=>'home');
      $feature_array[]=array('feature_name'=>'Kurban', 'feature_icon'=>'kurban', 'feature_link'=>'home');
      $feature_array[]=array('feature_name'=>'Zakat', 'feature_icon'=>'zakat', 'feature_link'=>'home');
      $feature_array[]=array('feature_name'=>'Sedekah', 'feature_icon'=>'sedekah', 'feature_link'=>'home');
      $feature_array[]=array('feature_name'=>'Lainnya', 'feature_icon'=>'lainnya', 'feature_link'=>'home');
      foreach($feature_array as $feature_list){ 
    ?>
      <a aria-label="<?php echo($feature_list['feature_name'])?>" title="<?php echo($feature_list['feature_name'])?>" class="section-feature-link" 
	  href="<?php echo($feature_list['feature_link'])?>.php">
        <div class="sfl-circle content_center">
          <img alt="img_title" class="lazyload" data-original="img/icon/feature-<?php echo($feature_list['feature_icon'])?>.png" />
        </div>
        <div class="sfl-name"><?php echo($feature_list['feature_name'])?></div>
      </a>
    <?php } ?>
  </section>
  
  
  
  <section class="section-container section-fb">
    <div class="section-fb-slide">
      <a aria-label="Link_Title" title="Link_Title" class="sfs-box" href="home.php">
        <div class="sfs-banner flex_ori thumb-loading">
          <img alt="img_title" class="lazyload" data-original="img/sfs-slide-1.jpg" />
        </div>
      </a>
      <a aria-label="Link_Title" title="Link_Title" class="sfs-box" href="home.php">
        <div class="sfs-banner flex_ori thumb-loading">
          <img alt="img_title" class="lazyload" data-original="img/sfs-slide-2.jpg" />
        </div>
      </a>
	</div>
	<script>
      var fb_greetings = tns({
        container:'.section-fb-slide',
        speed:333,
        items:1,
        gutter:5, 
        edgePadding:0,
        controls:false,
        nav:true,
        mouseDrag:true,
        autoplay:true,
      });
	</script>
  </section>
  
  
  
  <section class="section-container section-event">
    <div class="section-event-container">
	  <style>
	    .sec-info .sec-image:before{padding-top:195.31%;}
	    .sec-location .sec-image:before{padding-top:146.87%;}
	  </style>
	  <div class="sec-box sec-info">
	    <div class="sec-image flex_ori thumb-loading">
		  <img alt="img_title" class="lazyload" data-original="img/icon/event-icon.png" />
		</div>
	    <div class="sec-title">
          Puncak Peringatan<br/>
          <b>Harlah 1 Abad NU</b><br/>
          7 Februari 2023.
		</div>
	  </div>
	  <div class="sec-box sec-location">
	    <div class="sec-image flex_ori thumb-loading">
		  <img alt="img_title" class="lazyload" data-original="img/icon/event-location.png" />
		</div>
	    <div class="sec-address">
          Stadion Gelora Bung Karno,<br/>
          Bung Karno, RT.1/RW.3, Gelora,<br/>
          Kecamatan Tanah Abang, <br/>
          Kota Jakarta Pusat,<br/>
          DKI Jakarta.
		</div>
	  </div>
	</div>
  </section>
  
  
  
  <section class="section-container section-article">
    <div class="section-title">Info Watchis</div>
	<div class="section-article-list">
	  <?php for ($i=1; $i <= 10 ; $i++) { ?>
	    <?php require ($_SERVER['WATCHIS'].'module/content-list.php')?>
	  <?php } ?>
	</div>
  </section>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>