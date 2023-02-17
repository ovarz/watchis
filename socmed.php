<?php 
  $theme='light';
  $page='socmed';
  $channel='socmed';
  $slideshow='no';
  $search_page='cari/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<div class="rancak-container">
  <section class="section-container section-story">
	<div class="section-story-list">
	  <?php for ($i=1; $i <= 10 ; $i++) { ?>
	    <?php require ($_SERVER['WATCHIS'].'module/story-list.php')?>
	  <?php } ?>
	</div>
  </section>
  
  
  
  <section class="section-container section-feed">
	<div class="section-feed-list">
	  <?php for ($i=1; $i <= 10 ; $i++) { ?>
	    <?php require ($_SERVER['WATCHIS'].'module/feed-list.php')?>
	  <?php } ?>
	</div>
  </section>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>