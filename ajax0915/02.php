<?php

//给一个文件追加内容
$fp = fopen("./02.txt","a"); //以a追加方式打开02.txt文件，没有回自动创建

fwrite($fp,'0907php'); //给文件追加写入内容

fclose($fp); //关闭文件
