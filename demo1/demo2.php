<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/6
 * Time: 14:27
 */
//获取当前消耗内存数
class Person
{
    public $name;
    public $age;
    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
}
$start = memory_get_usage();
$p = new Person ('zhangsan',18);
//$p2 = $p;  //引用式赋值
//当修改某一个赋值时
$p2 = clone $p;  //克隆式赋值
$after = memory_get_usage();
echo $after-$start;    //结果 112


$p->name = 'lisi';
echo $p2->name;        //结果  zhangsan
//改一个另一个也改动


