<?php
//生成json信息
//json_encode(数组/对象);

//关联数组-->json信息
$weather = array('city'=>'beijing','wind'=>'south','temp'=>'26du');
$jn_weather = json_encode($weather);
echo $jn_weather;//{"city":"beijing","wind":"south","temp":"26du"}
echo "<br />";


//索引数组-->array数组信息
$color = array('red','blue','green');
$jn_color = json_encode($color);
echo $jn_color;//["red","blue","green"]
echo "<br />";

//索引关联数组-->json对象
$weather2 = array('city'=>'beijing','wind'=>'south','temp'=>'26du','qinglang','daxiang');
$jn_weather2 = json_encode($weather2);
echo $jn_weather2;//{"city":"beijing","wind":"south","temp":"26du","0":"qinglang"}
echo "<br />";

//对象-->json信息
//只给考虑成员属性
class Person{
    public $name = "tom";
    public $age = 20;
    public function run(){
        echo "tom is running";
    }
}
$per = new Person();
$jn_per = json_encode($per);
echo $jn_per;//{"name":"tom","age":20}