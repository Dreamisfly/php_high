<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/7
 * Time: 8:06
 */
//学习反射api

//memory_get_usage()  查看内存

//定义一个反射对象

$ref = new ReflectionFunction('memory_get_usage');

//取得函数的注释

echo $ref->getDocComment();