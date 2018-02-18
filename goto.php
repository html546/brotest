<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/18
 * Time: 22:06
 */

for ($i = 0,$j = 50;$i<100;$i++){
    while ($j--){
        if($j == 17){
            goto end;
        }else{
            echo "变量i = {$i},变量j = {$j}<br/>";
        }
    }
}

echo "i = $i";
end :
