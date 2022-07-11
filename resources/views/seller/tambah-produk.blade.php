@extends('seller.layouts.main')
@section('container')                 

<div class="shadow page-tambah-produk bg-white">

    <h1 class="title-page mb-1">Tambah Produk</h1>
    <h6 class="text-title-page mb-5">Lengkapi semua field dibawah ini supaya informasi produkmu jelas!</h6>

    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">               
                <div class="row g-2 mb-4">
                    <div class="col-sm-3">
                        <label class="label-form-tambah-produk col-form-label @error('nama_produk') is-invalid @enderror">Nama Produk</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="input-form-tambah-produk form-control" name="nama_produk" value="{{ old('nama_produk') }}" placeholder="Masukkan Nama Produk">

                        <!-- error message untuk nama_produk -->
                        @error('nama_produk')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row g-2 mb-4">
                    <div class="col-sm-4">
                        <label class="label-form-tambah-produk col-form-label">Kategori Produk</label>
                    </div>
                    <div class="col-sm-8">
                        <select class="input-form-tambah-produk form-select @error('id_kategori') is-invalid @enderror" name="id_kategori" value="{{ old('id_kategori') }}" id="id_kategori" required>
                            <option selected value="">- Pilih Kategori Produk -</option>
                            @foreach($kategori as $k)
                                <option value="{{$k->id_kategori}}">{{$k->jenis_kategori}}</option>
                            @endforeach
                        </select>

                        <!-- error message untuk kategori -->
                        @error('id_kategori')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row g-2 mb-4">
                    <div class="col-sm-3">
                        <label class="label-form-tambah-produk col-form-label">Stok Tersedia</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="input-form-tambah-produk form-control @error('jumlah_produk') is-invalid @enderror" name="jumlah_produk" value="{{ old('jumlah_produk') }}" placeholder="Masukkan stok produkmu yang tersedia">

                        <!-- error message untuk jumlah_produk -->
                        @error('jumlah_produk')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label class="label-form-tambah-produk form-label">Deskripsi Produk</label>
                    <textarea class="input-form-tambah-produk form-control @error('deskripsi_produk') is-invalid @enderror" name="deskripsi_produk" value="{{ old('jumlah_produk') }}" placeholder="Masukkan Deskripsi Produk" rows="5">{{ old('deskripsi_produk') }}</textarea>

                    <!-- error message untuk deskripsi_produk -->
                    @error('deskripsi_produk')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="label-form-tambah-produk form-label">Status Produk</label><br>
                    <span>Jika statusmu aktif, maka produkmu <br> dapat dicari oleh pembeli</span>
                    <div class="form-check form-switch float-end me-2">
                        <input class="form-check-input" style="width: 52px; height: 28px;" type="checkbox" role="switch">
                    </div>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="mb-4">
                    <label class="label-form-tambah-produk form-label">Foto Produk</label>
                    <input type="file" class="form-control @error('foto_produk') is-invalid @enderror" name="foto_produk">
    
                    <!-- error message untuk foto_produk -->
                    @error('foto_produk')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="form-image-produk">
                            <img class="d-block mx-auto" src="img/icon-image.svg" alt="">
                            <p class="text-center">Tambah Foto</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-image-produk">
                            <img class="d-block mx-auto" src="img/icon-image.svg" alt="">
                            <p class="text-center">Tambah Foto</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-image-produk-small mb-2">
                            <img class="d-block mx-auto" src="img/icon-image.svg" alt="">
                            <p class="text-center">Tambah Foto</p>
                        </div>
                        <div class="form-image-produk-small mb-3">
                            <img class="d-block mx-auto" src="img/icon-image.svg" alt="">
                            <p class="text-center">Tambah Foto</p>
                        </div>
                    </div>
                </div> --}}

                <label class="label-form-tambah-produk form-label">Harga Produk</label>
                <div class="row mb-1">
                    <div class="col-sm-6">
                        <input type="text" class="input-form-tambah-produk form-control @error('harga_jual') is-invalid @enderror" name="harga_jual" value="{{ old('harga_jual') }}" placeholder="Masukkan harga">

                        <!-- error message untuk harga_jual -->
                        @error('harga_jual')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="col-sm-1">
                        <hr class="text-black">
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="input-form-tambah-produk form-control" placeholder="Masukkan harga">
                    </div>
                </div>
                <span class="text-label">Jika produkmu tidak ada range harga, silahkan masukkan harga disalah satu kolom saja!</span>

                <div class="row mt-3">
                    {{-- <div class="col-md-6">
                        <label class="label-form-tambah-produk col-form-label">Jumlah Satuan</label>
                        <input type="text" class="input-form-tambah-produk form-control" placeholder="Masukkan jumlah satuan produkmu">
                    </div> --}}
                    <div class="col-md-12">
                        <label class="label-form-tambah-produk col-form-label">Satuan Produk</label>
                        <select class="input-form-tambah-produk form-select @error('satuan') is-invalid @enderror" name="satuan" value="{{ old('satuan') }}">
                            <option selected value="">- Pilih Satuan Produk -</option>
                            <option value="Pcs">Pcs</option>
                            <option value="Gram">Gram</option>
                            <option value="Kilo Gram">Kilo Gram</option>
                            <option value="Liter">Liter</option>
                        </select>

                        <!-- error message untuk satuan -->
                        @error('satuan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                {{-- <label class="label-form-tambah-produk col-form-label">Minimal Pemesanan</label>
                <input type="text" class="input-form-tambah-produk form-control" placeholder="Masukkan minimal pemesanan produkmu"> --}}
                
                <button type="submit" class="btn btn-selesai-tambah-produk">Selesai</button>
            </div>
        </div>

    </form>

</div>

@endsection