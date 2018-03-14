<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/7
 * Time: 8:51
 */
require_once 'vendor/autoload.php';
use App\Model\Db;
use App\Container;

//index.php?controller=index&action=test
//IndexController @ test()
//引入自动加载机制

//分派请求
$controller = $_GET['controller'] ?? 'index';
$controller = ucfirst($controller).'Controller';
$action = $_GET['action'] ?? 'index';


//指定控制器目录以及命名空间规则
//控制器位于 App/Controller/IndexController.php
$class = 'App\\Controller\\' . $controller;
////创建ioc容器对象
//$ioc = new Container();
////准备构造参数


//静态方法获取
//$ioc = Container::getInstance();
////$db= new Db('127.0.0.1','root','root','test');
//
////若控制器中要使用多种模型类，则需要向控制器中传递多个构造参数，不利于代码的管理
////向容器中添加服务对象
//$ioc->set('db',function(){
//    return new Db('127.0.0.1','root','root','test');
//});
//向ioc 容器中注入服务对象
Container::bind('db',function(){
    return new Db('127.0.0.1','root','root','test');
});

//dispatch请求
//$c = new $class($db);
$c= new $class();
$c->$action();

//。。。indexcontroller 的方法  但是影响内存。
// $ioc = new Container();
// 准备构造参数
// $db = new Db('127.0.0.1', 'root', 'root', 'test');
// 向容器中添加服务对象
// $ioc->set('db', $db);
// $c = new $class($ioc);
// $c->action();

