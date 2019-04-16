<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Common extends Controller
{
    /**
     * 上传图片
     */
    public function uploadPic(){
//        dd(request()->file('file'));
        $path = request()->file('file')->store(request('dir','common'));
        returnAjax(0,'success', ['path'=>$path,'url'=>asset("storage/{$path}")]);
    }

    /**
     * 错误页
     */
    public function err(){
        return view('admin.public.err');
    }
}
