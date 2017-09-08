<?php

//对一个json的字符串进行反编码操作
//json字符串要求是"单引号"定义
//$jn_city = "{'shandong':'jinan','zhejiang':'hangzhou','liaoning':'shenyang'}";
$jn_city = '{"shandong":"jinan","zhejiang":"hangzhou","liaoning":"shenyang"}';
$fan_city = json_decode($jn_city,true);
var_dump($fan_city);//array(3) { ["shandong"]=> string(5) "jinan" ["zhejiang"]=> string(8) "hangzhou" ["liaoning"]=> string(8) "shenyang" } 


