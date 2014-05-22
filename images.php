<?php
session_start(); 
if($_REQUEST['imagename'])
{
$_SESSION['name'] = $_REQUEST['imagename'];
   $name = $_SESSION['name'];
 header("Content-Type: image/png");
  $im = @imagecreate(400,400);
 $background_color = imagecolorallocate($im, 0xFF, 0xCC, 0xDD);
   $text_color = imagecolorallocate($im, 133, 14, 91);
   imagestring($im, 5, 300, 300,  "$name", $text_color);
   imagepng($im);
   imagedestroy($im);
}

else if($_SESSION['name']){
   $name = $_SESSION['name'];
   header("Content-Type: image/png");
  $im = @imagecreate(800,600);
 $background_color = imagecolorallocate($im, 0xFF, 0xCC, 0xDD);
   $text_color = imagecolorallocate($im, 133, 14, 91);
   imagestring($im, 5, 300, 300,  "$name", $text_color);
   imagepng($im);
   imagedestroy($im);
   
}

else echo "no image created";
 


?>

