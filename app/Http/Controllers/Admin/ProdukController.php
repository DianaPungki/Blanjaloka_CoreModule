<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriProduk;
use App\Models\Pedagang;
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
           'pedagang' => Pedagang::all(),
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
                'harga_jual' => str_replace(',', '', $request->post('harga_jual')),
                'jumlah_produk' => $request->input('jumlah_produk'),
                'deskripsi' => $request->input('deskripsi'),
                'foto_produk' => $request->input('foto_produk'),
                'status_produk' => $request->input('status_produk'),
                'id_kategori' => $request->input('id_kategori'),
                'id_produk' => $request->input('id_produk'),
                'id_pedagang' => $request->input('id_pedagang'),
                'foto_produk' => $filename,
            ];

            Produk::create($data);
            return response()->json([
                'pesan' => 'Berhasil Menambah Data Produk'
            ]);
        }
    }

    public function edit(Request $request)
    {
        $data = [
            'title' => 'Data Produk',
            'produk' => Produk::join('kategori_produk', 'produk.id_kategori','=','kategori_produk.id_kategori')
                        ->join('pedagang', 'produk.id_pedagang','=','pedagang.id_pedagang')
                        ->where('produk.id_produk', $request->segment(4))->get(),
            'kategori' => KategoriProduk::all(),
            'pedagang' => Pedagang::all()
        ];
    
        return view('admin.produk.data_produk.edit', $data);
    }

    public function update(Request $request)
    {
        if($request->hasFile('foto_produk')){

            $fotoproduk = $request->file('foto_produk');
            foreach($fotoproduk as $file){

                $filename = time().'_'. $file->getClientOriginalName();
                $file->move('assets/admin/foto_produk', $filename);
                $namaFile[] = $filename;
            
            }

            $produk = Produk::join('kategori_produk', 'produk.id_kategori','=','kategori_produk.id_kategori')
            ->join('pedagang', 'produk.id_pedagang','=','pedagang.id_pedagang')
            ->where('produk.id_produk', $request->segment(4))->get();

            foreach ($produk as $p) :
                $arr_foto = explode(',', $p->foto_produk);
            endforeach;

            $new_image = array_merge($namaFile, $arr_foto);

            $data = [
                'foto_produk' => implode(',', $new_image),
            ];

            Produk::where('id_produk', $request->input('id_produk'))->update($data);

            $data = [
                'nama_produk' => $request->input('nama_produk'),
                'satuan' => $request->input('satuan'),
                'harga_jual' => str_replace(',', '', $request->post('harga_jual')),
                'jumlah_produk' => $request->input('jumlah_produk'),
                'deskripsi' => $request->input('deskripsi'),
                'foto_produk' => $request->input('foto_produk'),
                'status_produk' => $request->input('status_produk'),
                'id_kategori' => $request->input('id_kategori'),
                'id_pedagang' => $request->input('id_pedagang')
            ];

            Produk::where('id_produk', $request->input('id_produk'))->update($data);
            return response()->json([
                'pesan' => 'Berhasil Merubah Data Produk'
            ]);
        }
    }

    public function destroy(Request $request)
    {
        Produk::where('id_produk', $request->post('id_produk'))->delete();
        return response()->json([
            'pesan' => 'Berhasil Menghapus Data Produk'
        ]);
    }
}
