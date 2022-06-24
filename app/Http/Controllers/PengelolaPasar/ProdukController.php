<?php

namespace App\Http\Controllers\PengelolaPasar;

use App\Http\Controllers\Controller;
use App\Models\ProdukKategori;
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
        return view('pengelola.produk.data_produk.index',$data);
   }

   public function create()
   {
       $data = [
           'title' => 'Data Produk',
           'pedagang' => Pedagang::all(),
           'kategori' => ProdukKategori::all()
       ];
       return view('pengelola.produk.data_produk.add',$data);
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
                'deskripsi_produk' => $request->input('deskripsi_produk'),
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
            'kategori' => ProdukKategori::all(),
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

            $produk = ProdukKategori::join('produk', 'kategori_produk.id_kategori', '=', 'produk.id_kategori')
                    ->where('produk.id_produk', $request->post('id_produk'))->get();

            foreach($produk as $p):
                $arr_foto = explode(',', $p->foto_produk);
            endforeach;

            $new_image = array_merge($namaFile, $arr_foto);

            $data = [
                'foto_produk' => implode(',', $new_image),
            ];
            
            Produk::where('id_produk', $request->post('id_produk'))->where('id_pedagang', $request->session()->get('id_pedagang'))->update($data);

        }

        $data = [
            'nama_produk' => $request->post('nama_produk'),
            'harga_jual' => str_replace(',', '', $request->post('harga_jual')),
            // 'potongan_harga' => str_replace(',', '', $request->post('potongan_harga')) ,
            'deskripsi_produk' => $request->post('deskripsi_produk'),
            'jumlah_produk' => $request->post('jumlah_produk'),
            'id_kategori' => $request->post('id_kategori'),
            'status_produk' => $request->post('status_produk'),
            // 'berat_produk' => str_replace(',', '', $request->post('berat_produk')),
            'satuan' => $request->post('satuan'),
            'id_pedagang' => $request->post('id_pedagang'),
        ];

        Produk::where('id_produk', $request->post('id_produk'))->update($data);

        return response()->json([
            'pesan' => 'Produk Berhasil Diupdate'
        ]);
    }

    public function destroy(Request $request){

        Produk::where('id_produk', $request->post('id_produk'))->delete();
        return response()->json([
            'pesan' => 'Berhasil Hapus Data Produk'
        ]);
    }

    public function nonaktif(Request $request)
    {
        $data = [
            'status_produk' => 'off'
        ];
        Pedagang::where('id_produk',$request->post('id_produk'))->update($data);
        return response()->json([
            'pesan' => 'Berhasil Nonaktifkan Produk'
        ]);
    }

    public function aktif(Request $request)
    {
        $data = [
            'status_produk' => 'on'
        ];
        Pedagang::where('id_produk',$request->post('id_produk'))->update($data);
        return response()->json([
            'pesan' => 'Berhasil Aktifkan Produk'
        ]);
    }
}
