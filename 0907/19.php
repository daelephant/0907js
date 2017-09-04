<?php

//函数内部声明全局变量
function f1(){
    //声明一个全局变量(声明同时不能赋值)
    global $subject;
    $subject = "php language";
}

//函数调用后，全局变量起作用
f1();

echo $subject;//php language