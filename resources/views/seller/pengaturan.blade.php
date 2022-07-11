@extends('seller.layouts.main')
@section('container')
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
@if($errors->any())
@foreach($errors->all() as $err)
<p class="alert alert-danger">{{ $err }}</p>
@endforeach
@endif
                    
<h1 class="title-page mb-1">Pengaturan Akun</h1>
<h6 class="text-title-page mb-5">Atur akun blanjaloka-mu disini!</h6>

<div class="card-settings shadow bg-white mx-auto">
    <form action="{{ route('password.action') }}" method="POST">
        @csrf
    <div class="row">        
        <div class="col-md-4 pe-0" style="padding: 2% 2.5%; border-right: 1px solid #E0E0E0;;">
            <h6 class="text1-card-settings">Pengaturan Akun</h6>
            <div class="list-settings nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="active mb-1" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    <span class="text2-card-settings">Profil Akun</span>
                    <img src="/assets/seller/img/icon-chevron-right-black.svg" alt="">
                </a>
                <a class="mb-1" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    <span class="text2-card-settings">Rekening Bank</span>
                    <img src="/assets/seller/img/icon-chevron-right-black.svg" alt="">
                </a>
                <a class="mb-1" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                    <span class="text2-card-settings">Kata Sandi</span>
                    <img src="/assets/seller/img/icon-chevron-right-black.svg" alt="">
                </a>
            </div>
        </div>

        <div class="col-md-8" style="padding: 2% 5%; height: 580px;">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <h5 class="title-card-settings mb-4">Profil Akun</h5>
                    <div class="mb-3">
                        <label class="label-card-settings form-label">Nama Lengkap</label>
                        <input type="text" class="form-settings form-control" placeholder="Sudjaya">
                    </div>
                    <div class="mb-3">
                        <label class="label-card-settings form-label">Nomor Handphone</label>
                        <input type="text" class="form-settings form-control" placeholder="087896554321">
                    </div>
                    <div class="mb-3">
                        <label class="label-card-settings form-label">Alamat Email</label>
                        <input type="email" class="form-settings form-control" placeholder="Sudjaya1004@gmail.com">
                    </div>
                    <div class="label-card-settings mb-1">
                        <span>Foto KTP</span>
                        <img src="/assets/seller/img/icon-info.svg" width="14px" alt="">
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-settings form-control" id="foto-ktp">      
                    </div>
                    <div class="mb-5">
                        <label for="tanggal-lahir" class="label-card-settings form-label mb-1">Tanggal Lahir</label>
                        <input type="text" class="form-settings form-control" id="date" placeholder="1998-06-10" aria-describedby="tanggal-lahir">
                    </div>

                    <button class="btn btn-simpan-card-settings" type="button">Simpan</button>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <h5 class="title-card-settings mb-4">Rekening Bank</h5>
                    <div class="label-card-settings mb-1">
                        <span>Foto Buku Rekening</span>
                        <img src="/assets/seller/img/icon-info.svg" width="14px" alt="">
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-settings form-control" id="foto-ktp">      
                    </div>
                    <div class="mb-3">
                        <label class="label-card-settings form-label">Nama Pemilik Rekening</label>
                        <input type="text" class="form-settings form-control" placeholder="Sudjaya">
                    </div>
                    <div class="mb-3">
                        <label class="label-card-settings form-label">Nomor Rekening</label>
                        <input type="text" class="form-settings form-control" placeholder="087896554321">
                    </div>
                    <div class="mb-5">
                        <label class="label-card-settings form-label">Pilih Bank</label>
                        <select class="form-settings form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <br><br><br>
                    <button class="btn btn-simpan-card-settings" type="button">Simpan</button>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <h5 class="title-card-settings">Perbarui Kata Sandi</h5>
                    <span class="text2-card-setting" style="color: #757575;">Buat kata sandi baru untuk akun anda dengan email citiasiainc@gmail.com</span>

                    <div class="mt-4 mb-3">
                        <label class="label-card-settings form-label">Kata Sandi Saat ini</label>
                        <input type="password" class="form-settings form-control" name="old_password" placeholder="Masukkan Kata Sandi Saat ini">
                    </div>
                    <div class="mb-3">
                        <label class="label-card-settings form-label">Kata Sandi Baru</label>
                        <input type="password" class="form-settings form-control" name="new_password" placeholder="Masukkan Kata Sandi Baru">
                    </div>
                    <div class="mb-5">
                        <label class="label-card-settings form-label">Ulangi Kata Sandi Baru</label>
                        <input type="password" class="form-settings form-control" name="new_password_confirmation" placeholder="Ulangi Kata Sandi Baru">
                    </div>
                    <br><br><br><br><br>
                    <button class="btn btn-simpan-card-settings">Simpan</button>
                </div>
            </div>
        </div> 
    </div>
    </form>

    <script>
        $( function() {
          $( "#date" ).datepicker({
            dateFormat: "yy-mm-dd"
          });
        } );
    </script>

    <!-- Modal -->
    <div class="modal fade" id="popup-ubah-sandi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="hero-sandi">
                        <img class="d-block mx-auto mb-3" src="/assets/seller/img/On Board 1.png" alt="" >
                        <h3 class="text-popup-ubah-sandi1 mb-3"> Kata Sandi berhasil diubah</h3>
                        <h6 class="text-popup-ubah-sandi2 mb-4">Kata sandimu berhasil diubah! pakai password yang baru <br> ya jika login!</h6>
                        <button type="button" class="btn btn-kembali-ubah-sandi" data-bs-dismiss="modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection