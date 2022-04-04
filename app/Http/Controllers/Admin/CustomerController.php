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
        return view('admin.users.customers.index',$data);
    }

    public function store(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'email_customer' => $request->input('email_customer'),
            'nama_customer' => $request->input('nama_customer'),
            'alamat_customer' => $request->input('alamat_customer'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'password' => password_hash($request->input('password'),PASSWORD_DEFAULT)
        ];

        Customer::create($data);
        return response()->json([
            'pesan' => 'Berhasil Menambah Data Customer'
        ]);
    }

    public function edit(Request $request)
    {
        return response()->json(
            Customer::where('id_customer', $request->post('id_customer'))->get()
        );
    }

    public function update(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'email_customer' => $request->input('email_customer'),
            'nama_customer' => $request->input('nama_customer'),
            'alamat_customer' => $request->input('alamat_customer'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'password' => password_hash($request->input('password'),PASSWORD_DEFAULT)
        ];

        Customer::where('id_customer', $request->post('id_customer'))->update($data);
        return response()->json([
            'pesan' => 'Berhasil Merubah Data Customer'
        ]);
    }

    public function destroy(Request $request)
    {
       Customer::where('id_customer', $request->post('id_customer'))->delete();

        return response()->json([
            'pesan' => 'Berhasil Menghapus Data Customer'
        ]);
    }

}