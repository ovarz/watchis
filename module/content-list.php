<div class="content-box">
  <div class="content-thumb">
    <a aria-label="Link_Title" title="Link_Title" class="content-thumb-frame flex_ori thumb-loading" href="<?php echo $detail_link; ?>.php">
      <img alt="img_title" class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
    </a>
  </div>
  
  <div class="content-info">
	<?php if($content_type == 'article') { ?>
      <a aria-label="Link_Title" title="Link_Title" class="content-info-channel" href="">
        Info Watchis
      </a>
	<?php } ?>
    <a aria-label="Link_Title" title="Link_Title" class="content-info-title" href="<?php echo $detail_link; ?>.php">
      <h2><?php echo $random_title[array_rand($random_title)]; ?></h2>
    </a>
	<?php if($content_type == 'video') { ?>
	  <div class="content-info-misc">
	    <div class="content-info-view">000Jt x ditonton</div>
	    <div class="content-info-date">4 bulan lalu</div>
	  </div>
	<?php } ?>
  </div>
</div>