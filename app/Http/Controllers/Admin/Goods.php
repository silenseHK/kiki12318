<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Goods extends Controller
{
    //
    public function index(){
        return view('admin.goods.index');
    }
}
