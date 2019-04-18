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
                    <form class="form-horizontal" id="my_form" action="/admin/admins/editAdmins">

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="example-email">邮箱</label>
                            <div class="col-md-9">
                                <input type="email" id="example-email" disabled class="form-control dis-empty" value="{{$info->email}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="example-email">手机号</label>
                            <div class="col-md-9">
                                <input type="text" disabled class="form-control dis-empty" value="{{$info->phone}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">账号名</label>
                            <div class="col-md-9">
                                <input type="text" name="nickname" class="form-control dis-empty" value="{{$info->nickname}}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">管理员头像</label>
                            <div class="col-lg-9">
                                <div class="form-group files color  mb-lg-0">
                                    <input type="file" name="avatar" class="form-control1 dis-empty" multiple="" value="{{$info->avatar}}">
                                </div>
                            </div>
                        </div>

                        <input name="admin_id" type="hidden" value="{{$info->admin_id}}" />
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
    <script src="/admin/js/edit_admins.js"></script>
@endsection