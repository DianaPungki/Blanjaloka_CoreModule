@extends('seller.layouts.main')
@section('container')

<!-- Content Row -->
<div class="row">

    <div class="col-md-9">
        <div class="row">
            <!-- Page Heading -->
            <div class="align-items-center mb-4">
                <h1 class="h3 mb-0 text-black fw-bold">Dashboard</h1>
                <span>Rangkuman penjualan tokomu ada disini</span>
            </div> 

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 mb-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="heading-update-card mb-2">Penjualan Hari ini</div>
                        <div class="number-update-card">
                            <h4 class="fw-bold text-black me-3">10</h4>
                            <img src="/assets/seller/img/icon-arrow-up.svg" alt="">
                        </div>
                        <div class="text-update-card">Penjualan naik 25% semenjak kemarin</div>
                    </div>
                </div>
            </div>
    
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 mb-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="heading-update-card mb-2">Pengunjung hari ini</div>
                        <div class="number-update-card">
                            <h4 class="fw-bold text-black me-3">29</h4>
                            <img src="/assets/seller/img/icon-arrow-up.svg" alt="">
                        </div>
                        <div class="text-update-card">Penjualan +6 semenjak kemarin</div>
                    </div>
                </div>
            </div>
    
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 mb-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="heading-update-card mb-2">Perlu dikemas</div>
                        <div class="number-update-card">
                            <h4 class="fw-bold text-black">10<span class="ms-3" style="font-size: 11px;">Pesanan</span></h4>
                            <!-- <span>Pesanan</span> -->
                        </div>
                        <div class="text-update-card text-primary">Segera kemas dan kirim ke pelanggan!</div>
                    </div>
                </div>
            </div>

            <!-- Area Chart -->
            <div class="col-xl-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="heading-chart-card m-0 font-weight-bold text-black">Statistik Penjualan</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area mb-5">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- KALENDER -->
    <div class="col-xl-3 col-lg-5">
        <div class="align-items-center mb-4">
            <h1 class="h3 mb-0 text-black fw-bold">Pemberitahuan</h1>
            <span>Pengumuman dan pemberitahuan bisa dilihat di sini</span>
        </div>

        <div class="card shadow mb-4">
            
            <main>
                <div class="calendar">
                <div class="day-of-week">
                    <div class="fw-bold">Sen</div>
                    <div class="fw-bold">Sel</div>
                    <div class="fw-bold">Rab</div>
                    <div class="fw-bold">Kam</div>
                    <div class="fw-bold">Jum</div>
                    <div class="fw-bold">Sab</div>
                    <div class="fw-bold">Min</div>
                </div>
                <div class="date-grid">
                    <button>
                    <time datetime="2019-02-01">1</time>
                    </button>
                    <button>
                    <time datetime="2019-02-02">2</time>
                    </button>
                    <button>
                    <time datetime="2019-02-03">3</time>
                    </button>
                    <button>
                    <time datetime="2019-02-04">4</time>
                    </button>
                    <button>
                    <time datetime="2019-02-05">5</time>
                    </button>
                    <button>
                    <time datetime="2019-02-06">6</time>
                    </button>
                    <button>
                    <time datetime="2019-02-07">7</time>
                    </button>
                    <button>
                    <time datetime="2019-02-08">8</time>
                    </button>
                    <button>
                    <time datetime="2019-02-09">9</time>
                    </button>
                    <button>
                    <time datetime="2019-02-10">10</time>
                    </button>
                    <button>
                    <time datetime="2019-02-11">11</time>
                    </button>
                    <button>
                    <time datetime="2019-02-12">12</time>
                    </button>
                    <button>
                    <time datetime="2019-02-13">13</time>
                    </button>
                    <button>
                    <time datetime="2019-02-14">14</time>
                    </button>
                    <button>
                    <time datetime="2019-02-15">15</time>
                    </button>
                    <button>
                    <time datetime="2019-02-16">16</time>
                    </button>
                    <button>
                    <time datetime="2019-02-17">17</time>
                    </button>
                    <button>
                    <time datetime="2019-02-18">18</time>
                    </button>
                    <button>
                    <time datetime="2019-02-19">19</time>
                    </button>
                    <button>
                    <time datetime="2019-02-20">20</time>
                    </button>
                    <button>
                    <time datetime="2019-02-21">21</time>
                    </button>
                    <button>
                    <time datetime="2019-02-22">22</time>
                    </button>
                    <button>
                    <time datetime="2019-02-23">23</time>
                    </button>
                    <button>
                    <time datetime="2019-02-24">24</time>
                    </button>
                    <button>
                    <time datetime="2019-02-25">25</time>
                    </button>
                    <button>
                    <time datetime="2019-02-26">26</time>
                    </button>
                    <button>
                    <time datetime="2019-02-27">27</time>
                    </button>
                    <button>
                    <time datetime="2019-02-28">28</time>
                    </button>
                    <button>
                        <time datetime="2019-02-29">29</time>
                    </button>
                    <button>
                        <time datetime="2019-02-30">30</time>
                    </button>
                </div>
                </div>
            </main>

            <div class="body-card mb-5">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <h3 class="important-date">14</h3>
                        <div class="dashed d-block mx-auto"></div>
                        <h3 class="important-date mt-2">16</h3>
                        <div class="dashed d-block mx-auto"></div>
                        <h3 class="important-date mt-2">19</h3>
                        <div class="dashed-last d-block mx-auto"></div>
                    </div>
                    <div class="col-md-9">
                        <h4 class="text-important-date mt-1">Maret</h4>
                        <li class="list-important-date mt-2">Laporan penjualan mingguan</li>
                        <li class="list-important-date">Pengecekan seller</li>
                        <h4 class="text-important-date mt-4">Maret</h4>
                        <li class="list-important-date mt-4">Hut Pasar</li>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End of kalender -->

    <div class="row">
        <!-- produk terlaris -->
        <div class="col-md-6 w-100">
            <div class="shadow produk-card bg-white">
                <div class="mb-4">
                    <h6 class="heading-produk-card text-black fw-bold mb-0">Produk Terlaris</h6>
                    <span class="text-produk-card">Produk terlaris dari toko kamu di minggu ini</span>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="shadow produk-terlaris-card1">
                            <img class="d-block mx-auto" src="/assets/seller/img/minyak-goreng.svg" alt="">
                            <div class="ms-2">
                                <h6 class="heading-produk-terlaris text-black mb-0">Minyak Goreng</h6>
                                <span class="total-produk">Total 1.752 produk terjual</span>
                            </div>

                            <div class="card-footer-produk me-2">
                                <span>terakhir dipesan <br> 6 menit yang lalu</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="shadow produk-terlaris-card2">
                            <img class="d-block mx-auto" src="/assets/seller/img/minyak-goreng.svg" alt="">
                            <div class="ms-2">
                                <h6 class="heading-produk-terlaris text-black mb-0">Minyak Goreng</h6>
                                <span class="total-produk">Total 1.752 produk terjual</span>
                            </div>

                            <div class="card-footer-produk me-2">
                                <span>terakhir dipesan <br> 6 menit yang lalu</span>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <a class="lihat-selengkapnya mb-3" href="">Lihat Selengkapnya</a>
            </div>
        </div>
        <!-- End of produk terlaris -->

        <!-- penilaian toko -->
        <div class="col-md-6 w-100">
            <div class="shadow produk-card bg-white">
                <div class="mb-4">
                    <h6 class="heading-produk-card text-black fw-bold mb-0">Penilaian Toko</h6>
                    <span class="text-produk-card">Pantau performa tokomu dari sini!</span>
                </div>
                
                <div id="semi-container"></div>

                <ul class="list-group">
                    <li class="list-penilaian-toko list-group-item d-flex justify-content-between align-items-center text-black font-weight-bolder mb-3">
                        Kepuasaan Pelanggan  
                        <span class="text-black"><img src="/assets/seller/img/icon-star.svg" alt="" style="padding-bottom: 5px; "> 4.8/5 </span>
                    </li>   
                    <li class="list-penilaian-toko list-group-item d-flex justify-content-between align-items-center text-black font-weight-bolder mb-3">
                        Kecepatan Proses  
                        <span class="text-black"><img src="/assets/seller/img/icon-star.svg" alt="" style="padding-bottom: 5px;"> 4.7/5 </span>
                    </li>                                 
                    <li class="list-penilaian-toko list-group-item d-flex justify-content-between align-items-center text-black font-weight-bolder mb-3">
                        Keseluruhan Nilai  
                        <span class="text-black"><img src="/assets/seller/img/icon-star.svg" alt="" style="padding-bottom: 5px;"> 4.9/5 </span>
                    </li>                                                            
                </ul>

                <a class="lihat-selengkapnya mb-3" href="">Lihat Selengkapnya</a>
            </div>
        </div>

    </div>

</div>

@endsection