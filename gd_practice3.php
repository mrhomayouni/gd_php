<?php
$with = 800;
$height = 800;
$im = imagecreatetruecolor($with, $height);
for ($i = 0; $i <= 8; $i += 1) {
    for ($j = 0; $j <= 8; $j += 1) {

        if (($i + $j) % 2 == 0 ) {
            $color = imagecolorallocate($im, 0, 0, 0);
        } else {
            $color = imagecolorallocate($im, 255, 255, 255);

        }
        imagefilledrectangle($im, $i * 100, $j * 100, $i * 100 + 100, $j * 100 + 100, $color);
    }
}

imagejpeg($im, "gd_practice3.jpeg");

