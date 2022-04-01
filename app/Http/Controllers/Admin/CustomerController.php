<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    public function index()
    {
        $data=[
            'title' => 'Data Customers',
            'customers' =>Customer::all()
        ];
        return view('admin.customers.index',$data);
    }

}