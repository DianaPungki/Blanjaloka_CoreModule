<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengelolaPasar;
use Illuminate\Http\Request;

class PasarController extends Controller
{
    public function pengelolapasar(){

        $data = [
            'pengelola' => PengelolaPasar::all()
        ];

        return view('admin/pasar/pengelola/index', $data)->with(['title' => 'Pengelola Pasar']);

    }

}
