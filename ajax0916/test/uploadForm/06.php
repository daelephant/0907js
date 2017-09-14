<?php
//上传大文件需要去php.ini文件修改：
//post表单数据最大限制：  post_max_size = 220M
//附件上传数据最大限制：   upload_max_filesize = 200M（注意post表单最大限制要大于附件最大限制，两者之差是除附件之外的其他表单数据大小）

//收集到：普通表单域信息 + 上传文件域信息
//print_r($_POST);
//echo "files:";
//print_r($_FILES);exit;

if($_FILES['userpic']['error']>0){
    exit('附件有错误');
}

//附件上传逻辑
$path = "./upload/";
$name = date("YmdHis").'-'.mt_rand(1000,9999);//附件的名字
$name_arr = explode('.',$_FILES['userpic']['name']);//获得照片原名称和后缀的数组{[picname][png]}
$ext = ".".$name_arr[count($name_arr)-1];//获得附件后缀 （.png）

$pathname = $path.$name.$ext;//附件真实路径名(这里的点是拼接)

if(move_uploaded_file($_FILES['userpic']['tmp_name'],$pathname)){//move_uploaded_file(附件临时路径名，真实附件路径名);
    echo "success";
}else{
    echo "fail";
}

//var_dump($pathname);


////收集到：普通表单域信息 +  上传文件域信息
//echo "post:";
//print_r($_POST);
//echo "file:";
//print_r($_FILES);
//if($_FILES['userpic']['error']>0){
//    exit('附件有错误');
//}
////附件上传逻辑
//$path = "./upload/";
//$name = date("YmdHis").'-'.mt_rand(1000,9999);//附件的名字
//$name_arr =  explode('.',$_FILES['userpic']['name']);
//$ext = ".".$name_arr[count($name_arr)-1]; //附件的后缀
//
//$pathname = $path.$name.$ext;//附件真实路径名
//
//if(move_uploaded_file($_FILES['userpic']['tmp_name'],$pathname)){
//    echo "success";
//}else{
//    echo "fail";
//}
