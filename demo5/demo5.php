<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/14
 * Time: 9:44
 */
require_once 'RedisSessHandler.php';
$rs=new RedisSessHandler();
//设置session存储方式
session_set_save_handler($rs);
session_start();
var_dump($_SESSION);
