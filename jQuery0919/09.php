<?php
//绘制一个图片

//创建一个画板
$im = imagecreatetruecolor('400','300');

//创建一个绿色画笔
$green = imagecolorallocate($im,0,128,0);

//给画板填充颜色
imagefill($im,10,10,$green);

//暂停4s
sleep(4);

//输出图片
header("content-type:image/jpeg");
imagejpeg($im);

//销毁图片
imagedestroy($im);
