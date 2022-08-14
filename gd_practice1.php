<?php
$with = 800;
$height = 800;
$im = imagecreatetruecolor($with, $height);

$color = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));

for ($i = 200; $i > 10; $i -= 10) {
    $color = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
    imagefilledellipse($im, rand(0,800), rand(0,800), rand(0,800), rand(0,800), $color);
    $color = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
    imagefilledrectangle($im,rand(0,800),rand(0,800),rand(0,800),rand(0,800),$color);

}
$img = imagejpeg($im, "gd_practice1.jpeg");
