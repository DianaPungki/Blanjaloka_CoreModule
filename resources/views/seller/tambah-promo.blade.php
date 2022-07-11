@extends('seller.layouts.main')
@section('container')

<h1 class="text-promo mb-0 text-dark "> Promo</h1>
<h6 class="text-atur-promo mt-1 mb-3 text-secondary"> Atur promo tokomu disini!</h6>
<div class="shadow page-tambah-produk bg-white">

    <h1 class="title-tambah-promo mb-4">Buat Promo Baru</h1>

    <div class="row">
        <div class="col-md-6">
            <form action="">
                <div class="row g-2 mb-3">
                    <div class="col-sm-3">
                        <label class="label-form-tambah-promo col-form-label">Jenis Promo</label>
                    </div>
                    <div class="col-sm-9">
                        <select class="input-form-tambah-promo form-select"
                            aria-label="Default select example">
                            <option value="1">Promo 11.11</option>
                            <option value="2">Flah Sale Jum’at</option>
                            <option value="3">Promo Produk</option>
                            <option value="4">Promo Weekend</option>

                        </select>
                    </div>

                </div>
                <label class="label-form-detail-promo col-form-label">Detail Promo</label>
                <div class="row g-2 mb-2">
                    <div class="col-sm-12">
                        <label class="label-form-pilih-produk col-form-label">Pilih Produk</label>
                        <div class="form-image-promo" inputmode="file">
                            <img class="d-block mx-auto" src="/assets/seller/img/icon-image-promo.svg" alt="">
                            <p class="text-center">Pilih Produk</p>
                        </div>
                    </div>
                </div>
                <label class="label-form-nominal-diskon col-form-label">Nominal Diskon</label>
                <div class="row g-2 mb-2">
                    <div class="col-sm-12">
                        <input type="text" class="input-form-tambah-diskon form-control"
                            placeholder="Masukkan Nominal Diskon">
                    </div>
                </div>

                <label class="label-form-kuota-diskon col-form-label">Kuota Diskon</label>
                <div class="row g-2 mb-1">
                    <div class="col-sm-12">
                        <input type="text" class="input-form-kuota-diskon form-control"
                            placeholder="Masukkan Kuota Diskon">
                        <label for="">Maks. 999</label>
                    </div>
                </div>
                <div class="mb-2">
                    <label class="label-form-tanggal-promo form-label">Tanggal Mulai Promo</label>
                    <div>
                        <input class="date-mulai-promo form-control" type="date"
                            id="tanggal-mulai-promo" name="tanggal-mulai-promo">
                    </div>
                </div>
                <div class="mb-2">
                    <label class="label-form-tanggal-promo form-label">Tanggal Berakhir
                        Promo</label>
                    <div>
                        <input class="date-akhir-promo form-control" type="date"
                            id="tanggal-akhir-promo" name="tanggal-akhir-promo">
                    </div>
                </div>


        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="img-promo mt-5">
                    <img src="/assets/seller/img/Supermarket workers-pana 2.png" alt="">
                </div>
            </div>
            <button type="button" class="btn btn-simpan-promo btn-light">
                <h6 class="text-simpan-promo">
                    Simpan Promo
                </h6>
            </button>
            <button type="button" class="btn btn-kembali btn-light">
                <h6 class="text-kembali">
                    Kembali
                </h6>
            </button>
        </div>

        </form>
    </div>

</div>

@endsection