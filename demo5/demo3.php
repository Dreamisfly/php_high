
<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/14
 * Time: 9:13
 */
//使用ini_set配置项
ini_set('session.save_handler','redis');
ini_set('session.save_path','tcp://127.0.0.1:6379');
//开启session
session_start();
//写入session数据
$_SESSION['sess_name']='test';