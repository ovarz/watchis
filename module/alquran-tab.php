<section class="default-tab alquran-tab">
  <?php 
    $tab_array = array();
    $tab_array[]=array('tab_label'=>"surah", 'tab_link'=>'surah');
    $tab_array[]=array('tab_label'=>"juz", 'tab_link'=>'juz');
    $tab_array[]=array('tab_label'=>"tersimpan", 'tab_link'=>'saved');
    foreach($tab_array as $tab_list){ 
  ?>
    <a aria-label="<?php echo($tab_list['tab_label'])?>" title="<?php echo($tab_list['tab_label'])?>" 
    class="default-tab-link <?php if($channel == $tab_list['tab_label']) { ?>default-tab-curr<?php } ?>" 
    href="alquran-<?php echo($tab_list['tab_link'])?>.php">
      <?php echo($tab_list['tab_label'])?>
    </a>
  <?php } ?>
</section>