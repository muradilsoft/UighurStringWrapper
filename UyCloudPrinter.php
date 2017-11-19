<?php
/**
 * Created by PhpStorm.
 * User: mirzatablat
 * Date: 2017/11/18
 * Time: 下午3:44
 */
namespace Muradilsoft;
class UyCloudPrinter
{
    private $wrapper;
    private $fontFile;
    public function __construct()
    {
        $this->wrapper  = new UyStringWrapper();
    }

    public function wrapLongText($text,$fontSize=13)
    {
        header('content-type:image/png');
        $txt = $this->wrapper->getStringForGD($text);
        $img = imagecreate(500,1000);
        $white = imagecolorallocate($img,255,255,255);
        $black = imagecolorallocate($img,0,0,0);
        imagefttext($img,$fontSize,0,20,20,$black,$this->fontFile,$txt);
        imagepng($img);
    }/**
 * @param mixed $fontFile
 * @return UyCloudPrinter
 */public function setFontFile($fontFile)
{
    $this->fontFile = $fontFile;
    return $this;
}


}