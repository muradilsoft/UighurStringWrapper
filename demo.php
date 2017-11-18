<?php
header("content-type:image/gif");
include "UyStringWrapper.php";
$spWrapper= new Muradilsoft\UyStringWrapper();
$temp= $spWrapper->getStringForGD("مۇرادىلجان");
$pic=imagecreate(500,40);
$coloe1=imagecolorallocate($pic,255,255,255);
$color2=imagecolorallocate($pic,0,0,0);
$font="./tortom.ttf";
imagefttext($pic,20,0,10,30,$color2,$font,$temp);
imagegif($pic);
imagedestroy($pic);
?>