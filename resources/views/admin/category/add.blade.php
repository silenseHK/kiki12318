@extends('admin.public.layout')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>添加分类</h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" id="my_form" action="/admin/category/add">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">分类名</label>
                            <div class="col-md-9">
                                <input type="text" name="title" class="form-control dis-empty" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">分类等级</label>
                            <div class="col-md-3">
                                <select name="level" class="form-control" onchange="changeLevel.call(this)">
                                    <option value="1">一级分类</option>
                                    <option value="2">二级分类</option>
                                    <option value="3">三级分类</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row" id="cate-wrap">
                            <label class="col-md-3 col-form-label">上级分类</label>
                            <div class="col-md-3" id="cate1">
                                <select name="pid" class="form-control">
                                    <option value>一级分类</option>
                                </select>
                            </div>
                            <div class="col-md-3" id="cate2">
                                <select name="pid" class="form-control">
                                    <option value>二级分类</option>
                                </select>
                            </div>
                            <div class="col-md-3" id="cate3">
                                <select name="pid" class="form-control">
                                    <option value>叁级分类</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">分类图标</label>
                            <div class="col-lg-2" style="position:relative;">
                                <img style="width:100px;height:100px;" data-src="/admin/images/upload.png" src="/admin/images/upload.png" />
                                <input style="position:absolute;left:0;top:0;width:100%;height:100%;z-index:1000;cursor:pointer;opacity: 0;" type="file" data-ipt="icon" onchange="uploadImg.call(this)" />
                            </div>
                            <input type="hidden" class="dis-empty" name="icon" />
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
    <script src="/admin/js/add_category.js"></script>
@endsection