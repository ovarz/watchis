<?php 
  $theme='light';
  $page='kiblat';
  $login='yes';
  $channel='kiblat';
  $slideshow='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<?php $page_label="Kiblat"; $page_link=""; require ($_SERVER['WATCHIS'].'module/page-title.php')?>
<div class="rancak-container">
  <section class="section-container default-full kiblat-container content_center">
    <span>
      <div class="kiblat-image flex_ori thumb-loading">
        <img alt="img_title" class="lazyload" data-original="img/kiblat.png" />
      </div>
    </span>
  </section>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>