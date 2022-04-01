<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengelolaPasar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PengelolaPasarController extends Controller
{
    public function index()
    {
        $data =[
            'title' => 'Pengelola Pasar',
            'pengelola' => PengelolaPasar::all()
        ];

        return view('admin.pasar.pengelola.index')->with($data);
    }

    public function store(Request $request)
    {
        // Validator
        // $validator = Validator::make($request->all(),[
        //     'username' => ['required','unique:pengelola_pasar'],
        //     'email' => ['required', 'email','unique:pengelola_pasar'],
        //     'nama_pengelola' => ['required'],
        //     'alamat_pengelola' => ['required'],
        //     'nomor_telepon' => ['required'],
        //     'password' => ['required']
        // ]);

        // if ($validator->fails()) {
        //     return redirect('admin/pasar/pengelola')->withErrors($validator)->withInput();
        // }

        $data = [
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'nama_pengelola' => $request->input('nama_pengelola'),
            'alamat_pengelola' => $request->input('alamat_pengelola'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'password' => password_hash($request->input('password'),PASSWORD_DEFAULT)
        ];

        PengelolaPasar::create($data);
        return response()->json([
            'pesan' => 'Berhasil Menambah Data Pengelola Pasar'
        ]);
    }

    public function edit(Request $request)
    {
        return response()->json(
            Pengelolapasar::where('id_pengelola', $request->post('id_pengelola'))->get()
        );
    }

    public function update(Request $request)
    {
         // Validator
        // $validator = Validator::make($request->all(),[
        //     'username' => ['required','unique:pengelola_pasar'],
        //     'email' => ['required', 'email','unique:pengelola_pasar'],
        //     'nama_pengelola' => ['required'],
        //     'alamat_pengelola' => ['required'],
        //     'nomor_telepon' => ['required']
        // ]);

        $data = [
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'nama_pengelola' => $request->input('nama_pengelola'),
            'alamat_pengelola' => $request->input('alamat_pengelola'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'password' => password_hash($request->input('password'),PASSWORD_DEFAULT)
        ];

        PengelolaPasar::where('id_pengelola', $request->post('id_pengelola'))->update($data);
        return response()->json([
            'pesan' => 'Berhasil Merubah Data Pengelola Pasar'
        ]);
    }

    public function destroy(Request $request)
    {
        PengelolaPasar::where('id_pengelola', $request->post('id_pengelola'))->delete();

        return response()->json([
            'pesan' => 'Berhasil Menghapus Data Pengelola Pasar'
        ]);
    }
}
