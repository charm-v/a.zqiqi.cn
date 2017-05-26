<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('admin.cate.index');
    }

    public function add(){
        return view('admin.cate.add');
    }

    public function edit(){
        return view('admin.cate.edit');
    }
}
