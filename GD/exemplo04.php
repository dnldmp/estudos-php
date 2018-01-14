<?php

header("Content-Type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_heigth = 256;

list($old_width, $old_heigth) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_heigth);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_heigth, $old_width, $old_heigth);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

?>