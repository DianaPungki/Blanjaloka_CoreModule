@extends('seller.layouts.main')
@section('container')

<h1 class="title-page mb-1">Sewa Toko</h1>
<h6 class="text-title-page mb-4">Pantau semua perihal sewa toko di sini!</h6>

<div class="row">
    <div class="col-md-9">
        <div class="card-sewa-toko shadow bg-white pb-5 mb-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-center"><img class="me-2" src="/assets/seller/img/icon-sewa-toko.svg" width="50px">
                    <div>
                        <p class="text2-card-status-toko mb-0">Sewa Toko</p>
                        <h6 class="title-card-status-toko mb-0">3 Bulan</h6>
                    </div>
                </div>
                <div class="text-end">
                    <p class="text2-card-status-toko mb-0">Masa Aktif Toko Sampai</p>
                    <h6 class="title-card-status-toko mb-0">12 Juni 2022</h6>
                </div>
            </div>

            <button class="btn btn-bukti-sewa" data-bs-toggle="modal" data-bs-target="#bukti-sewa" type="button">Bukti Sewa</button>
        </div>

        <div class="card-sewa-toko shadow bg-white">
            <h5 class="title-card-riwayat-tagihan mb-3">Riwayat Tagihan</h5>
            <div class="table-riwayat-tagihan">
                <table class="table">
                    <thead class="table-header-riwayat-tagihan">
                        <tr>
                            <th class="text-table-header-riwayat" scope="col">No.</th>
                            <th class="text-table-header-riwayat" scope="col">Periode Tagihan</th>
                            <th class="text-table-header-riwayat" scope="col">Jangka Waktu Sewa</th>
                            <th class="text-table-header-riwayat" scope="col">Biaya Sewa Toko</th>
                            <th class="text-table-header-riwayat" scope="col">Batas Waktu Pembayaran</th>
                            <th class="text-table-header-riwayat" scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-table-body-riwayat">1.</th>
                            <th class="text-table-body-riwayat">Juli 2022</th>
                            <th class="text-table-body-riwayat">1 Bulan</th>
                            <th class="text-table-body-riwayat">Rp. 210.000</th>
                            <th class="text-table-body-riwayat">26 Juli 2022</th>
                            <th class="text-table-body-riwayat">
                                <span class="status-red">Belum Bayar</span>
                            </th>
                        </tr>
                        <tr>
                            <th class="text-table-body-riwayat">2.</th>
                            <th class="text-table-body-riwayat">April 2022</th>
                            <th class="text-table-body-riwayat">3 Bulan</th>
                            <th class="text-table-body-riwayat">Rp. 540.000</th>
                            <th class="text-table-body-riwayat">26 April 2022</th>
                            <th class="text-table-body-riwayat">
                                <span class="status-green">Sudah Dibayar</span>
                            </th>
                        </tr>
                        <tr>
                            <th class="text-table-body-riwayat">3.</th>
                            <th class="text-table-body-riwayat">Maret 2022</th>
                            <th class="text-table-body-riwayat">1 Bulan</th>
                            <th class="text-table-body-riwayat">Rp. 210.000</th>
                            <th class="text-table-body-riwayat">26 Maret 2022</th>
                            <th class="text-table-body-riwayat">
                                <span class="status-green">Sudah Dibayar</span>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card-tagihan-anda shadow bg-white">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="title-card-tagihan-anda">Tagihan Anda</h6>
                <span class="status-red">Belum Dibayar</span>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="text1-card-tagihan-anda">Periode <br> Tagihan</span>
                <span class="text2-card-tagihan-anda">Okt 2021</span>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="text1-card-tagihan-anda">Jangka Waktu <br> Sewa</span>
                <span class="text2-card-tagihan-anda">1 Bulan</span>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="text1-card-tagihan-anda">Biaya Sewa <br> Toko</span>
                <span class="text2-card-tagihan-anda">Rp. 210.000</span>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-4">
                <span class="text1-card-tagihan-anda">Batas Waktu <br> Pembayaran</span>
                <span class="text2-card-tagihan-anda">26 Okt 2021</span>
            </div>
            <div style="border-bottom: 2px dashed #616161;"></div>
            <div class="text-end mt-3 mb-5">
                <span class="text3-card-tagihan-anda">Total Tagihan</span>
                <h6 class="text4-card-tagihan-anda mt-1">Rp. 210.000</h6>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="bukti-sewa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body" style="background-color: #F3F3F3; padding: 3%;">
                    <div class="popup-bukti-sewa mb-4">
                        <img class="d-block mx-auto mb-5" src="/assets/seller/img/logopr.svg" alt="">

                        <div class="text-bukti-sewa1 mb-1">ID Transaksi : <span class="text-bukti-sewa2">121093112301920</span></div>
                        <div class="text-bukti-sewa1 mb-1">Tanggal Mulai Sewa : <span class="text-bukti-sewa2">26 Sep 2021</span></div>
                        <div class="text-bukti-sewa1 mb-1">Metode Pembayaran : <span class="text-bukti-sewa2">BCA Virtual Account</span></div>
                        <div class="text-bukti-sewa1 mb-4">Status Pembayaran : <span class="status-green"><img src="/assets/seller/img/icon-ceklis-green.svg" width="12px" alt=""> Lunas</span></div>

                        <table class="table mx-auto mb-5" style="border: 1px solid #E0E0E0;">
                            <thead style="background-color: #EDEDED">
                                <tr>
                                    <th class="col-md-4 text-bukti-sewa2 text-left">Deskripsi</th>
                                    <th class="col-md-4 text-bukti-sewa2 text-center">Biaya Sewa</th>
                                    <th class="col-md-4 text-bukti-sewa2 text-right">Sistem Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="col-md-4 text-bukti-sewa3 text-left">Sewa Toko <br> <span class="text-bukti-sewa1">(3 bulan)</span></th>
                                    <th class="col-md-4 text-bukti-sewa3 text-center">Rp 540.000</th>
                                    <th class="col-md-4 text-bukti-sewa3 text-right">Sekali Bayar <br> (Rp 540.000)</th>
                                </tr>
                                <tr>
                                    <th class="col-md-4 text-bukti-sewa1 text-left" style="font-size: 14px">Total pembayaran :</th>
                                    <th class="col-md-4"></th>
                                    <th class="col-md-4 text-bukti-sewa2 text-right" style="font-size: 14px">Rp 540.000</th>
                                </tr>                               
                            </tbody>                                     
                        </table>

                        <div class="d-flex justify-content-end">
                            <div class="text-center">
                                <img class="d-block mx-auto mb-2" src="/assets/seller/img/tanda-tangan.svg" alt="">
                                <p class="text-bukti-sewa2 mb-0">Irmawati</p>
                                <p class="text-bukti-sewa1">Finance Team Lead</p>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-untuh-bukti-sewa ms-auto"><img class="me-2" src="/assets/seller/img/icon-unduh.svg" alt=""> Unduh Bukti Sewa</button>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection