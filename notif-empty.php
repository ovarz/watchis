<?php 
  $theme='light';
  $page='notif';
  $login='yes';
  $channel='notif';
  $slideshow='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<div class="rancak-container">
  <section class="section-container">
    <div class="section-title section-title-single">Notifikasi</div>
  </section>
  
  
  
  <section class="section-container default-empty notif-empty content_center">
    <span>
      <div class="default-empty-icon content_center">
        <?php require ($_SERVER['WATCHIS'].'img/icon/empty-notif.svg')?>
      </div>
      <div class="default-empty-desc">Anda belum mempunyai notifikasi masuk.</div>
    </span>
  </section>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>