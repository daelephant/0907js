<?php
header("content-type:text/html;charset=utf-8");
//获得最新的聊天信息
$link = mysql_connect('localhost','root','123456');
mysql_select_db('shop0710', $link);
mysql_query('set names utf8');

$maxID = $_GET['maxID'];

//避免获得重复记录，最新聊天信息的id   要大于已经获得聊天信息的最大id值
$sql = "select * from message where id>'$maxID'";
$qry = mysql_query($sql);

//把获得的全部聊天信息组织为二维数组，并通过json格式提供出来
$info = array();
while($rst = mysql_fetch_assoc($qry)){
    $info[] = $rst;
}

echo json_encode($info);  //[{},{}]
