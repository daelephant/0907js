<?php
/**
 * Created by PhpStorm.
 * User: cyx
 * Date: 2017-09-15
 * Time: 14:11
 */
header("content-type:text/html;charset=utf-8;");
//收集发表聊天信息，并存储
//获得最新聊天信息
//var_dump($_POST);
$link = @mysql_connect('localhost','elephant','hello2017');
mysql_select_db('shop0825',$link);
mysql_query('set names utf8');

//接受表单信息
$color = $_POST['color'];
$receiver = $_POST['receiver'];
$biaoqing = $_POST['biaoqing'];
$msg = $_POST['msg'];
//拼装sql
$sql = "insert into message VALUES (null,'$msg','admin','$receiver','$color','$biaoqing',now())";

//$sql = "insert into message values (null,'$msg','admin','$receiver','$color','$biaoqing',now())";
$qry = mysql_query($sql);
if($qry){
    echo "发表聊天成功";
}else{
    echo "发表失败";
}
