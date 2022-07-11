<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Produk;
use App\Models\ProdukKategori;

class ProdukController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $data = [
            'title' => 'Data Produk',
            'produk' => Produk::join('produk_kategori','produk_kategori.id_kategori','=','produk.id_kategori')->get(),
        ];
        $produk = Produk::latest()->paginate(100);
        return view('seller.produk-saya', $data);
    }

    public function show()
    {
        $data = [
            'title' => 'Data Produk',
            'produk' => Produk::join('produk_kategori','produk_kategori.id_kategori','=','produk.id_kategori')->get(),
        ];
        $produk = Produk::latest()->paginate(100);
        return view('seller.produk-saya', $data);
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $data = [
            'title' => 'Data Produk',
            'kategori' => ProdukKategori::all()
        ];
        return view('seller.tambah-produk', $data);
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto_produk'       => 'required|image|mimes:png,jpg,jpeg',
            'id_kategori'       => 'required',
            'satuan'            => 'required',
            'harga_jual'        => 'required',
            'jumlah_produk'     => 'required',
            'deskripsi_produk'  => 'required',
            'nama_produk'       => 'required'
        ]);

        //upload image
        $foto_produk = $request->file('foto_produk');
        $foto_produk->storeAs('public/foto_produk', $foto_produk->hashName());

        $produk = Produk::create([
            'foto_produk'       => $foto_produk->hashName(),
            'nama_produk'       => $request->nama_produk,
            'satuan'            => $request->satuan,
            'harga_jual'        => $request->harga_jual,
            'jumlah_produk'     => $request->jumlah_produk,
            'deskripsi_produk'  => $request->deskripsi_produk,
            'id_kategori'       => $request->id_kategori
        ]);

        if($produk){
            //redirect dengan pesan sukses
            return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('produk.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * edit
     *
     * @param  mixed $blog
     * @return void
     */
    public function edit(Produk $produk)
    {
        $data = [
            'title' => 'Data Produk',
            'produk' => Produk::join('produk_kategori', 'produk.id_kategori','=','produk_kategori.id_kategori')
                        ->where('produk.id_produk')->get(),
            'kategori' => ProdukKategori::all()
        ];
        return view('seller.edit-produk', compact('produk'), $data);
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $blog
     * @return void
     */
    public function update(Request $request, Produk $produk)
    {
        $this->validate($request, [
            'nama_produk'       => 'required',
            'satuan'            => 'required',
            'harga_jual'        => 'required',
            'jumlah_produk'     => 'required',
            'deskripsi_produk'  => 'required',
            'id_kategori'       => 'required'
        ]);

        //get data Blog by ID
        $produk = Produk::findOrFail($produk->id_produk);

        if($request->file('foto_produk') == "") {

            $produk->update([
                'nama_produk'       => $request->nama_produk,
                'satuan'            => $request->satuan,
                'harga_jual'        => $request->harga_jual,
                'jumlah_produk'     => $request->jumlah_produk,
                'deskripsi_produk'  => $request->deskripsi_produk,
                'id_kategori'       => $request->id_kategori
            ]);

        } else {

            //hapus old image
            Storage::disk('local')->delete('public/foto_produk/'.$produk->foto_produk);

            //upload new image
            $foto_produk = $request->file('foto_produk');
            $foto_produk->storeAs('public/foto_produk', $foto_produk->hashName());

            $produk->update([
                'foto_produk'       => $foto_produk->hashName(),
                'nama_produk'       => $request->nama_produk,
                'satuan'            => $request->satuan,
                'harga_jual'        => $request->harga_jual,
                'jumlah_produk'     => $request->jumlah_produk,
                'deskripsi_produk'  => $request->deskripsi_produk,
                'id_kategori'       => $request->id_kategori
            ]);
            
        }

        if($produk){
            //redirect dengan pesan sukses
            return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('produk.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    
    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id_produk)
    {
        $produk = Produk::findOrFail($id_produk);
        $produk->delete();

        if($produk){
            //redirect dengan pesan sukses
            return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('produk.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
