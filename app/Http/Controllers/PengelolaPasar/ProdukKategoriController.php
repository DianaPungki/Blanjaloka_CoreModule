<?php

namespace App\Http\Controllers\PengelolaPasar;

use App\Http\Controllers\Controller;
use App\Models\ProdukKategori;
use Illuminate\Http\Request;

class ProdukKategoriController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kategori Produk',
            'kategori' => ProdukKategori::all()
        ];

        return view('pengelola.produk.kategori.index',$data);
    }

    public function store(Request $request)
    { 
        $data = [
            'jenis_kategori' => $request->input('jenis_kategori'),
        ];

        ProdukKategori::create($data);
        return response()->json([
            'pesan' => 'Berhasil Menambah Data Kategori'
        ]);
        
    }

    public function edit(Request $request)
    {
        return response()->json(
            ProdukKategori::where('id_kategori', $request->post('id_kategori'))->get()
        );
    }

    public function update(Request $request)
    {
        $data = [
            'jenis_kategori' => $request->input('jenis_kategori'),
        ];

        ProdukKategori::where('id_kategori', $request->post('id_kategori'))->update($data);
        return response()->json([
            'pesan' => 'Berhasil Merubah Data Kategori Produk'
        ]);
    }

    public function destroy(Request $request)
    {
       ProdukKategori::where('id_kategori', $request->post('id_kategori'))->delete();

        return response()->json([
            'pesan' => 'Berhasil Menghapus Data Kategori Produk'
        ]);
    }

}
