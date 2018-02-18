<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/18
 * Time: 22:06
 */

$i = 1;

st:

    echo "第{$i}次循环<br/>";
    if($i++ == 10)
        goto end;

    goto st;

    end:
    echo "语句结束.";
