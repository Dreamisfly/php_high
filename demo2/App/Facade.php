<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/8
 * Time: 14:28
 * Facade  称之为门面  采用静态形式调用非静态的方法
 */

namespace App;


abstract class Facade
{
    ////抽象方法，默认为空，由子类继承
    //作用是获取当前Facade所对应的真实类名
    abstract public static function getFacadeClass();

    /**
     * @param $name  表示待调用的方法名字
     * @param $params 表示传入的参数
     */
    public static function __callStatic($name,$params)
    {
           //1.实例化当前类对象    static关键字表示当前类的名字，self也是当前类的名字  区别在于static实现后期绑定机制
        //static   返回的是子类的名字，self 永远是当前类的名字
        $class = static::getFacadeClass();
        $obj = new $class;
            //2.调用实例化对象
        return $obj->$name($params);

    }


}