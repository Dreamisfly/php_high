<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/7
 * Time: 10:18
 */
namespace App;



class Container
{
    protected static $instance = null;
    //容纳各种对象的数组  最简单的ioc容器
    protected function __construct()
    {

    }
    protected $services = [];

    //编写一个方法 ，向容器中添加容器对象

    /**
     * @param $name 表示服务对象的名称
     * @param $definition 表示服务对象实例
     */
    public function set($name,$definition)
    {
        $this->services[$name] = $definition;
    }
    //获取容器中的服务对象
    public static function getInstance()
    {
        if(null == static::$instance){
            static::$instance = new self();
        }
        return static::$instance;
    }

    public function get($name)
    {
        $definition = $this->services[$name];
        if($definition instanceof \Closure){
            //闭包函数
            $ref = new \ReflectionFunction($definition);
            return $ref->invoke();
        }else{
            return $definition;
        }
    }
    //静态方式向容器内注入对象
    public static function bind($name,$definition)
    {
        //静态方法先获取实例对象
        $obj = self::getInstance();
        //向容器内注入服务对象
        $obj->set($name,$definition);
    }
    public static function make($name)
    {
        //接受服务对象
        $obj = self::getInstance();
        return $obj->get($name);
    }
}