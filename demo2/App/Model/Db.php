<?php
/**
 * Created by PhpStorm.
 * User: zhangmengfei
 * Date: 2018/3/7
 * Time: 9:39
 */
namespace App\Model;
class Db implements InterfaceDb
{
    public function __construct()
    {
        echo '<p>db-construct</p>';
    }
    public function query()
    {
        echo '<p>db-query</p>';
    }
}