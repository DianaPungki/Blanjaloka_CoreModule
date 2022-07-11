@extends('seller.layouts.main')
@section('container')
                    
<h1 class="title-page mb-1">Ulasan Pembeli</h1>
<h6 class="text-title-page mb-4">Jangan sampai lewatkan ulasan dari pembeli, hal ini bisa membuat tokomu berkembang!</h6>

<div class="card-ulasan-pembeli shadow bg-white pb-4">
    <div class="heading-card-ulasan-pembeli d-flex align-items-center justify-content-between">
        <span class="text-heading-card me-2">Periode Ulasan</span>
        <div class="d-flex align-items-center justify-content-between me-auto">
            <input class="date-ulasan-pembeli me-2" type="date" id="tanggal-ulasan-pembeli" name="tanggal-ulasan-pembeli">
            <hr style="width:15px; color: black;">
            <input class="date-ulasan-pembeli ms-2" type="date" id="tanggal-ulasan-pembeli" name="tanggal-ulasan-pembeli">
        </div>
    </div>

    <ul class="nav pills-page-ulasan mb-3" id="pills-tab" role="tablist">
        <li class="nav-item nav-item-page-ulasan ms-2" role="presentation">
            <a class="nav-link nav-link-page-ulasan active" id="pills-semua-ulasan" data-bs-toggle="pill" data-bs-target="#semua-ulasan" type="button" role="tab" aria-controls="semua-ulasan" aria-selected="true">Semua</a>
        </li>
        <li class="nav-item nav-item-page-ulasan ms-3" role="presentation">
            <a class="nav-link nav-link-page-ulasan" id="pills-ulasan-bintang-5" data-bs-toggle="pill" data-bs-target="#ulasan-bintang-5" type="button" role="tab" aria-controls="ulasan-bintang-5" aria-selected="false">
                <img src="/assets/seller/img/icon-star.svg" alt="" width="15px">
                <img src="/assets/seller/img/icon-star.svg" alt="" width="15px">
                <img src="/assets/seller/img/icon-star.svg" alt="" width="15px">
                <img src="/assets/seller/img/icon-star.svg" alt="" width="15px">
                <img src="/assets/seller/img/icon-star.svg" alt="" width="15px">
                <span>(5)</span>
            </a>
        </li>
        <li class="nav-item nav-item-page-ulasan ms-3" role="presentation">
            <a class="nav-link nav-link-page-ulasan" id="pills-ulasan-bintang-4" data-bs-toggle="pill" data-bs-target="#ulasan-bintang-4" type="button" role="tab" aria-controls="ulasan-bintang-4" aria-selected="false">
                <img src="/assets/seller/img/icon-star.svg" alt="" width="15px">
                <img src="/assets/seller/img/icon-star.svg" alt="" width="15px">
                <img src="/assets/seller/img/icon-star.svg" alt="" width="15px">
                <img src="/assets/seller/img/icon-star.svg" alt="" width="15px">
                <span>(4)</span>
            </a>
        </li>
        <li class="nav-item nav-item-page-ulasan ms-3" role="presentation">
            <a class="nav-link nav-link-page-ulasan" id="pills-ulasan-bintang-3" data-bs-toggle="pill" data-bs-target="#ulasan-bintang-3" type="button" role="tab" aria-controls="ulasan-bintang-3" aria-selected="false">
                <img src="/assets/seller/img/icon-star.svg" alt="" width="15px">
                <img src="/assets/seller/img/icon-star.svg" alt="" width="15px">
                <img src="/assets/seller/img/icon-star.svg" alt="" width="15px">
                <span>(3)</span>
            </a>
        </li>
        <li class="nav-item nav-item-page-ulasan ms-3" role="presentation">
            <a class="nav-link nav-link-page-ulasan" id="pills-ulasan-bintang-2" data-bs-toggle="pill" data-bs-target="#ulasan-bintang-2" type="button" role="tab" aria-controls="ulasan-bintang-2" aria-selected="false">
                <img src="/assets/seller/img/icon-star.svg" alt="" width="15px">
                <img src="/assets/seller/img/icon-star.svg" alt="" width="15px">
                <span>(2)</span>
            </a>
        </li>
        <li class="nav-item nav-item-page-ulasan ms-3" role="presentation">
            <a class="nav-link nav-link-page-ulasan" id="pills-ulasan-bintang-1" data-bs-toggle="pill" data-bs-target="#ulasan-bintang-1" type="button" role="tab" aria-controls="ulasan-bintang-1" aria-selected="false">
                <img src="/assets/seller/img/icon-star.svg" alt="" width="15px">
                <span>(1)</span>
            </a>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="semua-ulasan" role="tabpanel" aria-labelledby="pills-semua-ulasan" style="padding: 0 100px;">
            <div class="content-ulasan-pembeli mb-3">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Packing rapih dan aman, pengirimannya cepat, barangnya fresh, dan pedagang sangat ramah. Terimakasih!!</span>
                </div>
            </div>

            <div class="content-ulasan-pembeli mb-3">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Beli ini pas lagi flash sale. barang nya bagus, harganya lebih murah dari toko lain, pengirimannya juga cepet banget!! seller nya ramah dan cepet banget bales chat nya. Terimakasih:)</span>
                </div>
            </div>

            <div class="content-ulasan-pembeli">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Beli gula untuk modal usaha. Harga murah tapi kualitas tidak murahan. Seller ramah. Saya sudah langganan dari dulu, berkali-kali belanja disini. tapi kali ini pengirimannya agak lama. tapi gak apa apa. sukses terus.</span>
                </div>
            </div>

        </div>

        <div class="tab-pane fade" id="ulasan-bintang-5" role="tabpanel" aria-labelledby="pills-ulasan-bintang-5" style="padding: 0 100px;">
            <div class="content-ulasan-pembeli mb-3">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Packing rapih dan aman, pengirimannya cepat, barangnya fresh, dan pedagang sangat ramah. Terimakasih!!</span>
                </div>
            </div>

            <div class="content-ulasan-pembeli mb-3">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Beli ini pas lagi flash sale. barang nya bagus, harganya lebih murah dari toko lain, pengirimannya juga cepet banget!! seller nya ramah dan cepet banget bales chat nya. Terimakasih:)</span>
                </div>
            </div>

            <div class="content-ulasan-pembeli">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Beli gula untuk modal usaha. Harga murah tapi kualitas tidak murahan. Seller ramah. Saya sudah langganan dari dulu, berkali-kali belanja disini. tapi kali ini pengirimannya agak lama. tapi gak apa apa. sukses terus.</span>
                </div>
            </div>

        </div>

        <div class="tab-pane fade" id="ulasan-bintang-4" role="tabpanel" aria-labelledby="pills-ulasan-bintang-4" style="padding: 0 100px;">
            <div class="content-ulasan-pembeli mb-3">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Packing rapih dan aman, pengirimannya cepat, barangnya fresh, dan pedagang sangat ramah. Terimakasih!!</span>
                </div>
            </div>

            <div class="content-ulasan-pembeli mb-3">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Beli ini pas lagi flash sale. barang nya bagus, harganya lebih murah dari toko lain, pengirimannya juga cepet banget!! seller nya ramah dan cepet banget bales chat nya. Terimakasih:)</span>
                </div>
            </div>

            <div class="content-ulasan-pembeli">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Beli gula untuk modal usaha. Harga murah tapi kualitas tidak murahan. Seller ramah. Saya sudah langganan dari dulu, berkali-kali belanja disini. tapi kali ini pengirimannya agak lama. tapi gak apa apa. sukses terus.</span>
                </div>
            </div>

        </div>

        <div class="tab-pane fade" id="ulasan-bintang-3" role="tabpanel" aria-labelledby="pills-ulasan-bintang-3" style="padding: 0 100px;">
            <div class="content-ulasan-pembeli mb-3">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Packing rapih dan aman, pengirimannya cepat, barangnya fresh, dan pedagang sangat ramah. Terimakasih!!</span>
                </div>
            </div>

            <div class="content-ulasan-pembeli mb-3">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Beli ini pas lagi flash sale. barang nya bagus, harganya lebih murah dari toko lain, pengirimannya juga cepet banget!! seller nya ramah dan cepet banget bales chat nya. Terimakasih:)</span>
                </div>
            </div>

            <div class="content-ulasan-pembeli">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Beli gula untuk modal usaha. Harga murah tapi kualitas tidak murahan. Seller ramah. Saya sudah langganan dari dulu, berkali-kali belanja disini. tapi kali ini pengirimannya agak lama. tapi gak apa apa. sukses terus.</span>
                </div>
            </div>

        </div>

        <div class="tab-pane fade" id="ulasan-bintang-2" role="tabpanel" aria-labelledby="pills-ulasan-bintang-2" style="padding: 0 100px;">
            <div class="content-ulasan-pembeli mb-3">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Packing rapih dan aman, pengirimannya cepat, barangnya fresh, dan pedagang sangat ramah. Terimakasih!!</span>
                </div>
            </div>

            <div class="content-ulasan-pembeli mb-3">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Beli ini pas lagi flash sale. barang nya bagus, harganya lebih murah dari toko lain, pengirimannya juga cepet banget!! seller nya ramah dan cepet banget bales chat nya. Terimakasih:)</span>
                </div>
            </div>

            <div class="content-ulasan-pembeli">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Beli gula untuk modal usaha. Harga murah tapi kualitas tidak murahan. Seller ramah. Saya sudah langganan dari dulu, berkali-kali belanja disini. tapi kali ini pengirimannya agak lama. tapi gak apa apa. sukses terus.</span>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="ulasan-bintang-1" role="tabpanel" aria-labelledby="pills-ulasan-bintang-1" style="padding: 0 100px;">
            <div class="content-ulasan-pembeli mb-3">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Packing rapih dan aman, pengirimannya cepat, barangnya fresh, dan pedagang sangat ramah. Terimakasih!!</span>
                </div>
            </div>

            <div class="content-ulasan-pembeli mb-3">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Beli ini pas lagi flash sale. barang nya bagus, harganya lebih murah dari toko lain, pengirimannya juga cepet banget!! seller nya ramah dan cepet banget bales chat nya. Terimakasih:)</span>
                </div>
            </div>

            <div class="content-ulasan-pembeli">
                <div class="header-content d-flex align-items-center justify-content-between">
                    <div>
                        <img class="rounded-circle me-1" width="35px" src="/assets/seller/img/undraw_profile.svg">
                        <span class="nama-pembeli">Joko Susilo</span>
                    </div>
                    <span class="tanggal-ulasan">20 Maret 2022</span>
                </div>
                <div class="body-content">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <img class="img-ulasan me-2" src="/assets/seller/img/cabe-merah-keriting.png" alt="">
                            <span class="text1-body-content">Cabai Merah Keriting 3 Kg</span>
                        </div>
                        <div>
                            <img src="/assets/seller/img/icon-star.svg" alt="" width="24px">
                        </div>
                    </div>
                    <span class="text2-body-content">Beli gula untuk modal usaha. Harga murah tapi kualitas tidak murahan. Seller ramah. Saya sudah langganan dari dulu, berkali-kali belanja disini. tapi kali ini pengirimannya agak lama. tapi gak apa apa. sukses terus.</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection