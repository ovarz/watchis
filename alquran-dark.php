<?php 
  $theme='dark';
  $page='alquran-dark';
  $login='yes';
  $channel='alquran';
  $slideshow='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<div class="rancak-container">

  <?php $head_label='Surah'; require ($_SERVER['WATCHIS'].'module/ayat-head.php')?>
  
  
  
  <section class="section-container section-ayat-history">
    <div class="section-ayat-title">
      <div class="sat-label">Baru-baru ini dibaca</div>
    </div>
    <div class="ayat-history-container">
      <?php for ($i=1; $i <= 5 ; $i++) { ?>
        <?php require ($_SERVER['WATCHIS'].'module/ayat-history.php')?>
      <?php } ?>
    </div>
  </section>
  
  
  
  <section class="section-container section-ayat-bookmark">
    <div class="section-ayat-title">
      <div class="sat-label">Penandaaan</div>
    </div>
    <div class="ayat-bookmark-container">
      <?php for ($i=1; $i <= 5 ; $i++) { ?>
        <?php require ($_SERVER['WATCHIS'].'module/ayat-box.php')?>
      <?php } ?>
    </div>
  </section>
  
  
  
  <section class="section-container section-ayat-list">
    <div class="section-ayat-tab">
      <button class="ayat-tab-button ayat-tab-curr">Surah</button>
      <button class="ayat-tab-button">Juz</button>
      <button class="ayat-tab-button">Urutan Wahyu</button>
      <button class="ayat-tab-button ayat-tab-sort">
	    <?php require ($_SERVER['WATCHIS'].'img/icon/sort-up.svg')?>
	    <!--<?php require ($_SERVER['WATCHIS'].'img/icon/sort-down.svg')?>-->
	  </button>
    </div>
    <div class="ayat-list-container">
      <?php for ($i=1; $i <= 10 ; $i++) { ?>
        <?php require ($_SERVER['WATCHIS'].'module/ayat-box.php')?>
      <?php } ?>
    </div>
  </section>
  
</div>
<?php require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>