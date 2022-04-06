<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;


class DriverController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data Driver',
            'driver' => Driver::all()
        ];

        return view('admin.users.driver.index',$data); 
    }

    public function store(Request $request)
    {
        $data = [
            // 'username' => $request->input('username'),
            // 'email' => $request->input('email'),
            'nama_driver' => $request->input('nama_driver'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'nomor_ktp' => $request->input('nomor_ktp'),
            'alamat_driver' => $request->input('alamat_driver'),
            'kendaraan' => $request->input('kendaraan'),
            'foto_stnk' => $request->input('foto_stnk'),
            // 'password' => password_hash($request->input('password'),PASSWORD_DEFAULT)
        ];

        Driver::create($data);
        return response()->json([
            'pesan' => 'Berhasil Menambah Data Drivers'
        ]);
    }

    public function edit(Request $request)
    {
        return response()->json(
            Driver::where('id_driver', $request->post('id_driver'))->get()
        );
    }

    public function update(Request $request)
    {
        $data = [
           // 'username' => $request->input('username'),
            // 'email' => $request->input('email'),
            'nama_driver' => $request->input('nama_driver'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'nomor_ktp' => $request->input('nomor_ktp'),
            'alamat_driver' => $request->input('alamat_driver'),
            'kendaraan' => $request->input('kendaraan'),
            'foto_stnk' => $request->input('foto_stnk'),
            // 'password' => password_hash($request->input('password'),PASSWORD_DEFAULT)
        ];

        Driver::where('id_driver', $request->post('id_driver'))->update($data);
        return response()->json([
            'pesan' => 'Berhasil Merubah Data Pemda'
        ]);
    }

    public function destroy(Request $request)
    {
       Driver::where('id_driver', $request->post('id_driver'))->delete();

        return response()->json([
            'pesan' => 'Berhasil Menghapus Data Driver'
        ]);
    }
}
