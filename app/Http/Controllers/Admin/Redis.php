<?php

namespace App\Http\Controllers\Admin;

use App\Libraries\DRedis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Redis extends Controller
{

    public function index(){
        $redis = new DRedis();
        $data = $redis->keys('*');
        dd($data);
    }

}
