<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data Produk',
            'produk' => Produk::all()
        ];
        return view('admin.produk.data_produk.index',$data);
   }

   public function create()
   {
       $data = [
           'title' => 'Data Produk',
           'kategori' => KategoriProduk::all()
       ];
       return view('admin.produk.data_produk.add',$data);
   }

    public function store(Request $request)
    {
        if($request->hasFile('foto_produk')){

            $fotoproduk = $request->file('foto_produk');
            foreach($fotoproduk as $file){

                $filename = time().'_'. $file->getClientOriginalName();
                $file->move('assets/admin/foto_produk', $filename);
                $namaFile[] = $filename;
            
            }

            $data = [
                'nama_produk' => $request->input('nama_produk'),
                'satuan' => $request->input('satuan'),
                'harga_jual' => $request->input('harga_jual'),
                'jumlah_produk' => $request->input('jumlah_produk'),
                'deskripsi' => $request->input('deskripsi'),
                'foto_produk' => $request->input('foto_produk'),
                'status_produk' => $request->input('status_produk'),
                'id_kategori' => $request->input('id_kategori'),
                'id_produk' => $request->input('id_produk'),
                'foto_produk' => $filename,
            ];

            Produk::create($data);
            return response()->json([
                'pesan' => 'Berhasil Menambah Data Produk'
            ]);
        }
    }
}
