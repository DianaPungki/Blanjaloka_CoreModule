@extends('seller.layouts.main')
@section('container')
                    
<h1 class="title-page mb-1">Toko Saya</h1>
<h6 class="text-title-page mb-4">Pantau semua perihal sewa toko di sini!</h6>

<div class="mb-4 d-flex align-items-center"><img class="img-profile rounded-circle me-2" src="/assets/seller/img/undraw_profile.svg" width="90px">
    <div>
        <h5 class="nama-toko">Toko Joko Susilo</h5>
        <p class="followers">0 Pengikut</p>
    </div>
</div>

<div class="card-status-toko shadow bg-white mb-4">
    <div class="row">
        <div class="col-md-6" style="border-right: 1px solid #9E9E9E;">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h6 class="title-card-status-toko mb-1">Status Toko</h6>
                    <p class="text1-card-status-toko mb-0">Aktifkan jika kamu ingin <br> menerima pesanan</p>
                </div>
                <div class="form-check form-switch">
                    <label class="title-card-status-toko form-check-label me-5" style="color: #1E891E;" for="flexSwitchCheckChecked">Buka</label>
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" style="width: 40px; height: 22px; margin-top: auto;" checked>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-sm-flex align-items-center justify-content-between ms-2">
                <div class="d-flex align-items-center"><img class="me-2" src="/assets/seller/img/icon-sewa-toko.svg" width="50px">
                    <div>
                        <p class="text2-card-status-toko mb-0">Sewa Toko</p>
                        <h6 class="title-card-status-toko mb-0">3 Bulan</h6>
                    </div>
                </div>
                <div style="text-align: end;">
                    <p class="text2-card-status-toko mb-0">Masa Aktif Toko Sampai</p>
                    <h6 class="title-card-status-toko mb-0">12 Juni 2022</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-profile shadow bg-white">
    <h5 class="heading-card-profile mb-3">Profil</h5><br>

    <div class="informasi-toko mb-5">
        <h6 class="title-card-profile">Informasi Toko</h6>
        <hr class="mt-0" style="height: 0.5px;">

        <div class="row">
            <div class="col-md-2">
                <p class="text-card-profile">Berisi Informasi personal <br> dari toko yang terdaftar</p>  
            </div>
            <div class="col-md-5" style="border-bottom: 1px solid #E0E0E0;">
                <div class="mb-2">
                    <label class="label-card-profile form-label">Nama Toko</label>
                    <input type="text" class="form-informasi-toko form-control" placeholder="Toko Joko Susilo">
                </div>
                <label class="label-card-profile form-label">Kategori</label>
                <div class="d-flex mb-2">
                    <div class="kategori-informasi-toko me-1">
                        <span>Sayuran</span>
                        <button type="button" class="btn-close ms-1" aria-label="Close" style="font-size: 8px;"></button>
                    </div>
                    <div class="kategori-informasi-toko me-1">
                        <span>Bumbu Dapur</span>
                        <button type="button" class="btn-close ms-1" aria-label="Close" style="font-size: 8px;"></button>
                    </div>
                    <div class="kategori-informasi-toko">
                        <span>Bahan Masak</span>
                        <button type="button" class="btn-close ms-1" aria-label="Close" style="font-size: 8px;"></button>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="">
                    <label class="label-card-profile form-label">Domain Toko</label>
                    <div class="d-flex align-items-center">
                        <span class="example-domain me-2">www.blanjaloka.co.id/</span>
                        <input type="text" class="form-informasi-toko form-control" placeholder="Toko Joko Susilo">
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <div class="lokasi-toko mb-5">
        <h6 class="title-card-profile">Lokasi Toko</h6>
        <hr class="mt-0" style="height: 0.5px;">

        <div class="row">
            <div class="col-md-2">
                <p class="text-card-profile">Pastikan lokasi toko kamu <br> sudah benar ya!</p>  
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="label-card-profile form-label mb-0">Alamat</label>
                    <input type="text" class="form-lokasi-toko form-control" placeholder="Jl.Antasari, Jakarta Selatan">
                </div>
                <div>
                    <label class="label-card-profile form-label mb-0">Provinsi</label>
                    <select class="form-lokasi-toko form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="label-card-profile form-label mb-0">Kota</label>
                            <select class="form-lokasi-toko form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="label-card-profile form-label mb-0">Pasar</label>
                            <select class="form-lokasi-toko form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="label-card-profile form-label mb-0">Patokan</label>
                    <input type="text" class="form-lokasi-toko form-control" placeholder="Lantai 2, Blok B2">
                </div>
            </div>
        </div>
    </div><br>

    <div class="pengiriman">
        <h6 class="title-card-profile">Pengiriman</h6>
        <hr class="mt-0" style="height: 0.5px;">

        <div class="row mb-4">
            <div class="col-md-2">
                <p class="text-card-profile">Atur jasa pengiriman yang <br> kamu inginkan untuk toko <br> kamu!</p>  
            </div>
            
            <div class="col-md-5">
                <h6 class="title-pengiriman">Reguler</h6>
                <div class="jasa-pengiriman d-sm-flex align-items-center justify-content-between mb-2">
                    <label class="label-pengiriman form-label">JNE</label>
                    <div class="form-check form-switch d-sm-flex align-items-center me-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width: 52px; height: 28px;">
                    </div>
                </div>
                <div class="jasa-pengiriman d-sm-flex align-items-center justify-content-between mb-2">
                    <label class="label-pengiriman form-label">JNT</label>
                    <div class="form-check form-switch d-sm-flex align-items-center me-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width: 52px; height: 28px;">
                    </div>
                </div>
                <div class="jasa-pengiriman d-sm-flex align-items-center justify-content-between mb-4">
                    <label class="label-pengiriman form-label">SiCepat</label>
                    <div class="form-check form-switch d-sm-flex align-items-center me-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width: 52px; height: 28px;">
                    </div>
                </div>

                <h6 class="title-pengiriman">Same Day</h6>
                <div class="jasa-pengiriman d-sm-flex align-items-center justify-content-between mb-2">
                    <label class="label-pengiriman form-label">Becak Blanjaloka</label>
                    <div class="form-check form-switch d-sm-flex align-items-center me-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width: 52px; height: 28px;">
                    </div>
                </div>
                <div class="jasa-pengiriman d-sm-flex align-items-center justify-content-between mb-2">
                    <label class="label-pengiriman form-label">Ojek Blanjaloka</label>
                    <div class="form-check form-switch d-sm-flex align-items-center me-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width: 52px; height: 28px;">
                    </div>
                </div>
                <div class="jasa-pengiriman d-sm-flex align-items-center justify-content-between mb-2">
                    <label class="label-pengiriman form-label">Gojek</label>
                    <div class="form-check form-switch d-sm-flex align-items-center me-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width: 52px; height: 28px;">
                    </div>
                </div>
                <div class="jasa-pengiriman d-sm-flex align-items-center justify-content-between mb-2">
                    <label class="label-pengiriman form-label">Grab</label>
                    <div class="form-check form-switch d-sm-flex align-items-center me-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width: 52px; height: 28px;">
                    </div>
                </div>
                <div class="jasa-pengiriman d-sm-flex align-items-center justify-content-between mb-4">
                    <label class="label-pengiriman form-label">Anterin</label>
                    <div class="form-check form-switch d-sm-flex align-items-center me-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width: 52px; height: 28px;">
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <h6 class="title-pengiriman">Instant</h6>
                <div class="jasa-pengiriman d-sm-flex align-items-center justify-content-between mb-2">
                    <label class="label-pengiriman form-label">Becak Blanjaloka</label>
                    <div class="form-check form-switch d-sm-flex align-items-center me-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width: 52px; height: 28px;" checked>
                    </div>
                </div>
                <div class="jasa-pengiriman d-sm-flex align-items-center justify-content-between mb-2">
                    <label class="label-pengiriman form-label">Ojek Blanjaloka</label>
                    <div class="form-check form-switch d-sm-flex align-items-center me-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width: 52px; height: 28px;" checked>
                    </div>
                </div>
                <div class="jasa-pengiriman d-sm-flex align-items-center justify-content-between mb-2">
                    <label class="label-pengiriman form-label">Gojek</label>
                    <div class="form-check form-switch d-sm-flex align-items-center me-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width: 52px; height: 28px;">
                    </div>
                </div>
                <div class="jasa-pengiriman d-sm-flex align-items-center justify-content-between mb-2">
                    <label class="label-pengiriman form-label">Grab</label>
                    <div class="form-check form-switch d-sm-flex align-items-center me-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width: 52px; height: 28px;">
                    </div>
                </div>
                <div class="jasa-pengiriman d-sm-flex align-items-center justify-content-between mb-4">
                    <label class="label-pengiriman form-label">Anterin</label>
                    <div class="form-check form-switch d-sm-flex align-items-center me-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width: 52px; height: 28px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="d-sm-flex align-items-center mb-5">
            <label class="label-pengiriman form-label me-5">Cash On Delivery</label>
            <div class="form-check form-switch d-sm-flex align-items-center">
                <input class="form-check-input" data-bs-toggle="modal" data-bs-target="#popup-cod" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width: 52px; height: 28px;">
            </div>
        </div>

    </div>
    <br><button class="btn btn-simpan-toko-saya" type="button">Simpan Perubahan</button><br><br>

    <!-- Pop Up COD -->
    <div class="modal fade" id="popup-cod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title cod-header" id="exampleModalLabel"><img class="me-2" src="/assets/seller/img/cod.svg" alt="">Layanan Cash On Delivery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ms-4 me-4">
                    <h6 class="cod-title">Keuntungan</h6>
                    <div class="d-flex align-items-center mb-2">
                        <img class="me-2" src="/assets/seller/img/icon-ceklis.svg" alt="">
                        <span class="cod-text">Meningkatkan penjualan produkmu</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <img class="me-2" src="/assets/seller/img/icon-ceklis.svg" alt="">
                        <span class="cod-text">Meningkatkan kepercayaan pembeli pada tokomu</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <img class="me-2" src="/assets/seller/img/icon-ceklis.svg" alt="">
                        <span class="cod-text">Layanan cash on delivery dapat menarik pembeli untuk membeli produkmu</span>
                    </div>
                    <hr style="border: 1px solid #E0E0E0;">
                    <h6 class="cod-title">Syarat dan Ketentuan</h6>
                    <div class="d-flex align-items-center mb-2">
                        <img class="me-2" src="/assets/seller/img/icon-ceklis.svg" alt="">
                        <span class="cod-text">Fitur COD bisa digunakan oleh semua pengguna yang terdaftar pada aplikasi Blanjaloka</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <img class="me-2" src="/assets/seller/img/icon-ceklis.svg" alt="">
                        <span class="cod-text">Pembayaran COD akan dibayarkan terlebih dahulu oleh driver blanjaloka</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <img class="me-2" src="/assets/seller/img/icon-ceklis.svg" alt="">
                        <span class="cod-text">Pengiriman produk harus menggunakan kurir driver blanjaloka</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <img class="me-2" src="/assets/seller/img/icon-ceklis.svg" alt="">
                        <span class="cod-text">Proses pengiriman dan pengembalian produk harus sesuai dengan kebijakan bayar di tempat.</span>
                    </div>
                    <div class="d-flex align-items-center mb-5">
                        <img class="me-2" src="/assets/seller/img/icon-ceklis.svg" alt="">
                        <span class="cod-text">Blanjaloka berhak untuk menghentikan layanan cod apabila pedagang melakukan tindak kejahatan dan kecurangan.</span>
                    </div>
                    <div class="form-check text-center mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label cod-text2" for="flexCheckDefault">Saya menyetujui <a href="" style="color: #00838F;">Syarat dan Ketentuan</a> cash on delivery</label>
                    </div>
                    <button class="btn btn-aktifkan-cod d-block mx-auto mb-3" type="button">Aktifkan Layanan Cash On Delivery </button>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection