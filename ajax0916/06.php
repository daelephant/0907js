<?php
//收集到：普通表单域信息 +  上传文件域信息
echo "post:";
print_r($_POST);
echo "file:";
print_r($_FILES);
if($_FILES['userpic']['error']>0){
    exit('附件有错误');
}
//附件上传逻辑
$path = "./upload/";
$name = date("YmdHis").'-'.mt_rand(1000,9999);//附件的名字
$name_arr =  explode('.',$_FILES['userpic']['name']);
$ext = ".".$name_arr[count($name_arr)-1]; //附件的后缀

$pathname = $path.$name.$ext;//附件真实路径名

if(move_uploaded_file($_FILES['userpic']['tmp_name'],$pathname)){
    echo "success";
}else{
    echo "fail";
}
