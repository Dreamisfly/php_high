<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/8
 * Time: 14:45
 */
namespace App\Facade;
use App\Facade;

class DbFacade extends Facade
{
    public static function getFacadeClass()
    {
        // TODO: Implement getFacadeClass() method.
        return 'App\Model\Db';
    }
}