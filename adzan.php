<?php 
  $theme='light';
  $page='adzan';
  $login='no';
  $channel='adzan';
  $slideshow='yes'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<div class="rancak-container">
  <section class="section-adzan-info">
    <div class="sai-bg flex_ori thumb-loading">
	  <img alt="img_title" class="lazyload" data-original="img/adzan-bg.jpg" />
	</div>
	<div class="sai-container">
	  <div class="sai-time">
	    <div class="sai-time-label">Adzan Magrib</div>
	    <div class="sai-time-detail">00:00 <span>wib</span></div>
	  </div>
	  <div class="sai-sound">
	    <button title="Play/Pause Sound" class="sai-sound-toggle content_center">
		  <?php require ($_SERVER['WATCHIS'].'img/icon/sound-on.svg')?>
		</button>
	  </div>
	  <div class="sai-loc">
	    <div class="sai-loc-icon"><?php require ($_SERVER['WATCHIS'].'img/icon/location.svg')?></div>
	    <div class="sai-loc-label">DKI Jakarta</div>
	  </div>
	  <div class="sai-date">
	    <div class="sai-date-masehi">Jum’at, 00 September 2023</div>
	    <div class="sai-date-hijriah">12 Syawal 1442 Hijriah</div>
	  </div>
	</div>
  </section>
  
  
  
  <section class="section-container section-adzan-list">
    <?php 
      $adzan_array = array();
      $adzan_array[]=array('adzan_label'=>'Subuh', 'adzan_time'=>'00:00', 'adzan_notif'=>'on');
      $adzan_array[]=array('adzan_label'=>'Dzuhur', 'adzan_time'=>'00:00', 'adzan_notif'=>'off');
      $adzan_array[]=array('adzan_label'=>'Ashar', 'adzan_time'=>'00:00', 'adzan_notif'=>'off');
      $adzan_array[]=array('adzan_label'=>'Magrib', 'adzan_time'=>'00:00', 'adzan_notif'=>'on');
      $adzan_array[]=array('adzan_label'=>'Isya', 'adzan_time'=>'00:00', 'adzan_notif'=>'on');
      foreach($adzan_array as $adzan_list){ 
    ?>
      <div class="sal-box">
        <div class="sal-label">Adzan <?php echo($adzan_list['adzan_label'])?></div>
        <div class="sal-time"><?php echo($adzan_list['adzan_time'])?> WIB</div>
        <button title="Alarm On/Off" class="sal-bell">
          <?php require ($_SERVER['WATCHIS'].'img/icon/notif-'.$adzan_list['adzan_notif'].'.svg')?>
        </button>
      </div>
	<?php } ?>
  </section>
</div>
<?php $share='no'; require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>