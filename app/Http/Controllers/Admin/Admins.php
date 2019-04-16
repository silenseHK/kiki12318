<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Models\Admins as Admin;

class Admins extends Controller
{
    public function adminsList(){
        $list = Admin::where(['admin_id'=>1])->get();
        dd($list);
    }

    public function adminsAddPre(){
        return view('admin.admins.add_admins');
    }

    public function adminsAddDo(){

        #验证
        $this->validate(request(),[
            'nickname' => 'required|max:20',
            'email' => 'required|email|unique:admins,email',
            'phone' => 'required|phone|unique:admins,phone',
            'password' => 'required|max:20|min:6|confirmed',
            'status' => 'required|integer',
            'avatar' => 'required|string'
        ]);

        #逻辑代码
        $password = Hash::make(strip_tags(addslashes(request('password'))));
        $data = [
            'nickname' => strip_tags(addslashes(request('nickname',''))),
            'email' => strip_tags(addslashes(request('email',''))),
            'phone' => strip_tags(addslashes(request('phone',''))),
            'password' => $password,
            'status' => intval(request('status')),
            'avatar' => strip_tags(addslashes(request('avatar')))
        ];

        $res = Admin::create($data);

        if(!$res)
            returnAjax(1,'添加失败');
        returnAjax(0,'添加成功');

    }

}
