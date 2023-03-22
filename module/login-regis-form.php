<section class="section-container login-regis content_center">
  <div class="login-regis-container">
    <div class="section-title">
	  <?php if($form_type == 'login') { ?>Login<?php } ?>
	  <?php if($form_type == 'register') { ?>Registrasi<?php } ?>
	</div>
    <div class="lrc-form">
	  <?php if($channel == 'register-error') { ?>
        <div class="lrc-row alert alert-error">
          Pendaftaran gagal, silakan cek kembali pengisian form anda.
        </div>
	  <?php } ?>
	  
	  <?php if($channel == 'register-success') { ?>
        <div class="lrc-row alert alert-success">
          Akun berhasil didaftarkan.
        </div>
	  <?php } ?>
	  
	  <?php if($form_type == 'register') { ?>
        <div class="lrc-row">
          <div class="lrc-label">Nama Lengkap</div>
          <div class="lrc-box">
            <input class="lrc-field" placeholder="Masukan nama lengkap anda" type="text">
          </div>
        </div>
	  <?php } ?>
	  
      <div class="lrc-row <?php if($form_error == 'yes') { ?>lrc-error<?php } ?>">
        <div class="lrc-label">Nomor KTP</div>
        <div class="lrc-box">
          <input class="lrc-field" placeholder="Masukan nomor KTP anda" type="text" onkeypress="return (event.charCode !=8 &amp;&amp; event.charCode ==0 || (event.charCode >= 48 &amp;&amp; event.charCode <= 57))">
        </div>
        <?php if($form_error == 'yes') { ?><div class="lrc-note">KTP sudah terdaftar</div><?php } ?>
      </div>
	  
	  <?php if($form_type == 'register') { ?>
        <div class="lrc-row lrc-birthday">
          <div class="lrc-label">Tanggal Lahir</div>
          <div class="lrc-box" id="pilihtanggal">
            <input class="lrc-field choosedate" placeholder="Masukan tanggal lahir anda" type="text">
            <div class="lrc-icon show-pass content_center">
              <?php require ($_SERVER['WATCHIS'].'img/icon/calendar.svg')?>
            </div>
          </div>
        </div>
        <div class="lrc-row">
          <div class="lrc-label">Kota Kelahiran</div>
          <div class="lrc-box">
			<select class="lrc-field">
              <option value="0">-- PILIH JENIS KELAMIN --</option>
              <option value="1">Pria</option>
              <option value="2">Wanita</option>
            </select>
            <div class="lrc-icon show-pass content_center">
              <?php require ($_SERVER['WATCHIS'].'img/icon/dropdown.svg')?>
            </div>
          </div>
        </div>
	  <?php } ?>
	  
      <div class="lrc-row lrc-password">
        <div class="lrc-label">Password</div>
        <div class="lrc-box">
          <input class="lrc-field" placeholder="Masukan password anda" type="password">
          <button title="Show / Hide Password" class="lrc-icon show-pass content_center">
            <?php require ($_SERVER['WATCHIS'].'img/icon/pass-hide.svg')?>
            <?php require ($_SERVER['WATCHIS'].'img/icon/pass-show.svg')?>
          </button>
        </div>
      </div>
	  
	  <?php if($form_type == 'register') { ?>
        <div class="lrc-row lrc-password">
          <div class="lrc-label">Ulangi Password</div>
          <div class="lrc-box">
            <input class="lrc-field" placeholder="Masukan kembali password anda" type="password">
            <button title="Show / Hide Password" class="lrc-icon show-pass content_center">
              <?php require ($_SERVER['WATCHIS'].'img/icon/pass-hide.svg')?>
              <?php require ($_SERVER['WATCHIS'].'img/icon/pass-show.svg')?>
            </button>
          </div>
        </div>
	  <?php } ?>
	  
      <div class="lrc-row">
        <button title="Submit" class="btn lrc-button" onclick="location.href='<?php echo $form_next; ?>.php'">
		  <?php if($form_type == 'login') { ?>Masuk<?php } ?>
		  <?php if($form_type == 'register') { ?>Daftar<?php } ?>
		</button>
      </div>
	  
      <?php if($form_type == 'login') { ?>
        <div class="lrc-row">
          <a aria-label="Registrasi" title="Registrasi" class="lrc-link" href="register.php">Belum punya akun? <b>Klik disini</b> untuk mendaftar!</a>
        </div>
      <?php } ?>
      <?php if($form_type == 'register') { ?>
        <div class="lrc-row">
          <a aria-label="Login" title="Login" class="lrc-link" href="login.php">Sudah punya akun? <b>Klik disini</b> untuk login!</a>
        </div>
      <?php } ?>
    </div>
  </div>
</section>