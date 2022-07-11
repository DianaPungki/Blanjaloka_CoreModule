@extends('seller.layouts.main')
@section('container')

<!-- Page Heading -->
<div class="page-produk-saya">

    <h1 class="title-page mb-0"> Produk</h1>
    <h6 class="text-title-page"> Kelola semua produk kamu di sini!</h6>
    
    <div class="shadow bg-white rounded-1 mb-4">
        <div class="card-body" style="padding: 2% 3%">
            <div class="row">
                <div class="col-md-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-auto">
                            <label class="text-form-produk col-form-label">Nama Produk</label>
                        </div>
                        <div class="col-auto" style="width: 75%">
                            <input type="text" id="nama-produk" class="form-control" placeholder="Input Nama Produk">
                        </div>

                        <div class="col-auto">
                            <label class="text-form-produk col-form-label">Jumlah Stok</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" id="jumlah-stok" class="form-control" placeholder="Input Stok Barang">
                        </div>
                        <div class="col-sm-1">
                            <hr class="text-black">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" id="jumlah-stok" class="form-control" placeholder="Input Stok Barang">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <label class="text-form-produk col-form-label">Kategori</label>
                        </div>
                        <div class="col-auto mb-2" style="width: 85%">
                            <input type="text" id="kategori-produk" class="form-control" placeholder="Input Kategori Produk">
                        </div>
                        <button class="btn btn-atur-kategori d-block ms-auto me-4" type="button">Atur Kategori</button>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <button class="btn btn-cari me-2" type="button">Cari</button>
                <button class="btn btn-reset" type="button">Reset</button>
            </div>

        </div>
    </div>   

    <div class="card shadow mb-4">
        <div class="card-header py-0">
            <ul class="nav pills-page-produk-saya  " id="pills-tab"
                role="tablist" style="float: left;">
                <li class="nav-item nav-item-page-produk-saya ms-1 " role="presentation">
                    <a class="nav-link nav-link-page-produk-saya active py-3  "
                        id="pills-semua" data-bs-toggle="pill"
                        data-bs-target="#semua" type="button" role="tab" aria-controls="semua"
                        aria-selected="true">Semua</a>
                </li>
                <li class="nav-item nav-item-page-produk-saya  " role="presentation">
                    <a class="nav-link nav-link-page-produk-saya text-dark py-3" id="pills-terlaris" data-bs-toggle="pill"
                        data-bs-target="#terlaris" type="button" role="tab"
                        aria-controls="terlaris" aria-selected="false">Terlaris</a>
                </li>
                <li class="nav-item nav-item-page-produk-saya" role="presentation">
                    <a class="nav-link nav-link-page-produk-saya text-dark py-3" id="pills-habis" data-bs-toggle="pill"
                        data-bs-target="#habis" type="button" role="tab" aria-controls="habis"
                        aria-selected="fal se">Habis</a>
                </li>
            </ul>
            <a href="{{ route('produk.create') }}" type="button" class="btn-tambah-produk btn btn-light btn-sm mt-2">
                <h6 class="text-tambah-produk"><i class="fa fa-plus" aria-hidden="true"></i>Tambah Produk</h6>
            </a>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="semua" role="tabpanel"
                aria-labelledby="pills-semua" style="padding: 0 1%">
                <h6 class="text-tabel-produk text-dark">4 Produk</h6>
                <h6 class="text-tabel text-secondary"> Tambah produkmu dan dapatkan lebih banyak
                    benefitnya!</h6>

                <div class="table-produk">
                    <table class="table text-dark">
                        <thead style="background-color:#EAEAEA;">
                            <tr class="text-center">
                                <th scope="col"><input type="checkbox" aria-label="Checkbox for following text input"></th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Foto Produk</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Harga Produk</th>
                                <th scope="col">Satuan Produk</th>
                                <th scope="col">Stok Produk</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($produk as $p)
                            <tr class="text-center">
                                <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                                <td><span class="text-produk">{{ $p->nama_produk }}</span></td>
                                <td>
                                    <img src="{{ Storage::url('public/foto_produk/').$p->foto_produk }}" class="img-produk">
                                </td>                               
                                <td>
                                    <span class="text-produk">{{ $p->jenis_kategori }}</span>
                                </td>
                                <td><span class="text-produk">Rp. {{ number_format($p->harga_jual,0,',','.'); }}</span></td>
                                <td><span class="text-produk">{{ $p->satuan }}</span></td>
                                <td><span class="text-produk">{{ $p->jumlah_produk }}</span></td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                        <label class="custom-control-label" for="customSwitch1"></label>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="dropdown-atur-produk btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Atur</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a href="{{ route('produk.edit', $p->id_produk) }}" class="dropdown-item" type="button">Edit Produk</a>
                                            <form onsubmit="return confirm('Apakah anda yakin ingin menghapus produk ini?');" action="{{ route('produk.destroy', $p->id_produk) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">Hapus Produk</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>

                                @empty
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <img class="d-block mx-auto" src="assets/seller/img/Supermarket workers-pana 1.png" alt="">
                                    <p class="text-center text-black">Belum ada produk yang ditambahkan, <br> yuk tambah prduk pertamamu!</p>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- {{ $blog->links() }} --}}
                </div>
            </div>
            <div class="tab-pane fade" id="terlaris" role="tabpanel"
                aria-labelledby="pills-terlaris">

            </div>
            <div class="tab-pane fade" id="habis" role="tabpanel"
                aria-labelledby="pills-terlaris">

            </div>
        </div>
    </div>

    <script>
        //message with toastr
        @if(session()-> has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()-> has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</div>

@endsection
