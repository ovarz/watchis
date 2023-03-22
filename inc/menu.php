<menu>
  <?php 
    $menu_array = array();
    $menu_array[]=array(
      'menu_name'=>'Beranda',
      'menu_icon'=>'home',
      'menu_link'=>'home'
    );
    $menu_array[]=array(
      'menu_name'=>'Sosial Media',
      'menu_icon'=>'socmed',
      'menu_link'=>'socmed'
    );
    $menu_array[]=array(
      'menu_name'=>'Video',
      'menu_icon'=>'video',
      'menu_link'=>'home'
    );
    $menu_array[]=array(
      'menu_name'=>'Messenger',
      'menu_icon'=>'messenger',
      'menu_link'=>'home'
    );
	if($login == 'no') {
      $menu_array[]=array(
        'menu_name'=>'Login',
        'menu_icon'=>'login',
        'menu_link'=>'login'
      );
	}
	if($login == 'yes') {
      $menu_array[]=array(
        'menu_name'=>'Profile',
        'menu_icon'=>'profile',
        'menu_link'=>'profile'
      );
	}
    foreach($menu_array as $menu_list){ 
  ?>
    <a aria-label="<?php echo($menu_list['menu_name'])?>" title="<?php echo($menu_list['menu_name'])?>" 
	class="menu-link <?php if($channel == $menu_list['menu_icon']) { ?>menu-curr<?php } ?> content_center" 
	href="<?php echo($menu_list['menu_link'])?>.php">
	  <span>
        <div class="menu-icon"><?php require ($_SERVER['WATCHIS'].'img/icon/menu-'.$menu_list['menu_icon'].'.svg')?></div>
        <div class="menu-label"><?php echo($menu_list['menu_name'])?></div>
	  </span>
    </a>
  <?php } ?>
</menu>