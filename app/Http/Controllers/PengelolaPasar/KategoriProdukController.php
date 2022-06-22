<?php

namespace App\Http\Controllers\PengelolaPasar;

use App\Http\Controllers\Controller;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kategori Produk',
            'kategori' => KategoriProduk::all()
        ];

        return view('pengelola.produk.kategori.index',$data);
    }

    public function store(Request $request)
    { 
        $data = [
            'jenis_kategori' => $request->input('jenis_kategori'),
        ];

        KategoriProduk::create($data);
        return response()->json([
            'pesan' => 'Berhasil Menambah Data Kategori'
        ]);
        
    }

    public function edit(Request $request)
    {
        return response()->json(
            KategoriProduk::where('id_kategori', $request->post('id_kategori'))->get()
        );
    }

    public function update(Request $request)
    {
        $data = [
            'jenis_kategori' => $request->input('jenis_kategori'),
        ];

        KategoriProduk::where('id_kategori', $request->post('id_kategori'))->update($data);
        return response()->json([
            'pesan' => 'Berhasil Merubah Data Kategori Produk'
        ]);
    }

    public function destroy(Request $request)
    {
       KategoriProduk::where('id_kategori', $request->post('id_kategori'))->delete();

        return response()->json([
            'pesan' => 'Berhasil Menghapus Data Kategori Produk'
        ]);
    }

}
