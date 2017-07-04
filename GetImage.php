<?php
/**
 * Created by PhpStorm.
 * User: gok11139
 * Date: 2017/7/4
 * Time: 17:36
 */

header("Content-Type: text/html;charset=utf-8");

$str = '<div class="ui-block-a" align="center">
    <a href="online-39.html" rel="external nofollow" ><img class="lazy" width="131" height="177" src="http://files.jb51.net/file_images/game/201702/2017020716154162.jpg"/>
    <h3>2014年</h3></a>
   </div>';

$imgpreg = "/<img (.*?) src=\"(.+?)\".*?>/";
preg_match($imgpreg,$str,$img);
$mycount=count($img)-1;
$imgval = $iim[$mycount];
if(!empty($imgval)){
    echo $imgval;
}else{
    echo 'no';
}