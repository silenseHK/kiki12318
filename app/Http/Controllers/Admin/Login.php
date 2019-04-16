<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Admins;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{

    public function index(){
        return view('admin.login.index');
    }

    public function doLogin(){
        #验证
        $this->validate(request(),[
            'account' => 'required|account',
            'password' => 'required|min:6'
        ]);

        $account = strip_tags(addslashes(trim(request('account'))));
        $password = strip_tags(addslashes(trim(request('password'))));
//        DB::enableQueryLog();
        #逻辑
        $info = Admins::where(['email'=>$account])->orWhere(['phone'=>$account])->select('admin_id','phone','email','password','avatar','status','nickname')->first()->toArray();

//        dd($info);
//        dd(DB::getQueryLog());
        if(!$info)
            returnAjax(1,'账号或密码错误');
        #判断密码
        if(!Hash::check($password,$info['password']))
            returnAjax(1,'账号或者密码错误');
        #添加session
        request()->session()->put('admin_info',$info);

        request()->session()->save();

        #返回
        returnAjax(0,'登陆成功');
    }

    public function logout(){
        #清除session
        request()->session()->forget('admin_info');
        request()->session()->save();
        #返回
        returnAjax(0,'退出登录成功');
    }

}
