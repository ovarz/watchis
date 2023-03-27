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
  <section class="section-container">
    <div class="header-home">
      <div class="header-home-top">
        <div class="hht-left">
          <div class="hht-greeting">Halo Guest</div>
          <div class="hht-welcome">Selamat Datang di Watchis</div>
        </div>
        <div class="hht-right">
          <a aria-label="Notifikasi" title="Notifikasi" class="hht-button" href="notif-empty.php">
            <?php require ($_SERVER['WATCHIS'].'img/icon/notif-on.svg')?>
          </a>
          <a aria-label="Profile" title="Profile" class="hht-button" href="login.php">
            <?php require ($_SERVER['WATCHIS'].'img/icon/menu-profile.svg')?>
          </a>
        </div>
      </div>
	  
      <div class="header-home-bottom">
        <div class="hhb-left">
          <div class="hhb-loc-icon"><?php require ($_SERVER['WATCHIS'].'img/icon/location.svg')?></div>
          <div class="hhb-loc-name">DKI Jakarta</div>
        </div>
        <div class="hhb-right">
          <div class="hhb-loc-name">Isya, 19:10 WIB</div>
          <div class="hhb-loc-icon"><?php require ($_SERVER['WATCHIS'].'img/icon/sound-on.svg')?></div>
        </div>
      </div>
	</div>
  </section>
  
  
  
  <section class="section-container section-feature">
    <?php 
      $feature_array = array();
      $feature_array[]=array('feature_name'=>'Al-Quran', 'feature_icon'=>'alquran', 'feature_link'=>'alquran-surah');
      $feature_array[]=array('feature_name'=>'Kiblat', 'feature_icon'=>'kiblat', 'feature_link'=>'kiblat');
      $feature_array[]=array('feature_name'=>'Sholawat', 'feature_icon'=>'sholawat', 'feature_link'=>'sholawat');
      $feature_array[]=array('feature_name'=>'Tahlil', 'feature_icon'=>'tahlil', 'feature_link'=>'tahlil');
      $feature_array[]=array('feature_name'=>"Do'a", 'feature_icon'=>'doa', 'feature_link'=>'doa');
      $feature_array[]=array('feature_name'=>'Dzikir', 'feature_icon'=>'dzikir', 'feature_link'=>'dzikir');
      $feature_array[]=array('feature_name'=>'JSN', 'feature_icon'=>'jsn', 'feature_link'=>'jsn');
      $feature_array[]=array('feature_name'=>'JIS', 'feature_icon'=>'jis', 'feature_link'=>'zakat');
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
        edgePadding:21,
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
	    <?php $content_type='article'; $channel_link=''; require ($_SERVER['WATCHIS'].'module/content-list.php')?>
	  <?php } ?>
	</div>
  </section>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>