<?php 
  $theme='light';
  $page='zakat';
  $login='yes';
  $channel='profesi';
  $slideshow='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['WATCHIS'].'inc/sample.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/meta.php')?>
<?php $page_label="Kalkulator Zakat"; $page_link="zakat.php"; require ($_SERVER['WATCHIS'].'module/page-title.php')?>
<div class="rancak-container">
  <section class="default-tab zakat-tab">
    <?php 
      $tab_array = array();
      $tab_array[]=array('tab_label'=>"profesi", 'tab_link'=>'zakat');
      $tab_array[]=array('tab_label'=>"maal", 'tab_link'=>'zakat');
      foreach($tab_array as $tab_list){ 
    ?>
      <a aria-label="<?php echo($tab_list['tab_label'])?>" title="<?php echo($tab_list['tab_label'])?>" 
      class="default-tab-link <?php if($channel == $tab_list['tab_label']) { ?>default-tab-curr<?php } ?>" 
      href="<?php echo($tab_list['tab_link'])?>.php">
        <?php echo($tab_list['tab_label'])?>
      </a>
    <?php } ?>
  </section>
  
  
  
  <section class="section-container zakat-list">
    <div class="zakat-row">
      <div class="zakat-label">Penghasilan per bulan<span>*</span></div>
      <div class="zakat-box">
        <input class="default-field zakat-field" placeholder="Masukan penghasilan utama" type="text">
      </div>
    </div>
	
    <div class="zakat-row">
      <div class="zakat-label">Penghasilan lain per bulan (opsional)</div>
      <div class="zakat-box">
        <input class="default-field zakat-field" placeholder="Masukan penghasilan utama (jika ada)" type="text">
      </div>
    </div>
	
    <div class="zakat-row">
      <div class="zakat-label">Utang/cicilan per bulan (opsional)</div>
      <div class="zakat-box">
        <input class="default-field zakat-field" placeholder="Masukan total utang/cicilan (jika ada)" type="text">
      </div>
    </div>
	
    <div class="zakat-row">
      <button title="Submit" class="btn zakat-button">Hitung Zakat</button>
    </div>
  </section>
</div>
<?php require ($_SERVER['WATCHIS'].'inc/menu.php')?>
<?php require ($_SERVER['WATCHIS'].'inc/base-bottom.php')?>