<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/6
 * Time: 16:17
 */
//使用SPL中提供的文件操作
$file = new SplFileObject('demo6.php');
foreach ($file as $line){
    echo $line,"\n";
}