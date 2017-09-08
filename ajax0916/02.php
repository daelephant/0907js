<?php
//接收json信息，并反编码处理
//json_decode(json字符串,true/false);
$weather = array('city'=>'beijing','wind'=>'south','temp'=>'26du');
$jn_weather = json_encode($weather);

$fan_weather = json_decode($jn_weather,true);//返回array数组
var_dump($fan_weather);//array(3) { ["city"]=> string(7) "beijing" ["wind"]=> string(5) "south" ["temp"]=> string(4) "26du" } 
echo "<br />";

$fan_weather2 = json_decode($jn_weather,false);//返回object对象
var_dump($fan_weather2);//object(stdClass)#1 (3) { ["city"]=> string(7) "beijing" ["wind"]=> string(5) "south" ["temp"]=> string(4) "26du" }


