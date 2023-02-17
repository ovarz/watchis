<section class="section-container section-ayat-head">
  <div class="sah-bismillah content_center">
    <div class="sah-bismillah-frame flex_ori thumb-loading">
      <img alt="img_title" class="lazyload" data-original="img/bismillah.png" />
    </div>
  </div>
  <div class="sah-search">
    <input class="sah-search-field" name="" type="text" placeholder="<?php echo $head_label; ?> apa yang ingin anda baca?">
	<button title="search" class="sah-search-button sah-search-left content_center">
	  <?php require ($_SERVER['WATCHIS'].'img/icon/search.svg')?>
	</button>
	<button title="voice" class="sah-search-button sah-search-right content_center">
	  <img alt="img_title" class="lazyload" data-original="img/icon/google-voice.png" width="17" height="24" />
	</button>
  </div>
  <div class="sah-populer">
    <div class="sah-populer-label"><?php echo $head_label; ?> Terpopuler :</div>
	<div class="sah-populer-list">
	  <?php for ($i=1; $i <= 5 ; $i++) { ?>
        <a aria-label="Link_Title" title="Link_Title" class="sah-populer-link" href="alquran.php">
          <?php echo $random_surah[array_rand($random_surah)]; ?>
        </a>
	  <?php } ?>
	</div>
  </div>
</section>