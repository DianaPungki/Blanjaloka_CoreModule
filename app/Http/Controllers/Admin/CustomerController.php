<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Customers extends Controller
{
    public function index()
    {
        $data=[
            'title' => 'Data Customers'
        ];
        return view('admin/customers/index',$data);
    }

    # get datatables customers
    // public function customersjson(){
    //     return DataTables::of(Users::orderByDesc('id_users')->get())
    //     ->addIndexColumn()
    //     ->editColumn('created_at', function(Users $users){
    //         return date('d-M-Y', strtotime($users->created_at));
    //     })
    //     ->editColumn('updated_at', function(Users $users){
    //         return date('d-M-Y', strtotime($users->updated_at));
    //     })
    //     ->addColumn('status', function(Users $users){
    //         return $users->status == 'on' ? "<i class='text-primary'>Active</i>" : "<i class='text-danger'>Not-active</i>";
    //     })
    //     ->addColumn('action', function(Users $users){
    //         return '
    //             <a href='.url("admin/users/customers/edit/$users->id_users").' class="edit" data-toggle="tooltip" title="Edit" data-placement="top"><span class="badge badge-success"><i class="fas fa-edit"></i></span></a>
    //             <a href="#" data-id='.$users->id_users.' class="hapus_customers" data-toggle="tooltip" title="Hapus" data-placement="top"><span class="badge badge-danger"><i class="fas fa-trash"></i></span></a>
    //         ';
    //     })
    //     ->rawColumns(['status', 'action'])
    //     ->make(true);
    // }

}