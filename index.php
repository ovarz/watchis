<?php 
  $theme='light';
  $page='intro';
  $login='no';
  $channel='';
  $slideshow='no';
  $search_page='cari/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<style>
  .intro-logo{display:block; width:100%; max-width:250px;}
  .intro-logo img{width:100%; height:auto;}
</style>
<div class="rancak-container intro content_center">
  <a aria-label="Intro" title="Intro" class="intro-logo" href="home.php">
    <picture>
      <source srcset="img/intro.webp?<?php echo $anticache; ?>" type="image/webp">
      <source srcset="img/intro.png?<?php echo $anticache; ?>">
      <img alt="Logo Watchis" src="img/intro.png?<?php echo $anticache; ?>" width="799" height="666">
    </picture>
  </a>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>