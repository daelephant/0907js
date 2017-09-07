<?php
//禁止浏览器缓存当前动态程序文件
header("Cache-Control:no-cache");
header("Pragma:no-cache");
header("Expires:-1");

//给一个文件追加内容
$fp = fopen("./10.txt","a"); //以a追加方式打开02.txt文件，没有回自动创建

fwrite($fp,'beijing2008'); //给文件追加写入内容

fclose($fp); //关闭文件
