@extends('admin.public.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>General Elements</h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" >
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Text</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="Typing.....">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="example-email">Email</label>
                            <div class="col-md-9">
                                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" value="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Placeholder</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Text area</label>
                            <div class="col-md-9">
                                <textarea class="form-control" rows="6">Hiiiii.....</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Readonly</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" readonly="" value="Readonly value">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Disabled</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" disabled="" value="Disabled value">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <label class="col-md-3 col-form-label">Number</label>
                            <div class="col-md-9">
                                <input class="form-control" type="number" name="number">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()