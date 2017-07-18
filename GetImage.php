<?php
/**
 * Created by PhpStorm.
 * User: gok11139
 * Date: 2017/7/4
 * Time: 17:36
 */

header("Content-Type: text/html;charset=utf-8");

$url = 'http://www.baidu.com';
$str = file_get_contents($url);
var_dump($str);die;
$imgpreg = "/<img (.*?) src=\"(.+?)\".*?>/";

preg_match($imgpreg,$str,$img);
$my_count=count($img)-1;
$imgval = $iim[$mycount];
if(!empty($imgval)){
    echo $imgval;
}else{
    echo 'no';
}