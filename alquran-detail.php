<?php 
  $theme='light';
  $page='alquran';
  $login='yes';
  $channel='detail';
  $slideshow='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<?php $page_label="Al-Qur'an"; $page_link="alquran-surah.php"; require ($_SERVER['WATCHIS'].'module/page-title.php')?>
<div class="rancak-container">
  <nav class="surah-nav">
    <a aria-label="Prev" title="Prev" class="surah-nav-button surah-nav-prev content_center" href="alquran-detail.php">
	  <div class="surah-nav-container content_center">
	    <?php require ($_SERVER['WATCHIS'].'img/icon/prev-circle.svg')?>
	  </div>
	</a>
    <div class="surah-nav-info content_center">
	  <span>
	    <div class="surah-nav-name">Al-Fatihah</div>
	    <div class="surah-nav-desc">Makkiyah, 7 Ayat</div>
	  </span>
	</div>
    <a aria-label="Next" title="Next" class="surah-nav-button surah-nav-next content_center" href="alquran-detail.php">
	  <div class="surah-nav-container content_center">
	    <?php require ($_SERVER['WATCHIS'].'img/icon/next-circle.svg')?>
	  </div>
	</a>
  </nav>
  
  
  
  <section class="section-container alquran-detail">
    <?php 
      $surah_array = array();
      $surah_array[]=array(
	    'surah_arabic'=>"بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ",
		'surah_spell'=>"Bismillāhir-raḥmānir-raḥīm(i).",
		'surah_indonesia'=>'Dengan nama Allah Yang Maha Pengasih lagi Maha Penyayang.'
	  );
      $surah_array[]=array(
	    'surah_arabic'=>"اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَۙ",
		'surah_spell'=>"Al-ḥamdu lillāhi rabbil-‘ālamīn(a).",
		'surah_indonesia'=>'Segala puji bagi Allah, Tuhan semesta alam'
	  );
      $surah_array[]=array(
	    'surah_arabic'=>"الرَّحْمٰنِ الرَّحِيْمِۙ",
		'surah_spell'=>"Ar-raḥmānir-raḥīm(i).",
		'surah_indonesia'=>'Yang Maha Pengasih lagi Maha Penyayang,'
	  );
      $surah_array[]=array(
	    'surah_arabic'=>"مٰلِكِ يَوْمِ الدِّيْنِۗ",
		'surah_spell'=>"Māliki yaumid-dīn(i).",
		'surah_indonesia'=>'Pemilik hari Pembalasan.'
	  );
      $surah_array[]=array(
	    'surah_arabic'=>"اِيَّاكَ نَعْبُدُ وَاِيَّاكَ نَسْتَعِيْنُۗ",
		'surah_spell'=>"Iyyāka na‘budu wa iyyāka nasta‘īn(u),",
		'surah_indonesia'=>'Hanya kepada Engkaulah kami menyembah dan hanya kepada Engkaulah kami memohon pertolongan.'
	  );
      $surah_array[]=array(
	    'surah_arabic'=>"اِهْدِنَا الصِّرَاطَ الْمُسْتَقِيْمَۙ",
		'surah_spell'=>"Ihdinaṣ-ṣirāṭal-mustaqīm(a).",
		'surah_indonesia'=>'Bimbinglah kami ke jalan yang lurus,'
	  );
      $surah_array[]=array(
	    'surah_arabic'=>"صِرَاطَ الَّذِيْنَ اَنْعَمْتَ عَلَيْهِمْ ەۙ غَيْرِ الْمَغْضُوْبِ عَلَيْهِمْ وَلَا الضَّاۤلِّيْنَ ࣖ",
		'surah_spell'=>"Ṣirāṭal-lażīna an‘amta ‘alaihim, gairil-magḍūbi ‘alaihim wa laḍ-ḍāllīn(a).",
		'surah_indonesia'=>'(yaitu) jalan orang-orang yang telah Engkau beri nikmat, bukan (jalan) mereka yang dimurkai dan bukan (pula jalan) orang-orang yang sesat.'
	  );
      foreach($surah_array as $surah_list){ 
    ?>
      <div class="alquran-detail-box">
        <div class="adb-nav">
          <button title="Option" class="adb-button"><?php require ($_SERVER['WATCHIS'].'img/icon/3dot-vertical.svg')?></button>
        </div>
        <div class="doa-detail-container adb-content">
          <div class="ddc-arabic"><?php echo($surah_list['surah_arabic'])?></div>
          <div class="ddc-spell"><?php echo($surah_list['surah_spell'])?></div>
          <div class="ddc-indonesia"><?php echo($surah_list['surah_indonesia'])?></div>
        </div>
      </div>
	<?php } ?>
  </section>
</div>
<?php $share='no'; require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>