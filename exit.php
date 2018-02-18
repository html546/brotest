<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/18
 * Time: 21:30
 */

$conn = mysqli_connect('localhost','root','root') or exit('连接数据库失败');

mysqli_select_db($conn,'db') or die('选择数据库失败!');
$conn ->set_charset('utf8');

$result = $conn->query('select * from table');


if(!$result){
    echo "SQL语句执行失败!";
    exit;
}
