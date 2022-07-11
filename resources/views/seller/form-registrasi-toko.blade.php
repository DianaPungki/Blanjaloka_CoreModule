<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/seller/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Seller | Blanjaloka</title>
</head>
<body>
    <div class="form-registrasi-toko">
        <div class="back-to-login">
            <a href="{{ route('login_seller') }}">
                <i class="bi bi-chevron-left"></i>
                <span>Kembali ke Halaman Login</span>
            </a>
        </div>
        <div class="shadow p-5">
            <h3 class="heading fw-bold">Pendaftaran Toko</h3><br/>
            <ul class="nav nav-justified mb-5" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-identitas-pedagang" data-bs-toggle="pill" data-bs-target="#identitas-pedagang" type="button" role="tab" aria-controls="identitas-pedagang" aria-selected="true">Identitas Pedagang</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-identitas-toko" data-bs-toggle="pill" data-bs-target="#identitas-toko" type="button" role="tab" aria-controls="identitas-toko" aria-selected="false">Identitas Toko</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-informasi-rekening" data-bs-toggle="pill" data-bs-target="#informasi-rekening" type="button" role="tab" aria-controls="informasi-rekening" aria-selected="false">Informasi Rekening</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="identitas-pedagang" role="tabpanel" aria-labelledby="pills-identitas-pedagang">
                    <div class="label mb-1">
                        <span>Foto KTP</span>
                        <i class="bi bi-info-circle"></i>
                    </div>
                    <div class="input-group mb-4">
                       <input type="file" class="form-control" id="foto-ktp">      
                    </div>

                    <div class="label mb-1">
                        <span>Foto Diri dengan KTP</span>
                        <i class="bi bi-info-circle"></i>
                    </div>
                    <div class="input-group mb-4">
                       <input type="file" class="form-control" id="foto-diri-ktp">      
                    </div>

                    <div class="mb-4">
                        <label for="nama-lengkap" class="form-label mb-1">Nama Lengkap</label>
                        <input type="text" class="form-control" id="input-nama" placeholder="Masukkan Nama Lengkap" aria-describedby="nama">
                    </div>
                    <div class="mb-4">
                        <label for="nik" class="form-label mb-1">NIK</label>
                        <input type="text" class="form-control" id="input-nik" placeholder="Masukkan NIK Anda" aria-describedby="nik">
                    </div>
                    <div class="mb-4">
                        <label for="nomor-npwp" class="form-label mb-1">Nomor NPWP <i style="color: #9E9E9E;">(Jika Ada)</i></label>
                        <input type="text" class="form-control" id="input-npwp" placeholder="Masukkan Nomor NPWP Anda" aria-describedby="npwp">
                    </div>
                    <div class="mb-4">
                        <label for="tempat-lahir" class="form-label mb-1">Tempat Lahir</label>
                        <input type="text" class="form-control" id="input-tempat-lahir" placeholder="Masukkan Tempat Lahir Anda" aria-describedby="tempat-lahir">
                    </div>
                    <div class="mb-4">
                        <label for="tanggal-lahir" class="form-label mb-1">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="date" placeholder="Masukkan Tempat Lahir Anda" aria-describedby="tanggal-lahir">
                    </div>
                    <div class="mb-5">
                        <label for="alamat" class="form-label mb-1">Alamat Sesuai KTP</label>
                        <input type="text" class="form-control" id="input-alamat" placeholder="Masukkan Tempat Lahir Anda" aria-describedby="alamat">
                    </div>
                    <a href="">
                        <button type="submit" class="btn btn-simpan-identitas-pedagang">Simpan</button>
                    </a>
                </div>
                <div class="tab-pane fade" id="identitas-toko" role="tabpanel" aria-labelledby="pills-identitas-toko">
                    <div class="label mb-3">
                        <span>Foto Profile</span>
                        <i class="bi bi-info-circle"></i>
                    </div>
                    <div class="box1 me-3"></div>
                    <div class="box2 me-3"></div>
                    <div class="box3"></div>
                    <div class="input-group mt-3 mb-3">
                        <input type="file" class="form-control" id="foto-ktp">      
                    </div>

                    <div class="mb-3">
                        <label for="nama-toko" class="form-label mb-1">Nama Toko</label>
                        <input type="text" class="form-control" id="input-nama-toko" placeholder="Masukkan Nama Lengkap" aria-describedby="nama-toko">
                    </div>
                    <div class="mb-3">
                        <label for="kategori-produk" class="form-label mb-1">Kategori Produk</label>
                        <input type="text" class="form-control" id="kategori-produk" placeholder="Masukkan Kategori Produk" aria-describedby="kategori">
                    </div>
                    <div class="mb-3">
                        <label for="provinsi" class="form-label mb-1">Pilih Provinsi</label>
                        <select class="form-select" aria-label="Default select example"  >
                            <option value="1">Aceh</option>
                            <option value="2">Sumatera Utara</option>
                            <option value="3">Sumatera Barat</option>
                            <option value="4">Riau</option>
                            <option value="5">Kepulauan Riau</option>
                            <option value="6">Jambi</option>
                            <option value="7">Sumatera Selatan</option>
                            <option value="8">Kepulauan Bangka Belitung</option>
                            <option value="9">Bengkulu</option>
                            <option value="10">Lampung</option>
                            <option value="11">DKI Jakarta</option>
                            <option value="12">Banten</option>
                            <option value="13">Jawa Barat</option>
                            <option value="14">Jawa Tengah</option>
                            <option value="15">DI Yogyakarta</option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label mb-1">Pilih Kota</label>
                        <select class="form-select" aria-label="Default select example"  >
                            <option value="1">Jakarta Barat</option>
                            <option value="2">Jakarta Selatan</option>
                            <option value="3">Jakarta Pusat</option>
                            <option value="4">Jakarta Timur</option>
                            <option value="4">Jakarta Utara</option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="pasar" class="form-label mb-1">Pilih Pasar</label>
                        <select class="form-select" aria-label="Default select example"  >
                            <option value="1">Pasar Cipete Selatan</option>
                            <option value="2">Pasar Palmerah</option>
                            <option value="3">Pasar Johar</option>
                            <option value="4">Pasar Tebet Barat</option>
                            <option value="4">Pasar Gandaria</option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat-toko" class="form-label mb-1">Alamat Toko</label>
                        <input type="text" class="form-control" id="input-alamat-toko" placeholder="Masukkan Alamat Toko" aria-describedby="alamat-toko">
                    </div>
                    <div class="mb-5">
                        <label for="patokan" class="form-label mb-1">Patokan</label>
                        <input type="text" class="form-control" id="patokan-toko" placeholder="Nama blok, lantai, dll" aria-describedby="patokan">
                    </div>
                    <a href="">
                        <button type="submit" class="btn btn-simpan-identitas-toko">Simpan</button>
                    </a>
                </div>
                <div class="tab-pane fade" id="informasi-rekening" role="tabpanel" aria-labelledby="pills-informasi-rekening">
                    <div class="label mb-1">
                        <span>Foto Buku Rekening</span>
                        <i class="bi bi-info-circle"></i>
                    </div>
                        <div class="input-group mb-4">
                        <input type="file" class="form-control" placeholder="Masukkan Kata Sandi Anda" id="password">      
                    </div>
                    <div class="mb-4">
                        <label for="nama-pemilik-rekening" class="form-label mb-1">Nama Pemilik Rekening</label>
                        <input type="text" class="form-control" id="input-nama-pemilik-rekening" placeholder="Masukkan Nama Pemilik Rekening" aria-describedby="nama-pemilik-rekening">
                    </div>
                    <div class="mb-4">
                        <label for="nomor-rekening" class="form-label mb-1">Nomor Rekening</label>
                        <input type="text" class="form-control" id="input-nomor-rekening" placeholder="Masukkan Nomor Rekening " aria-describedby="nomor-rekening">
                    </div>
                    <div class="pilih-bank mb-5">
                        <label for="pilih-bank" class="form-label mb-1">Pilih Bank</label>
                        <select class="form-select" aria-label="Default select example"  >                           
                            <option value="1">BRI</option>
                            <option value="2">BCA</option>
                            <option value="3">Mandiri</option>
                            <option value="4">BNI</option>
                        </select>
                    </div>
                    <a href="registrasi-toko">
                        <button type="submit" class="btn btn-simpan-rekening">Simpan</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $( function() {
          $( "#date" ).datepicker({
            dateFormat: "yy-mm-dd"
          });
        } );
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>