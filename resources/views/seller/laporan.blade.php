@extends('seller.layouts.main')
@section('container')

<!-- Page Heading -->

<h1 class="text-laporan mb-0 text-dark "> Laporan</h1>
<h6 class="text-laporan-toko text-secondary"> Laporan tokomu ada disini!</h6>

<div class="row">

    <div class="col-lg-12">

     <!-- Circle Buttons -->
     <div class="card shadow mb-4">
            <div class="card-body">
                 <div class="row">
                        <div class="col-md-6">
                <form>
                    <div class="row">
                    <h3 class="text-kriteria-utama text-dark ">Kriteria Utama</h3>

                        <div class="col-sm-4">

                        <h6 class="text-periode-data text-dark "><img src="/assets/seller/img/icon-tanggal.svg" style="margin-left: 5px;" alt=""> Periode Data</h6>
                        </div>
                        <div class="col-sm-4">
                            <input class="date-laporan form-control " type="date"
                                id="tanggal-laporan" name="tanggal-laporan">
                        </div>
                        <div class="col-sm-3">
                        <button type="button" class="btn-tampilkan btn btn-light btn-sm ">
                            <h6 class="text-tampilkan">Tampilkan</h6>
                        </button>
                        </div>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-12">
                    <button type="button" class="btn-cetak-data btn btn-light btn-sm ">

                            <h6 class="text-cetak-data"><img src="/assets/seller/img/icon-cetak-data.svg" alt=""> Cetak Data</h6>
                        </button>
                        </div>
                        </div>
                    </div>
                    </form>
                    </div>
                    </div>


                <ul class="nav  mb-5 mt-1" id="pills-tab" role="tablist">
                    <li class="nav-item " role="presentation">
                        <button class="nav-link active btn-lg btn btn-light btn-penjualan "
                            id="pills-penjualan-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-penjualan" type="button" role="tab"
                            aria-controls="pills-penjualan" aria-selected="true">
                            <span> Penjualan </span><br>
                            <span> Rp 0 </span><br>
                            <label> Hari ini pukul 00.00 - 23.59 </label>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link  btn-lg btn btn-light btn-pesanan "
                            id="pills-pesanan-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-pesanan" type="button" role="tab"
                            aria-controls="pills-pesanan" aria-selected="false">
                            <span> Pesanan </span><br>
                            <span> Rp 0 </span><br>
                            <label> Hari ini pukul 00.00 - 23.59 </label>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link btn-lg btn btn-light btn-total-pengunjung"
                            id="pills-total-pengunjung-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-total-pengunjung" type="button" role="tab"
                            aria-controls="pills-total-pengunjung" aria-selected="false">
                            <span> Total Pengunjung </span><br>
                            <span> Rp 0 </span><br>
                            <label> Hari ini pukul 00.00 - 23.59 </label>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link btn-lg btn btn-light btn-produk-dilihat"
                            id="pills-produk-dilihat-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-produk-dilihat" type="button" role="tab"
                            aria-controls="pills-produk-dilihat" aria-selected="false">
                            <span> Produk Dilihat </span><br>
                            <span> Rp 0 </span><br>
                            <label> Hari ini pukul 00.00 - 23.59 </label>
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <h6 class="text-grafik text-dark font-weight-bolder">Grafik Kriteria Penjualan
                    </h6>
                    <div class="tab-pane fade show active" id="pills-penjualan" role="tabpanel"
                        aria-labelledby="pills-penjualan-tab">

                        <div class="card-body">
                            <div class="chart-area mb-5">
                                <canvas id="myAreaChart1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-pesanan" role="tabpanel"
                        aria-labelledby="pills-pesanan-tab">
                        <div class="card-body">
                            <div class="chart-area mb-5">
                                <canvas id="myAreaChart2">

                                </canvas>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-total-pengunjung" role="tabpanel"
                        aria-labelledby="pills-total-pengunjung-tab">
                        <div class="card-body">
                            <div class="chart-area mb-5">
                                <canvas id="myAreaChart3">
                                </canvas>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-produk-dilihat" role="tabpanel"
                        aria-labelledby="pills-produk-dilihat-tab">
                        <div class="card-body">
                            <div class="chart-area mb-5">
                                <canvas id="myAreaChart4">
                                </canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">

<div class="card shadow mb-4">
    <div class="card-body">
        <h3 class="text-daftar-pesanan-selesai text-dark mb-5 ">Daftar Pesanan Selesai</h3>

        <div class="table-peringkat-produk">
            <table class="table text-dark">
                <thead style="background-color:#EAEAEA;">
                    <tr>
                        <th scope="col" class="informasi-produk ">Informasi Produk</th>
                        <th scope="col" class="jumlah-produk">Jumlah Produk</th>
                        <th scope="col" class="harga-produk">Harga Produk</th>
                        <th scope="col" class="status">Status</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>
                            <img src="/assets/seller/img/Supermarket workers-pana 4.png" alt=""><br>
                            Belum ada laporan tokomu:(
                        </td>
                    </tr>
                    <tr>

                    </tr>
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
