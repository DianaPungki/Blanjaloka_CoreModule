<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $data=[
            'title' => 'Data Admin',
            'admin' =>Admin::all()
        ];
        return view('admin.users.admin.index',$data);
    }

    public function store(Request $request)
    { 
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $data = [
            'email' => $request->input('email'),
            'nama' => $request->input('nama'),
            'password' => password_hash($request->input('password'),PASSWORD_DEFAULT)
        ];

        Admin::create($data);
        return response()->json([
            'pesan' => 'Berhasil Menambah Data Admin'
        ]);
        
    }

    public function edit(Request $request)
    {
        return response()->json(
            Admin::where('id_admin', $request->post('id_admin'))->get()
        );
    }

    public function update(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'nama' => $request->input('nama'),
            'password' => password_hash($request->input('password'),PASSWORD_DEFAULT)
        ];

        Admin::where('id_admin', $request->post('id_admin'))->update($data);
        return response()->json([
            'pesan' => 'Berhasil Merubah Data Admin'
        ]);
    }

    public function destroy(Request $request)
    {
       Admin::where('id_admin', $request->post('id_admin'))->delete();

        return response()->json([
            'pesan' => 'Berhasil Menghapus Akun Admin'
        ]);
    }
}
