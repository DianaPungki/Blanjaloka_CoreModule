@extends('admin/master-admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Produk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Produk</li>
                            <li class="breadcrumb-item active">Data Produk</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                       Data Produk

                        <div class="float-right d-none d-sm-inline-block">
                            <a href="{{ url('admin/produk/add') }}" class="btn btn-primary btn-sm">Tambah</a>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="produktable">
                            <thead>
                                <tr>
                                    <th style="width:10px;">No</th>
                                    <th>Foto Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Satuan</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Deskripsi</th>
                                    {{-- <th>Status</th> --}}
                                    <th>Pedagang</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th style="width:10px;">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produk as $no=>$p)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            <td>
                                                <img src="{{ asset('assets/admin/foto_produk/' . $p->foto_produk) }}" alt="" width="100">
                                            </td>
                                            <td>{{ $p->nama_produk }}</td>
                                            <td>{{ $p->satuan }}</td>
                                            <td>{{ $p->harga_jual }}</td>
                                            <td>{{ $p->jumlah_produk }}</td>
                                            <td>{{ $p->deskripsi }}</td>
                                            {{-- <td>{{ $p->status }}</td> --}}
                                            <td>{{ $p->id_pedagang }}</td>
                                            <td>{{ date('d-M-Y', strtotime($p->created_at))}}</td>
                                            <td>{{ date('d-M-Y', strtotime($p->updated_at))}}</td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <a href="{{ url('admin/produk/edit/'.$p->id_produk) }}" data-toggle="tooltip" title="Lihat" data-placement="top">
                                                    <span class="badge badge-success"><i class="fas fa-edit"></i></span>
                                                </a>
                                                <a href="#" data-id_produk="{{$p->id_produk}}" data-nama_produk="{{$p->nama_produk}}" class="delete" data-toggle="tooltip" title="Hapus" data-placement="top">
                                                    <span class="badge badge-danger"><i class="fas fa-trash"></i></span>
                                                </a>
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>
    </div>

 
    


    <script>
        $(document).ready(function() {
            $('.spinner').hide();

            $('[data-toggle="tooltip"]').tooltip();

            $('#produktable').DataTable({
                "responsive": true,

            //----------------------------------------------------------------------------------------

            $('.delete').click(function(e){
                e.preventDefault();
                swal({
                    title: "Hapus Produk "+$(this).data('nama_produk'),
                    text: "Produk ini akan dihapus selamanya dari aplikasi, apakah anda ingin melanjutkan ?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if(willDelete) {
                        $.ajax({
                            data:{'id_produk':$(this).data('id_produk'), '_token': "{{csrf_token()}}"},
                            url: "{{ url('admin/produk') }}",
                            type: "DELETE",
                            success: function(e){
                                swal(e.pesan)
                                .then((value) => {
                                    location.reload();
                                });
                            }
                        });
                    }
                });
            });

        });
    </script>

@endsection
