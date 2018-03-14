<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/14
 * Time: 8:50
 */
//使用redis实现基本操作
//实例化redis对象
$redis = new Redis();
//建立redis链接
$redis->connect('127.0.0.1',6379);
//添加数据
$redis->set('redis-name','test-value');
//关闭链接
$redis->close();
