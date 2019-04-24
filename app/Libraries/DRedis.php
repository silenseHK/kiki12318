<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/22
 * Time: 17:42
 */

namespace App\Libraries;


class DRedis extends \Redis
{

    public function __construct()
    {
        try{
            $connect = $this->connect(env('REDIS_HOST','127.0.0.1'),env('REDIS_PORT',6379),1);
            if(!$connect)
                throw new \Exception('redis连接失败');
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

}