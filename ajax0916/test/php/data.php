<?php
header("content-type:text/html;charset=utf-8");
$link = @mysql_connect('localhost','elephant','hello2017');
mysql_select_db('shop0825',$link);
mysql_query('set names utf8');



//获得总条数
$sql = "select description from devicestatus";
$qry3 = mysql_query($sql);
//$total = mysql_num_rows($qry); //总条数
                    //$rst3 = mysql_fetch_assoc($qry3);
                    //
                    //$hello = implode(',',$rst3);
                    //
                    //$hello = explode('|',$hello);
                    //var_dump($hello);
//echo json_encode($rst3);
$info = array();
while($rst3 = mysql_fetch_assoc($qry3)){
    $hello = implode(',',$rst3);
    $hello = explode('|',$hello);
    $info[] = $hello;

//    $info[] = $rst3; //把多条商品信息变为一个$info的“二维数组”信息
    //该二维数组：一维是索引的、二维是关联类型
}
//var_dump($info);
//把每页的商品信息通过“json”格式提供出来
//header("content-type:text/html;charset=utf-8");
echo json_encode($info);//[{},{},{},{},{},{},{},]



//echo <<<eof
//<style type="text/css">
//    table{width:700px; border:1px solid black; margin:auto; border-collapse:collapse;}
//    td {border:1px solid black;}
//</style>
//<table>
//    <tr style="font-weight:bold;"><td>序号</td><td>名称</td><td></td><td></td><td></td></tr>
//eof;
//while($rst3 = mysql_fetch_assoc($qry3)){
//    //$rst 代表每条记录的一维数组信息
//    echo "<tr>";
//    echo "<td>".$rst3['goods_id']."</td>";
//    echo "<td>".$rst3['goods_name']."</td>";
//    echo "<td>".$rst3['goods_price']."</td>";
//    echo "<td>".$rst3['goods_number']."</td>";
//    echo "<td>".$rst3['goods_weight']."</td>";
//    echo "</tr>";
//}
//echo "<tr><td colspan='5'></td></tr>";
//echo "</table>";
