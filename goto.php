<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/18
 * Time: 22:06
 */

$var = 2;
switch ($var){
    case 1:
        goto one;
        echo "one";
    case 2:
        goto two;
        echo "two";
    case 3:
        goto three;
        echo "three";
}

one:
    echo "如果变量的值是1，将跳转到此处执行!";
    exit;
two:
    echo "如果变量的值是2，将跳转到此处执行!";
    exit;
three:
    echo "如果变量的值是3,将跳转到此处执行!";
    exit;