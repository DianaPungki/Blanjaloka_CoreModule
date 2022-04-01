<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data=[
            'title' => 'Data Admin',
            'admin' =>Admin::all()
        ];
        return view('admin.admin.index',$data);
    }
}
