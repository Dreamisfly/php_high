<?php

namespace app\index\controller;

use think\Controller;
use think\facade\Session;
use think\facade\Cache;

class IndexController extends Controller
{
    //
    public function index()
    {
        echo 'helloworld';
        Session::set('tp5_name','tp5');
    }
    public function test()
    {
        $users = Cache::get('users');
        if(!$users){
            //如果缓存中没有数据，从数据库中获取
            $users = \think\Db::table('users')->select();
            //把数据库中的数据写入缓存中
            Cache::set('users',$users);

        }
        dump($users);
    }
}
