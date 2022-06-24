<?php

namespace App\Http\Controllers\PengelolaPasar;

use App\Http\Controllers\Controller;
use App\Models\Pasar;
use App\Models\Pedagang;
use Illuminate\Http\Request;

class PedagangController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Data Pedagang',
            'pedagang' => Pasar::join('pengelola_pasar','pasar.id_pengelola','=','pengelola_pasar.id_pengelola')
                            ->join('pedagang', 'pasar.id_pasar','=','pedagang.id_pasar')
                            ->where('pengelola_pasar.id_pengelola','=',auth()->user()->id_pengelola)->get(),
            'pasar' => Pasar::all()
        ];
        return view('pengelola.users.pedagang.index',$data);
    }

    public function store(Request $request)
    {
        if($request->hasFile('foto_rekening')){

            $foto_rekening = $request->file('foto_rekening');
            $filename = time().'_'.$foto_rekening->getClientOriginalName();
            $foto_rekening->move('assets/admin/pedagang/foto_rekening/', $filename);

            $data = [
                'nama_pedagang' => $request->input('nama_pedagang'),
                'nama_toko' => $request->input('nama_toko'),
                'nomor_telepon' => $request->input('nomor_telepon'),
                'nomor_ktp' => $request->input('nomor_ktp'),
                'tanggal_lahir' => $request->input('tanggal_lahir'),
                'alamat_toko' => $request->input('alamat_toko'),
                'alamat_pedagang' => $request->input('alamat_pedagang'),
                'status' => $request->input('status'),
                'email' => $request->input('email'),
                'id_pasar' => $request->input('id_pasar'),
                'no_rekening' => $request->input('no_rekening'),
                'bank' => $request->input('bank'),
                'foto_rekening' => $filename,
                'password' => password_hash($request->input('password'),PASSWORD_DEFAULT)
            ];
            
            Pedagang::create($data);
            return response()->json([
                'pesan' => 'Berhasil Menambah Data Pedagang'
            ]);
        }
    }
    
    public function edit(Request $request)
    {
        return response()->json(
            Pedagang::where('id_pedagang', $request->post('id_pedagang'))->get()
        );
    }
    
    public function update(Request $request)
    {
        if($request->hasFile('foto_rekening')){
            
            $foto_rekening = $request->file('foto_rekening');
            $filename = time().'_'.$foto_rekening->getClientOriginalName();
            $foto_rekening->move('assets/admin/pedagang/foto_rekening/', $filename);
            
            $image = Pedagang::find($request->id_pedagang);
            unlink("assets/admin/pedagang/foto_rekening/".$image->foto_rekening);
            
            $data = [
                'foto_rekening' => $filename,
            ];
            
            Pedagang::where('id_pedagang', $request->post('id_pedagang'))->update($data);
        }
        
        $data = [
            'nama_pedagang' => $request->input('nama_pedagang'),
            'nama_toko' => $request->input('nama_toko'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'nomor_ktp' => $request->input('nomor_ktp'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'alamat_toko' => $request->input('alamat_toko'),
            'alamat_pedagang' => $request->input('alamat_pedagang'),
            'status' => $request->input('status'),
            'email' => $request->input('email'),
            'id_pasar' => $request->input('id_pasar'),
            'no_rekening' => $request->input('no_rekening'),
            'bank' => $request->input('bank'),
            'password' => password_hash($request->input('password'),PASSWORD_DEFAULT)
        ];
        
        Pedagang::where('id_pedagang', $request->post('id_pedagang'))->update($data);
        return response()->json([
            'pesan' => 'Berhasil Merubah Data Pedagang'
        ]);
    }
    
    public function destroy(Request $request)
    {
        $image = Pedagang::find($request->id_pedagang);
        unlink("assets/admin/pedagang/foto_rekening/".$image->foto_rekening);

        Pedagang::where('id_pedagang', $request->post('id_pedagang'))->delete();
        return response()->json([
            'pesan' => 'Berhasil Menghapus Data Pedagang'
        ]);
    }

    public function nonaktif(Request $request)
    {
        $data = [
            'status' => 'off'
        ];
        Pedagang::where('id_pedagang',$request->post('id_pedagang'))->update($data);
        return response()->json([
            'pesan' => 'Berhasil Nonaktifkan Akun Pedagang'
        ]);
    }

    public function aktif(Request $request)
    {
        $data = [
            'status' => 'on'
        ];
        Pedagang::where('id_pedagang',$request->post('id_pedagang'))->update($data);
        return response()->json([
            'pesan' => 'Berhasil Aktifkan Akun Pedagang'
        ]);
    }
}
