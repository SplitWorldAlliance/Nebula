<?php header("Content-type: text/css; charset: UTF-8;");
$banners = array("banner01.jpg", "banner02.jpg", "banner03.jpg", "banner04.jpg");
$background = $banners[array_rand($banners)];
?>

header {
background-image: url(../_global/logo.png), url(../_global/<?php echo $background; ?>);
background-repeat: no-repeat, no-repeat;
#background-position: top center, center center;
background-position: 50% 5%, 50% 50%;
}

.rainbow {
  background-image: -webkit-gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  background-image: gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  color:transparent;
  -webkit-background-clip: text;
  background-clip: text;
}