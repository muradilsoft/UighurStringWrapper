<?php
/**
 * Created by PhpStorm.
 * User: mirzatablat
 * Date: 2017/11/18
 * Time: 下午3:58
 */
include 'UyStringWrapper.php';
include 'UyCloudPrinter.php';

$printer = new Muradilsoft\UyCloudPrinter();
$printer->setFontFile("tortom.ttf")->wrapLongText("سىناق نۇسخىدىكى خەت يېزىش پروگراممىسى پۈتتى،داۋاملىق تۈزىتىمىز. قۇر يرىش ئقتىدارى قوشۇلىدۇ.");