<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/14
 * Time: 9:44
 */
class RedisSessHandler implements SessionHandlerInterface
{
    protected $redis=null;
    //session_start()被调用时自动执行的回调方法
    public function open($save_path, $name)
    {
        $this->redis=new Redis;
        $this->redis->connect('127.0.0.1',6379);
        return true;
    }
    //写入session数据时自动回调方法
    //$_SESSION['name']='test'.只是写入到内存中，并没有写入到session存储中。
    public function write($session_id, $session_data)
    {
        $this->redis->set($session_id,$session_data);
        return true;
    }
    //读取session数据（session_start())时自动调用
    public function read($session_id)
    {

        return $this->redis->get($session_id);
    }
    public function close()
    {
        return true;
    }
    public function destroy($session_id)
    {
        return true;
    }
    public function gc($maxlifetime)
    {
        $this->redis->close();
        $this->redis=null;
        return true;
    }

}
