<div class="content-box">
  <div class="content-thumb">
    <a aria-label="Link_Title" title="Link_Title" class="content-thumb-frame flex_ori thumb-loading" href="<?php echo $channel_link; ?>/detail.php">
      <img alt="img_title" class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
    </a>
  </div>
  
  <div class="content-info">
    <a aria-label="Link_Title" title="Link_Title" class="content-info-channel" href="<?php echo $channel_link; ?>/">
      Info Watchis
    </a>
    <a aria-label="Link_Title" title="Link_Title" class="content-info-title" href="<?php echo $channel_link; ?>/detail.php">
      <h2><?php echo $random_title[array_rand($random_title)]; ?></h2>
    </a>
	<!--<h3 class="content-info-desc"><?php echo $random_desc[array_rand($random_desc)]; ?></h3>-->
  </div>
</div>