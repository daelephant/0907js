<?php
//反向预查
//① 反向匹配
//匹配的字符串左边“必须”出现4位数字
//$reg = "/(?<=辅助条件|reg模式)[a-z]+/";
$reg = "/(?<=\d{4})[a-z]+/";

$str = "2008beijing";   //Array ( [0] => beijing ) 
$str = "##@@shanghai";  //Array ( )

preg_match($reg,$str,$out);
print_r($out);

echo "<br />";
//② 反向不匹配
//匹配的7位以上的字符串左边“不能出现”4位数字
//$reg = "/(?<!辅助条件|reg模式)[a-z]+/";
$reg1 = "/(?<!\d{4})[a-z]{7,}/";
$str1 = "2008beijing";  //Array ( ) 
//$str1 = "##@@shanghai";//Array ( [0] => shanghai )

preg_match($reg1,$str1,$out1);
print_r($out1);
