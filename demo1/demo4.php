<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/6
 * Time: 14:53
 */
////深拷贝
class Date
{
    public $year,$mouth,$day;
}
class Person
{
    public $name;
    public $birthday;
    public function __clone()
    {
        //魔术方法 __clone ,当使用clone关键字赋值Person对象时，会自动调用该方法
        $this->birthday = clone $this->birthday;
    }
}
//定义日期
$b = new Date;
$b->year = 1997;
$b->mouth = 5;
$b->day =30;
//定义Person实例
$p = new Person;
$p->name = '张梦飞';
$p->birthday = $b;
//克隆
$p2 = clone $p;
//修改P的日期
$p->birthday->year = 2018;
echo $p2->birthday->year;

//has-a  存在浅拷贝方法

