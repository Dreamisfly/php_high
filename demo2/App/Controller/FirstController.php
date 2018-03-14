<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/7
 * Time: 10:42
 */

namespace App\controller;
use App\Container;
use App\Facade\DbFacade;

class FirstController
{
    //单例模式   实例对象唯一
    //从而保证容器中的服务对象可以被共享
    //实现方法 不允许使用new来创建对象
    //把 构造方法 设置为 protected 或 private
    public function index()
    {
        echo 'indexController@index';
        //$db = new Db('127.0.0.1','root','root','test');
        //$this->db->query();
        //先从容器中获取服务对象    1.1静态
//        $ioc = Container::getInstance();
//        $db = $ioc->get('db');
        //1.2
        //$db = Container::make('db');
        //$db->query();
        //1.3使用Facade形式调用
        DbFacade::query();
    }

}