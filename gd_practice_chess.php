<?php
$image_chess = imagecreatefromjpeg('chess.jpeg');

$w_chess = [];
$w_chess[] = imagecreatefromjpeg("chess1.jpg");
$w_chess[] = imagecreatefromjpeg("chess2.jpg");
$w_chess[] = imagecreatefromjpeg("chess3.jpg");
$w_chess[] = imagecreatefromjpeg("chess4.jpg");
$w_chess[] = imagecreatefromjpeg("chess5.jpg");
$w_chess[] = imagecreatefromjpeg("chess3.jpg");
$w_chess[] = imagecreatefromjpeg("chess2.jpg");
$w_chess[] = imagecreatefromjpeg("chess1.jpg");
$w_chess[] = imagecreatefromjpeg("chess6.jpg");

$b_chess = [];
$b_chess[] = imagecreatefromjpeg("b_chess1.jpg");
$b_chess[] = imagecreatefromjpeg("b_chess2.jpg");
$b_chess[] = imagecreatefromjpeg("b_chess3.jpg");
$b_chess[] = imagecreatefromjpeg("b_chess4.jpg");
$b_chess[] = imagecreatefromjpeg("b_chess5.jpg");
$b_chess[] = imagecreatefromjpeg("b_chess3.jpg");
$b_chess[] = imagecreatefromjpeg("b_chess2.jpg");
$b_chess[] = imagecreatefromjpeg("b_chess1.jpg");
$b_chess[] = imagecreatefromjpeg("b_chess6.jpg");

for ($i = 0; $i <= 8; $i += 1) {
    for ($j = 0; $j <= 8; $j += 1) {
        if ($j == 0) {
            imagecopymerge($image_chess, $w_chess[$i], $i * 100, $j * 100, 0, 0, 100, 100, 100);
        }
        if ($j == 1) {
            imagecopymerge($image_chess, $w_chess[8], $i * 100, $j * 100, 0, 0, 100, 100, 100);
        }
        if ($j == 7) {
            imagecopymerge($image_chess, $b_chess[$i], $i * 100, $j * 100, 0, 0, 100, 100, 100);
        }
        if ($j == 6) {
            imagecopymerge($image_chess, $b_chess[8], $i * 100, $j * 100, 0, 0, 100, 100, 100);
        }

    }
}

imagejpeg($image_chess, "gd_practice_chess.jpeg");

