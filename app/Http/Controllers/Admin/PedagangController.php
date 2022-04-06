<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pedagang;
use Illuminate\Http\Request;

class PedagangController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Data Pedagang',
            'pedagang' =>Pedagang::all()
        ];
        return view('admin.users.pedagang.index',$data);
    }

    public function store(Request $request)
    {
        $data = [
            // 'username' => $request->input('username'),
            // 'email' => $request->input('email'),
            'nama_pedagang' => $request->input('nama_pedagang'),
            'nama_toko' => $request->input('nama_toko'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'nomor_ktp' => $request->input('nomor_ktp'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'alamat_toko' => $request->input('alamat_toko'),
            'alamat_pedagang' => $request->input('alamat_pedagang'),
            'foto_rekening' => $request->input('foto_rekening'),
            // 'password' => password_hash($request->input('password'),PASSWORD_DEFAULT)
        ];

        Pedagang::create($data);
        return response()->json([
            'pesan' => 'Berhasil Menambah Data Pedagang'
        ]);
    }

    public function edit(Request $request)
    {
        return response()->json(
            Pedagang::where('id_pedagang', $request->post('id_pedagang'))->get()
        );
    }

    public function update(Request $request)
    {
        $data = [
            // 'username' => $request->input('username'),
            // 'email' => $request->input('email'),
            'nama_pedagang' => $request->input('nama_pedagang'),
            'nama_toko' => $request->input('nama_toko'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'nomor_ktp' => $request->input('nomor_ktp'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'alamat_toko' => $request->input('alamat_toko'),
            'alamat_pedagang' => $request->input('alamat_pedagang'),
            'foto_rekening' => $request->input('foto_rekening'),
            // 'password' => password_hash($request->input('password'),PASSWORD_DEFAULT)
        ];

        Pedagang::where('id_pedagang', $request->post('id_pedagang'))->update($data);
        return response()->json([
            'pesan' => 'Berhasil Merubah Data Pedagang'
        ]);
    }

    public function destroy(Request $request)
    {
       Pedagang::where('id_pedagang', $request->post('id_pedagang'))->delete();

        return response()->json([
            'pesan' => 'Berhasil Menghapus Data Pedagang'
        ]);
    }
}
