<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/13
 * Time: 15:03
 */
//创建memcache对象
$m = new Memcache();
//创建memcache连接
$m->connect('127.0.0.1',11211);
//向memcache中写入数据
$m->set('name','test');
//获取数据
echo $m->get('name');
//关闭连接
$m->close();
