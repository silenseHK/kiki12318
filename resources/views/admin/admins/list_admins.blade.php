@extends('admin.public.layout')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>添加管理员</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 text-nowrap">
                            <tr class="bg-primary">
                                <th>ID</th>
                                <th>昵称</th>
                                <th>头像</th>
                                <th>手机号</th>
                                <th>邮箱</th>
                                <th>状态</th>
                                <th>上次登录时间</th>
                                <th>操作</th>
                            </tr>
                            @foreach($list as $k => $v)
                            <tr>
                                <td>{{$v->admin_id}}</td>
                                <td>{{$v->nickname}}</td>
                                <td><img style="width:80px;height:80px;" src="{{$v->avatar}}" /></td>
                                <td>{{$v->phone}}</td>
                                <td>{{$v->email}}</td>
                                <td><i style="cursor:pointer" class="fa @if($v->status == 1) fa-check @else fa-close @endif" data-toggle="tooltip" title="" data-original-title=" fa-check"></i> </td>
                                <td>{{date('Y-m-d H:i',$v->last_login_time)}}</td>
                                <td>
                                    <a href="/admin/admins/editAdmins?admin_id={{$v->admin_id}}" class="btn btn-outline-primary m-b-5  m-t-5">修改信息</a>
                                    <a href="#" class="btn btn-outline-primary m-b-5  m-t-5">修改密码</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection()

@section('js')
    <script src="/admin/js/myPost.js"></script>
    <script src="/admin/js/reg.js"></script>
    <script src="/admin/js/functions.js"></script>
@endsection