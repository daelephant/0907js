<?php
header("content-type:text/html;charset=utf-8");
//传统方式实现分页效果
$link = @mysql_connect('localhost','elephant','hello2017');
mysql_select_db('shop0825',$link);
mysql_query('set names utf8');

//实现数据分页
//① 引入分页的类文件
include("./page.class.php");

//② 获得商品的总条数
$sql = "select * from sw_goods order by goods_id desc";
$qry = mysql_query($sql);
$total = mysql_num_rows($qry); //总条数
$per = 7;//每页显示7条数据

//③ 实例化分页类对象
$page_obj = new Page($total, $per);

//④ 拼装一条sql语句获得每页信息
$sql3 = "select goods_id i,goods_name n,goods_price p,goods_number u,goods_weight w from sw_goods ".$page_obj->limit;
$qry3 = mysql_query($sql3);

//⑤ 获得页码列表
$pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
$info = array();
//echo <<<eof
//<style type="text/css">
//    table{width:700px; border:1px solid black; margin:auto; border-collapse:collapse;}
//    td {border:1px solid black;}
//</style>
//<table>
//    <tr style="font-weight:bold;"><td>序号</td><td>名称</td><td>价格</td><td>数量</td><td>重量</td></tr>
//eof;
while($rst3 = mysql_fetch_assoc($qry3)){
    $info[] = $rst3;//把多条商品信息变为一个$info的二维数组信息
    //该二维数组:一维是索引。二维是关联类型

}
$info[] = $pagelist;
echo json_encode($info);
//echo "<tr><td colspan='5'>$pagelist</td></tr>";
//echo "</table>";
