<?php 
  $theme='light';
  $page='intro';
  $login='no';
  $channel='';
  $slideshow='no'; 
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
      <li>
        <div class="pagelist-row">Halaman User</div>
		<ul>
          <li>
            <a class="pagelist-row" href="register.php">Halaman Registrasi</a>
          </li>
          <li>
            <a class="pagelist-row" href="register-error.php">Halaman Registrasi Gagal</a>
          </li>
          <li>
            <a class="pagelist-row" href="register-success.php">Halaman Registrasi Sukses</a>
          </li>
          <li>
            <a class="pagelist-row" href="login.php">Halaman Login</a>
          </li>
          <li>
            <a class="pagelist-row" href="profile.php">Halaman Profil</a>
          </li>
		</ul>
      </li>
      <li>
        <div class="pagelist-row">Halaman Do'a</div>
		<ul>
          <li>
            <a class="pagelist-row" href="doa.php">Halaman Daftar Do'a</a>
          </li>
          <li>
            <a class="pagelist-row" href="doa-detail.php">Halaman Detail Do'a</a>
          </li>
		</ul>
      </li>
      <li>
        <div class="pagelist-row">Halaman Sholawat</div>
		<ul>
          <li>
            <a class="pagelist-row" href="sholawat.php">Halaman Daftar Sholawat</a>
          </li>
          <li>
            <a class="pagelist-row" href="sholawat-detail.php">Halaman Detail Sholawat</a>
          </li>
		</ul>
      </li>
    </ul>
  </div>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>