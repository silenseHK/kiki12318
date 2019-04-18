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
        foreach($list as& $v)
            $v->avatar = asset($v->avatar);
        return view('admin.admins.list_admins',compact('list'));
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

    /**
     * 修改管理员基本信息
     */
    public function editAdmins(){
        #验证
        $this->validate(request(),[
            'admin_id' => 'required|integer|min:1'
        ]);

        $admin_id = (int)request('admin_id',0);
        #获取信息
        $info = Admin::select('admin_id','nickname','avatar','phone','email')->find($admin_id);

        return view('admin.admins.edit_admins',compact('info'));

    }

}
