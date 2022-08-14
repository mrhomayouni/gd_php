<?php
$with = 800;
$height = 800;
$im = imagecreatetruecolor($with, $height);

for ($i = 0; $i < 200; $i ++) {
    $color = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
    imageline($im,0, $i*10, $i*10, $i*10, $color);
}
imagejpeg($im, "gd_practice2.jpeg");

