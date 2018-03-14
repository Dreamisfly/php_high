<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/13
 * Time: 15:43
 */
//设置session文件的保存目录
//session默认情况以文件存储

//session_save_path('./sess');

//软配置
ini_set('session.save_handler','memcache');
ini_set('session.save_path','tcp://127.0.0.1:11211');

//开启session
session_start();
//设置session数据
$_SESSION['name'] = 'test';