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
        <div class="pagelist-row">Halaman Detail</div>
		<ul>
          <li>
            <a class="pagelist-row" href="detail-article.php">Halaman Detail Artikel</a>
          </li>
          <li>
            <a class="pagelist-row" href="detail-video.php">Halaman Detail Video</a>
          </li>
		</ul>
      </li>
      <li>
        <div class="pagelist-row">Halaman Al-Quran</div>
		<ul>
          <li>
            <a class="pagelist-row" href="alquran-surah.php">Halaman Daftar Surah</a>
          </li>
          <li>
            <a class="pagelist-row" href="alquran-juz.php">Halaman Daftar Juz</a>
          </li>
          <li>
            <a class="pagelist-row" href="alquran-saved.php">Halaman Daftar Surah Yang Tersimpan</a>
          </li>
          <li>
            <a class="pagelist-row" href="alquran-detail.php">Halaman Detail Surah</a>
          </li>
          <li>
            <a class="pagelist-row" href="alquran-dark.php">Halaman Utama Al-Quran <br> (Alternatif Desain)</a>
          </li>
		</ul>
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
      <li>
        <div class="pagelist-row">Halaman Zakat</div>
		<ul>
		  <li>
			<a class="pagelist-row" href="zakat.php">Halaman Daftar Zakat</a>
		  </li>
		  <li>
			<a class="pagelist-row" href="zakat-calculator.php">Halaman Kalkulator Zakat</a>
		  </li>
		</ul>
      </li>
      <li>
        <a class="pagelist-row" href="adzan.php">Halaman Adzan</a>
      </li>
      <li>
        <a class="pagelist-row" href="dzikir.php">Halaman Dzikir</a>
      </li>
      <li>
        <a class="pagelist-row" href="notif-empty.php">Halaman Notifikasi</a>
      </li>
      <li>
        <a class="pagelist-row" href="kiblat.php">Halaman Kiblat</a>
      </li>
      <li>
        <a class="pagelist-row" href="tahlil.php">Halaman Tahlil</a>
      </li>
      <li>
        <a class="pagelist-row" href="jsn.php">Halaman JSN</a>
      </li>
    </ul>
  </div>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>