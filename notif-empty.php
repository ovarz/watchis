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
<?php $page_label="Notifikasi"; $page_link=""; require ($_SERVER['WATCHIS'].'module/page-title.php')?>
<div class="rancak-container">
  <section class="section-container default-full notif-empty content_center">
    <span>
      <div class="default-empty-icon content_center">
        <?php require ($_SERVER['WATCHIS'].'img/icon/empty-notif.svg')?>
      </div>
      <div class="default-empty-desc">Anda belum mempunyai notifikasi masuk.</div>
    </span>
  </section>
</div>
<?php $share='no'; require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>