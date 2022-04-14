<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pemda;
use Illuminate\Http\Request;

class PemdaController extends Controller
{
    public function index()
    {
        $data=[
            'title' => 'Data Pemda',
            'pemda' =>Pemda::all()
        ];
        return view('admin.users.pemda.index',$data);
    }

    public function store(Request $request)
    {
        $data = [
            // 'username' => $request->input('username'),
            'email' => $request->input('email'),
            'nama_pemda' => $request->input('nama_pemda'),
            'alamat_pemda' => $request->input('alamat_pemda'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'nomor_ktp' => $request->input('nomor_ktp'),
            'password' => password_hash($request->input('password'),PASSWORD_DEFAULT)
        ];

        Pemda::create($data);
        return response()->json([
            'pesan' => 'Berhasil Menambah Data Pemda'
        ]);
    }

    public function edit(Request $request)
    {
        return response()->json(
            Pemda::where('id_pemda', $request->post('id_pemda'))->get()
        );
    }

    public function update(Request $request)
    {
        $data = [
            // 'username' => $request->input('username'),
            'email' => $request->input('email'),
            'nama_pemda' => $request->input('nama_pemda'),
            'alamat_pemda' => $request->input('alamat_pemda'),
            'nomor_telepon' => $request->input('nomor_telepon'),            
            'nomor_ktp' => $request->input('nomor_ktp'),
            'password' => password_hash($request->input('password'),PASSWORD_DEFAULT)
        ];

        Pemda::where('id_pemda', $request->post('id_pemda'))->update($data);
        return response()->json([
            'pesan' => 'Berhasil Merubah Data Pemda'
        ]);
    }

    public function destroy(Request $request)
    {
       Pemda::where('id_pemda', $request->post('id_pemda'))->delete();

        return response()->json([
            'pesan' => 'Berhasil Menghapus Data Pemda'
        ]);
    }
}
