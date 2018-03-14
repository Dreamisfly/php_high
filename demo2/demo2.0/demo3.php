<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/7
 * Time: 8:37
 */
//类的反射对象
$ref = new ReflectionClass('mysqli');
//获取方法
$mothods = $ref->getMethods();
//输出方法
var_dump($mothods);