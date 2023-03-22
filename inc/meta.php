<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, follow">				
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="true" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="description" content="WATCHIS">
<link rel="preconnect" href="https://www.ov4rz.com/">
<link rel="dns-prefetch" href="https://www.ov4rz.com/" />
<link rel="preconnect" href="https://ajax.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com"/>
<title>WATCHIS</title>
<link href="img/favicon.ico?<?php echo $anticache; ?>" rel="icon" type="image/ico" />

<link rel="preload" href="fonts/pxiEyp8kv8JHgFVrJJfecg.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/pxiByp8kv8JHgFVrLBT5Z1xlFQ.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="css/rancak.css?<?php echo $anticache; ?>" as="style">
<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">

<style><?php require ($_SERVER['WATCHIS'].'css/font.css')?></style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>');</script>
<script async>
  $("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
    $("script").each(function(){
      var get_script = $(this).attr("rancak-hold");
      $(this).attr('src', get_script);
    })
  });
</script>

<?php if($slideshow == 'yes') { ?>
  <link rel="preload" href="css/tiny-slider.css" as="style">
  <link rel="preload" as="script" href="js/tiny-slider.js">
  <link rel="stylesheet" type="text/css" href="css/tiny-slider.css"/>
  <script src="js/tiny-slider.js"></script>
<?php } ?>

<?php if($page == 'intro') { ?>
  <link rel="preload" href="img/intro.webp" as="image">
  <link rel="preload" href="img/intro.png" as="image">
<?php } ?>

<?php if($page == 'alquran') { ?>
  <link rel="preload" href="css/alquran.css?<?php echo $anticache; ?>" as="style">
  <link rel="stylesheet" type="text/css" href="css/alquran.css?<?php echo $anticache; ?>"/>
<?php } ?>

<?php if($page == 'socmed') { ?>
  <link rel="preload" href="css/socmed.css?<?php echo $anticache; ?>" as="style">
  <link rel="stylesheet" type="text/css" href="css/socmed.css?<?php echo $anticache; ?>"/>
<?php } ?>

<?php if($page == 'login-regis') { ?>
  <link rel="preload" href="css/login-regis.css?<?php echo $anticache; ?>" as="style">
  <link rel="stylesheet" type="text/css" href="css/login-regis.css?<?php echo $anticache; ?>"/>
<?php } ?>

<?php if($page == 'profile') { ?>
  <link rel="preload" href="css/profile.css?<?php echo $anticache; ?>" as="style">
  <link rel="stylesheet" type="text/css" href="css/profile.css?<?php echo $anticache; ?>"/>
<?php } ?>

<link rel="stylesheet" type="text/css" href="css/rancak.css?<?php echo $anticache; ?>"/>
</head>
<body class="theme-<?php echo $theme; ?>">