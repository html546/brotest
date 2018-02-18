<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/18
 * Time: 20:36
 */

/*for ($i = 1;$i<=10;$i++){
    echo "这是第<b>$i</b>次循环执行输出的结果<br/>";
}*/
/**
 * 每个表达式多个语句
 */
/*for ($i = 1,$j = 4,$k = 10;$i<=10;$i++,$j+=5,$k+=10){
    echo "\$i = $i,\$j = $j,\$k = $k <br/>";
}*/

/**
 * 九九乘法表
 */
/*for ($i = 1;$i <= 9;$i++){
    for ($j = 1;$j <= $i;$j++){
        echo "$j * $i =" .$j*$i ."&nbsp;&nbsp;";
    }
    echo "<br/>";
}*/

/**
 * 反向输出九九乘法表
 */
for ($i = 9;$i>=1;$i--){
    for ($j = $i;$j >= 1;$j--){
        echo "$j * $i = ".$j*$i."&nbsp;&nbsp;";
    }
    echo "<br/>";
}