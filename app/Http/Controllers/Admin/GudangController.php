<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pasar;
use App\Models\Pedagang;
use App\Models\Produk;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Data Gudang',
            'pasar' => Pasar::all(),
            'gudang' => Produk::all(),
            'pedagang' => Pedagang::all(),
            'produk' => Produk::all()
        ];

        if(!empty($request->get('id_pasar'))){

            $data = [
                'produk' => ProdukModels::join('satuan_produk', 'produk.id_satuanproduk', 'satuan_produk.id_satuanproduk')
                        ->where('id_penjual', $request->session()->get('id_penjual'))
                        ->where('id_kategoriproduk', $request->get('kategoriproduk'))->get(),
                'kategori' =>Kategori::all()
            ];

        }else{

            $data = [
                'produk' => ProdukModels::join('satuan_produk', 'produk.id_satuanproduk', 'satuan_produk.id_satuanproduk')
                        ->where('id_penjual', $request->session()->get('id_penjual'))->get(),
                'kategori' =>Kategori::all()
            ];

        }

        return view('admin.produk.gudang.index',$data);
    }
}
