<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/14
 * Time: 8:44
 */
//使用反射api查看redis类的方法
$ref = new ReflectionClass('Redis');
$methods = $ref->getMethods();
//查看redis中到底使用了哪些方法
var_dump($methods);