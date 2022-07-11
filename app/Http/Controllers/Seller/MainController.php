<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function lupa_password()
    {
        return view('seller/lupa-password');
    }
    
    public function reset_password()
    {
        return view('seller/reset-password');
    }

    public function verifikasi()
    {
        return view('seller/verifikasi');
    }

    public function verifikasi_sukses()
    {
        return view('seller/verifikasi-sukses');
    }

    public function registrasi_toko()
    {
        return view('seller/registrasi-toko');
    }

    public function form_registrasi_toko()
    {
        return view('seller/form-registrasi-toko');
    }

    public function proses_registrasi_toko()
    {
        return view('seller/proses-registrasi-toko');
    }

    public function dashboard()
    {
        return view('seller/dashboard');
    }

    // public function produk_saya()
    // {
    //     return view('seller/produk-saya');
    // }

    // public function tambah_produk()
    // {
    //     return view('seller/tambah-produk');
    // }

    public function laporan()
    {
        return view('seller/laporan');
    }

    public function toko_saya()
    {
        return view('seller/toko-saya');
    }

    public function sewa_toko()
    {
        return view('seller/sewa-toko');
    }

    public function ulasan_pembeli()
    {
        return view('seller/ulasan-pembeli');
    }

    public function voucher()
    {
        return view('seller/voucher');
    }

    public function tambah_promo()
    {
        return view('seller/tambah-promo');
    }

    // public function pengaturan()
    // {
    //     return view('seller/pengaturan');
    // }
}
