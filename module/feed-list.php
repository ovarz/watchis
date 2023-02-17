<div class="feed-box">
  <div class="feed-head">
    <a aria-label="Link_Title" title="Link_Title" class="feed-user" href="socmed.php">
	  <div class="feed-avatar flex_ori thumb-loading">
	    <img alt="img_title" class="lazyload" data-original="img/sample/profile-<?php echo rand(1,20); ?>.jpg" />
	  </div>
	  <div class="feed-username"><?php echo $random_author[array_rand($random_author)]; ?></div>
	</a>
	<div class="feed-right">
	  <button title="Menu" class="feed-button feed-menu-button content_center">
	    <?php require ($_SERVER['WATCHIS'].'img/icon/dots.svg')?>
	  </button>
	</div>
  </div>

  <div class="feed-thumb flex_ori thumb-loading">
    <img alt="img_title" class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
  </div>
  
  <div class="feed-nav">
    <div class="feed-nav-left">
	  <button title="Nav" class="fnl-button content_center">
	    <?php require ($_SERVER['WATCHIS'].'img/icon/feed-like.svg')?>
	  </button>
	  <button title="Nav" class="fnl-button content_center">
	    <?php require ($_SERVER['WATCHIS'].'img/icon/feed-comment.svg')?>
	  </button>
	  <button title="Nav" class="fnl-button content_center">
	    <?php require ($_SERVER['WATCHIS'].'img/icon/feed-share.svg')?>
	  </button>
	</div>
	<div class="feed-nav-right">
	  <button title="Nav" class="fnl-button content_center">
	    <?php require ($_SERVER['WATCHIS'].'img/icon/feed-bookmark.svg')?>
	  </button>
	</div>
	<div class="feed-nav-full">00.000 Suka</div>
  </div>
  
  <div class="feed-info">
	<h2 class="feed-info-desc">
	  <b class="feed-info-opening"><?php echo $random_author[array_rand($random_author)]; ?></b> - 
	  <?php echo $random_desc[array_rand($random_desc)]; ?>
	</h2>
  </div>
  
  <button title="Link_Title" class="feed-comment-show">Tampilkan semua 0000 komentar</button>
  
  <div class="feed-comment-input" href="socmed.php">
    <div class="feed-avatar flex_ori thumb-loading">
      <img alt="img_title" class="lazyload" data-original="img/sample/profile-<?php echo rand(1,20); ?>.jpg" />
    </div>
	<input class="feed-comment-field" name="" type="text" placeholder="Tambahkan komentar.....">
  </div>
  
  <div class="feed-date">00 hari yang lalu</div>
</div>