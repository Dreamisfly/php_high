<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/13
 * Time: 15:11
 */
//建立memcache连接
function dbquery()
{
    echo '查询数据库';
    $arr=[];
    for ($i = 1;$i<100000;$i++){
        $arr[]['name'] = 't'.$i;
        $arr[]['age'] = $i;
    }
    return $arr;
}

$m = new Memcache();
//
$m->connect('127.0.0.1',11211);
//读取数据
echo microtime().'</br>';
//准备sql语句
$sql = 'select * from posts';
$key = md5($sql);
$data = $m->get($key);
if($data == false){
    //memcache  没有指定数据 //从数据库中获取
    $data = dbquery();
    //下次访问从memcache中获取
    $m->set($key,$data);
}
echo microtime().'</br>';
//关闭连接
var_dump($data);
$m->close();