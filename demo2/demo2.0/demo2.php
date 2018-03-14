<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/7
 * Time: 8:15
 */
/**
 * 计算两个数据的求和
 * @param $a 被加数
 * @param $b 加数
 * @return number  两个数的和
 */
function add($a,$b)
{
    return $a+$b;
}
//定义一个反射对象
$ref = new ReflectionFunction('add');

$file = new SplFileObject('api.txt','w');

$doc = $ref->getDocComment();

$params = $ref->getParameters();
foreach($params as $value){
    //依次处理每一个函数的参数
    var_dump($value);
}

$file->fwrite($doc);
//取得函数的注释

echo $ref->getDocComment();


