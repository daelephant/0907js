<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17.9.14
 * Time: 23:44
 */
//获取最新的聊天信息
header("content-type:text/html;charset=utf-8");
$link = mysql_connect('localhost','elephant','hello2017');
mysql_select_db('shop0825',$link);
mysql_query('set names utf8');

$maxID = $_GET['maxID'];

//避免获得重复的记录，最新的聊天信息的id，要大于已经获得的聊天信息的最大id信息
$sql = "select * from message WHERE id>'$maxID'";
$qry = mysql_query($sql);
//把获得的全部聊天信息组织为二维数组，并通过json格式提供出来
$info = array();
while($rst = mysql_fetch_assoc($qry)){
    $info[] = $rst;
    //[{"id":"1","msg":"\u4eca\u5929\u5929\u6c14\u597d","sender":"jack","receiver":"mary","color":"#800080","biaoqing":"\u542b\u60c5\u8109\u8109","add_time":"2017-09-15 06:11:05"},{"id":"2","msg":"\u55ef\uff0c\u611f\u89c9\u4e0d\u9519","sender":"mary","receiver":"jack","color":"#809080","biaoqing":"\u9ad8\u5174\u5730","add_time":"2017-09-15 06:13:06"}]
    //遍历jn_info
//    print_r($rst);
//    echo "<hr />";
}
echo json_encode($info);//[{},{}]
//var_dump(json_encode($info));//string