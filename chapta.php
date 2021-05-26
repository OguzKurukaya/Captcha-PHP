<?php
session_start();

$chapta = substr(str_shuffle('123456789qwertyuıoplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM'), 0, 6);

$_SESSION['chapta'] = $chapta;

$image = imagecreatetruecolor(170, 40);

$background = imagecolorallocate($image, 0, 0, 0);

$text_color = imagecolorallocate($image, 255, 255, 255);

imagefilledrectangle($image, 0, 0, 0, 0, $background);

$font = dirname(__FILE__) . '/Monda-Regular.ttf';

imagettftext($image, 25, 0, 35, 30, $text_color, $font, $chapta);

imagepng($image);

imagedestroy($image);
