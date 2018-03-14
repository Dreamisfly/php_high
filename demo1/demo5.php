<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/6
 * Time: 15:15
 */
//讨论继承和多态
//创建接口
interface  Output
{
    public function print();
}
//实现这个接口两个方法
class HtmlOutput implements Output
{
    public function print()
    {
        echo 'html实现接口print方法';
    }
}
class JsonOurput implements Output
{
    public function print()
    {
        echo 'json实现接口print方法';
    }
}

//测试类
class Test
{
    public function test1(Output $output)
    {
        $output->print();
    }
}

//使用
$h = new HtmlOutput();
$j = new JsonOurput();
$t = new Test();

//多态
$t->test1($h);
$t->test1($j);
//查看类使用的接口
var_dump(class_implements($h));
