<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Category extends Controller
{

    public function lists(){
        return view('admin.category.list');
    }

    public function add(){
        return view('admin.category.add');
    }


}
