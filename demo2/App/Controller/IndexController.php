<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/7
 * Time: 9:27
 */
namespace App\controller;
use App\Container;
use App\Model\InterfaceDb;
class IndexController
{
    //protected $db;
    protected $ioc;
// 1.   public function __construct(InterfaceDb $db)
    public function __construct(Container $ioc)
    {
       $this->ioc = $ioc;
    }

    public function index()
    {
        echo 'indexController@index';
        //$db = new Db('127.0.0.1','root','root','test');
        //$this->db->query();
        //先从容器中获取服务对象
        $db = $this->ioc->get('db');
        $db->query();
    }

}