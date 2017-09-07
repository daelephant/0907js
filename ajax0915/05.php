<?php

//对服务器端请求的同时传递get参数信息
$subject = "javascript&php=html";//有特殊字符
$subject = urlencode($subject);//需要对get传递特殊字符进行urlencode编码

echo "<a href='./04.php?kemu=$subject'>itcast</a>";
