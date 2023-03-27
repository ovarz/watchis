<div class="page-title">
  <?php if($page_link != '') { ?>
    <a aria-label="Link_Title" title="Link_Title" class="page-title-back content_center" href="<?php echo $page_link; ?>">
      <?php require ($_SERVER['WATCHIS'].'img/icon/back.svg')?>
    </a>
  <?php } ?>
  <div class="page-title-label"><?php echo $page_label; ?></div>
</div>