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
        if(!empty($request->get('id_pasar'))){

            $data = [
                'title' => 'Data Gudang',
                'pasar' => Pasar::all(),
                'produk' => Pasar::join('pedagang', 'pedagang.id_pasar', 'pasar.id_pasar')
                            ->join('produk', 'produk.id_pedagang', 'pedagang.id_pedagang')
                        ->where('id_pasar', $request->get('id_pasar'))->get(),
            ];

        }else{

            $data = [
                'title' => 'Data Gudang',
                'pasar' => Pasar::all(),
                'produk' => Pasar::join('pedagang', 'pedagang.id_pasar', 'pasar.id_pasar')
                ->join('produk', 'produk.id_pedagang', 'pedagang.id_pedagang')->get()
            ];
        }

        return view('admin.produk.gudang.index',$data);
    }
}
