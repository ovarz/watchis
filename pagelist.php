<?php 
  $theme='light';
  $page='intro';
  $channel='';
  $slideshow='no';
  $search_page='cari/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<style>
  .pagelist ul{padding-left:18px;}
  .pagelist > ul{list-style:disc;}
  .pagelist > ul > li > ul{list-style:circle;}
  .pagelist-row{padding:7px 0; display:block;}
</style>
<div class="rancak-container">
  <div class="section-container pagelist">
    <ul>
      <li>
        <a class="pagelist-row" href="index.php">Halaman Intro/ Splash Screen</a>
      </li>
      <li>
        <a class="pagelist-row" href="home.php">Halaman Utama</a>
      </li>
      <li>
        <a class="pagelist-row" href="socmed.php">Halaman Social Media</a>
      </li>
      <li>
        <a class="pagelist-row" href="alquran.php">Halaman Al-Quran</a>
      </li>
    </ul>
  </div>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>