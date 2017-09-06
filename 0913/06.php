<?php

//正则表达式使用
$str = "this is w20150913 day, tomorrow is 20150914";
//$reg = "/模式内容/模式修正符";
$reg = "/\d+/";

//preg_match(模式，字符串，结果);//单次匹配
preg_match($reg,$str,$out);  
print_r($out);//Array ( [0] => 20150913 ) 

echo "<br />";

//preg_match_all(模式，字符串，结果); 全局匹配
preg_match_all($reg,$str,$out2);
print_r($out2);//Array ( [0] => Array ( [0] => 20150913 [1] => 20150914 ) )


echo "<br />";
$reg1 = "/(?<=[a-z])\d+/";

preg_match_all($reg1,$str,$res);
print_r($res);
