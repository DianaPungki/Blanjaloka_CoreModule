@extends('seller.layouts.main')
@section('container')

    <!-- Page Heading -->

    <h1 class="text-promo mb-0 text-dark "> Promo</h1>
    <h6 class="text-atur-promo mt-1 mb-3 text-secondary"> Atur promo tokomu disini!</h6>

    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="text-daftar-promo mt-1 mb-0 text-dark "> Daftar Promo</h1>
                <h6 class="text-buat-promo mt-1 text-secondary"> Buat promo supaya produkmu lebih
                    menarik!</h6>

                <ul class="nav pills-page-voucher nav-justified mb-1" id="pills-tab" role="tablist"
                    style="float: left;">
                    <li class="nav-item nav-item-page-voucher ms-3" role="presentation">
                        <a class="nav-link nav-link-page-voucher active " id="pills-semua"
                            data-bs-toggle="pill" data-bs-target="#semua" type="button" role="tab"
                            aria-controls="semua" aria-selected="true">Semua</a>
                    </li>
                    <li class="nav-item nav-item-page-voucher" role="presentation">
                        <a class="nav-link nav-link-page-voucher text-dark" id="pills-sedang-berjalan"
                            data-bs-toggle="pill" data-bs-target="#sedang-berjalan" type="button"
                            role="tab" aria-controls="sedang-berjalan" aria-selected="false">Sedang
                            Berjalan</a>
                    </li>
                    <li class="nav-item nav-item-page-voucher" role="presentation">
                        <a class="nav-link nav-link-page-voucher text-dark" id="pills-akan-datang"
                            data-bs-toggle="pill" data-bs-target="#akan-datang" type="button" role="tab"
                            aria-controls="akan-datang" aria-selected="false">Akan Datang</a>
                    </li>
                    <li class="nav-item nav-item-page-voucher" role="presentation">
                        <a class="nav-link nav-link-page-voucher text-dark" id="pills-telah-berakhir"
                            data-bs-toggle="pill" data-bs-target="#telah-berakhir" type="button"
                            role="tab" aria-controls="telah-berakhir" aria-selected="false">Telah
                            Berakhir</a>
                    </li>
                </ul>
                <a href="tambah-promo"
                    class="btn-tambah-promo btn btn-light btn-sm mt-2" role="button"
                    aria-pressed="true">
                    <h6 class="text-tambah-promo"><i class="fa fa-plus" aria-hidden="true"></i>Tambah Promo</h6>
                </a>

            </div>
            <div class="tab-content mt-4" id="pills-tabContent">
                <div class="tab-pane fade show active" id="semua" role="tabpanel"
                    aria-labelledby="pills-semua">
                    <div class="table-promo">
                        <table class="table text-dark">
                            <thead style="background-color:#EAEAEA;">
                                <tr>
                                    <th class="col-sm-2" style="padding-left:30px">Jenis Promo</th>
                                    <th class="col-sm-3" style="padding-left:30px">Produk yang dipilih
                                    </th>
                                    <th class="col-sm-2">Diskon</th>
                                    <th class="col-sm-2">Periode Promo</th>
                                    <th class="col-sm-1">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span> Promo Produk </span></td>
                                    <td>
                                        <div class="img-table-promo mb-2" style="display: flex;  ">
                                            <img src="/assets/seller/img/minyak-goreng.png" alt="" class="ms-5">
                                            <div>
                                                <p class="text-left">Minyak Goreng</p>
                                                <p class="text-left">Rp 28.000 /ltr</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>10%</span>
                                    </td>
                                    <td><span> 28/03/2022-</span> <br>
                                        <span> 01/04/2022</span>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-switch"
                                            style="margin-left:10px">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customSwitch1">
                                            <label class="custom-control-label"
                                                for="customSwitch1"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span> Flash Sale Jum’at </span>
                                    </td>
                                    <td>
                                        <div class="img-table-promo mb-2 " style="display: flex;  ">
                                            <img src="/assets/seller/img/cabe-merah-keriting.png" alt=""
                                                class="ms-5">
                                            <div>
                                                <p class="text-left ">Cabai Merah Keriting</p>
                                                <p class="text-left ">Rp 30.000 /Kg</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>
                                            50%
                                        </span>
                                    </td>
                                    <td>
                                        <span>28/03/2022-</span> <br>
                                        <span>01/04/2022</span>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-switch"
                                            style="margin-left: 10px">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customSwitch1">
                                            <label class="custom-control-label"
                                                for="customSwitch1"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                </tr>
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="sedang-berjalan" role="tabpanel"
                    aria-labelledby="pills-sedang-berjalan">

                </div>
                <div class="tab-pane fade" id="akan-datang" role="tabpanel"
                    aria-labelledby="pills-akan-datang">

                </div>

                <div class="tab-pane fade" id="telah-berakhir" role="tabpanel"
                    aria-labelledby="pills-telah-berakhir">

                </div>
            </div>
        </div>
    </div>

@endsection
