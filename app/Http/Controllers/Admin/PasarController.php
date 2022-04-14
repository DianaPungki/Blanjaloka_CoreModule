<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pasar;
use App\Models\Pedagang;
use App\Models\PengelolaPasar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;


class PasarController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data Pasar',
            'pasar' =>  Pasar::
                    join('pengelola_pasar', 'pasar.id_pengelola', '=', 'pengelola_pasar.id_pengelola')->get()
        ];

        return view('admin.pasar.data_pasar.index',$data);
    }

    public function create()
    {
        $data = [
            'title' => 'Data Pasar',
            'pengelola' => PengelolaPasar::all(),
            'provinsi' => Province::pluck('name', 'code')
        ];
        return view('admin.pasar.data_pasar.add',$data);
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'foto_pasar' => 'required',
            'foto_pasar.*' => 'mimes:jpeg,jpg,png'
        ]);

        if($validator->fails()){

            return redirect('admin/pasar/add')->withErrors($validator)->withInput();

        }else{

            if($request->hasFile('foto_pasar')){

                $foto_pasar = $request->file('foto_pasar');
    
                foreach ($foto_pasar as $file){
    
                    $filename = time().'_'.$file->getClientOriginalName();
                    $file->move('assets/admin/pasar/foto_pasar/', $filename);
                    $namaFile[] = $filename;
    
                }
    
                $data = [
                    'nama_pasar' => $request->post('nama_pasar'),
                    'alamat' => $request->post('alamat'),
                    'embbed_maps' => $request->post('embbed_maps'),
                    'foto_pasar' => implode(',', $namaFile),
                    'deskripsi' => $request->post('deskripsi'),
                    'max_toko' => $request->post('max_toko'),
                    'max_pengunjung' => $request->post('max_pengunjung'),
                    'id_pengelola' => $request->post('id_pengelola'),
                    'provinsi' => $request->post('provinsi'),
                    'kabupaten' => $request->post('kabupaten'),
                    'kecamatan' => $request->post('kecamatan')
                ];

                Pasar::create($data);
    
                return redirect('admin/pasar')->with('success', 'Tambah Data Pasar Berhasil');
    
            }

        }
    }

    public function edit($id)
    {
        $data=[
            'title' => 'Data Pasar',
            'pasar' => DB::table('pasar')->where('id_pasar', $id)->get(),
            'pengelola' => PengelolaPasar::all(),
            'provinsi' => Province::pluck('name', 'code'),
            'kabupaten' => City::pluck('name', 'code'),
            'kecamatan' => District::pluck('name', 'code')
        ];
        return view('admin.pasar.data_pasar.edit',$data);
    }

    public function update(Request $request){

        $validator = Validator::make($request->all(),[
            'foto_pasar.*' => 'mimes:jpeg,jpg,png'
        ]);

        if($validator->fails()){

            return redirect('admin/pasar/edit/'.$request->post('id_pasar'))->withErrors($validator);

        }else{

            if($request->hasFile('foto_pasar')){

                $foto_pasar = $request->file('foto_pasar');
    
                foreach ($foto_pasar as $file){
    
                    $filename = time().'_'.$file->getClientOriginalName();
                    $file->move('assets/admin/pasar/foto_pasar/', $filename);
                    $namaFile[] = $filename;
    
                }
    
                $data = [
                    'foto_pasar' => implode(',', $namaFile),
                ];

                DB::table('pasar')->where('id_pasar', $request->post('id_pasar'))->update($data);
    
            }
            
            $data = [
                'nama_pasar' => $request->post('nama_pasar'),
                'alamat' => $request->post('alamat'),
                'embbed_maps' => $request->post('embbed_maps'),
                'deskripsi' => $request->post('deskripsi'),
                'max_toko' => $request->post('max_toko'),
                'max_pengunjung' => $request->post('max_pengunjung'),
                'id_pengelola' => $request->post('id_pengelola'),
                'provinsi' => $request->post('provinsi'),
                'kabupaten' => $request->post('kabupaten'),
                'kecamatan' => $request->post('kecamatan')
            ];

            DB::table('pasar')->where('id_pasar', $request->post('id_pasar'))->update($data);

            return redirect('admin/pasar')->with('success', 'Edit Data Pasar Berhasil');

        }
    }

    public function destroy(Request $request)
    {
       Pasar::where('id_pasar', $request->post('id_pasar'))->delete();

        return response()->json([
            'pesan' => 'Berhasil Menghapus Data Pasar'
        ]);
    }

}
