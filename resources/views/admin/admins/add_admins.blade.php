@extends('admin.public.layout')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>添加管理员</h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" id="my_form" action="/admin/admins/add">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">账号名</label>
                            <div class="col-md-9">
                                <input type="text" name="nickname" class="form-control dis-empty" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="example-email">邮箱</label>
                            <div class="col-md-9">
                                <input type="email" id="example-email" name="email" class="form-control dis-empty" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="example-email">手机号</label>
                            <div class="col-md-9">
                                <input type="text" name="phone" class="form-control dis-empty" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">登陆密码</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control dis-empty" name="password" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">确认密码</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control dis-empty" name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">管理员头像</label>
                            <div class="col-lg-2" style="position:relative;">
                                <img style="width:100px;height:100px;" data-src="/admin/images/upload.png" src="/admin/images/upload.png" />
                                <input style="position:absolute;left:0;top:0;width:100%;height:100%;z-index:1000;cursor:pointer;opacity: 0;" type="file" data-ipt="avatar" onchange="uploadImg.call(this)" />
                            </div>
                            <input type="hidden" name="avatar" />
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">状态</label>
                            <div class="col-lg-9">
                                <label class="col-lg-2">
                                    <input type="radio" value="1" name="status" class="minimal" checked>正常
                                </label>
                                <label class="col-lg-2">
                                    <input type="radio" value="0" name="status" class="minimal">冻结
                                </label>
                            </div>
                        </div>
                        <a href="javascript:;" onclick="myFormSubmit()" class="btn btn-lg btn-primary m-b-5 m-t-5">提交</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection()

@section('js')
    <script src="/admin/js/myPost.js"></script>
    <script src="/admin/js/reg.js"></script>
    <script src="/admin/js/functions.js"></script>
    <script src="/admin/js/add_admins.js"></script>
@endsection