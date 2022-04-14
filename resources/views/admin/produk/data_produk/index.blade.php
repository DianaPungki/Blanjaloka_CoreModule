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
                        <table class="table table-bordered " id="pedagangtable">
                            <thead>
                                <tr>
                                    <th style="width:10px;">No</th>
                                    <th>Nama Produk</th>
                                    <th>Satuan</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Deskripsi</th>
                                    <th>Foto Produk</th>
                                    <th>Status</th>
                                    <th>Kategori</th>
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
                                            <td>{{ $p->nama_produk }}</td>
                                            <td>{{ $p->satuan }}</td>
                                            <td>{{ $p->harga_jual }}</td>
                                            <td>{{ $p->jumlah_produk }}</td>
                                            <td>{{ $p->deskripsi }}</td>
                                            <td>{{ $p->foto_produk }}</td>
                                            <td>{{ $p->status }}</td>
                                            <td>{{ $p->id_kategori }}</td>
                                            <td>{{ $p->id_pedagang }}</td>
                                            <td>{{ date('d-M-Y', strtotime($p->created_at))}}</td>
                                            <td>{{ date('d-M-Y', strtotime($p->updated_at))}}</td>
                                            <td class="text-center">
                                                <a href="#" data-id="<?= $p->id_pedagang; ?>" class="edit" data-toggle="tooltip" title="Edit" data-placement="top"><span class="badge badge-success"><i class="fas fa-edit"></i></span></a>
                                                <a href="#" data-id="<?= $p->id_pedagang; ?>" class="delete" data-toggle="tooltip" title="Hapus" data-placement="top"><span class="badge badge-danger"><i class="fas fa-trash"></i></span></a>
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

            $('#pedagangtable').DataTable({
                "responsive":true,
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excel',
                        text: 'Excel',
                        className: 'btn btn-success btn-sm active',
                        exportOptions: {
                            columns: ':not(.notexport)'
                        }

                    },
                    {
                        extend: 'pdf',
                        text: 'PDF',
                        className: 'btn btn-sm btn-success',
                        exportOptions: {
                            columns: ':not(.notexport)'
                        }
                    },
                    {
                        extend: 'print',
                        text: 'Print',
                        className: 'btn btn-success btn-sm active',
                        exportOptions: {
                            columns: ':not(.notexport)'
                        }

                    },

                ],
            });

            // insert form
            $('#tambahform').submit(function(e){
                e.preventDefault();

                $.ajax({
                    url : "{{url('admin/users/pedagang')}}",
                    type: "POST",
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function(){
                        $('.spinner').show();
                    },
                    complete: function(){
                        $('.spinner').hide();
                    },
                    success: function(data){
                        swal(data.pesan)
                        .then((result) => {
                            location.reload();
                        });
                    },
                    error: function(err){
                        alert(err);
                    }
                })
            });

            //-------------------------------------

             //show modal update form 
             $('.edit').click(function(e){
                e.preventDefault();
                $.ajax({
                    data: {
                        'id_pedagang':$(this).data('id'), 
                        '_token': "{{csrf_token()}}"
                    },
                    type: 'POST',
                    url:"{{url('admin/users/pedagang/edit')}}",
                    success : function(data){
                        $('#id_pedagang').val(data[0].id_pedagang);
                        // $('#username').val(data[0].username);
                        // $('#email').val(data[0].email)
                        $('#nama_produk').val(data[0].nama_produk);
                        $('#nomor_telepon').val(data[0].nomor_telepon)
                        $('#nomor_ktp').val(data[0].nomor_ktp)
                        $('#tanggal_lahir').val(data[0].tanggal_lahir)
                        $('#alamat_pedagang').val(data[0].alamat_pedagang)
                        $('#nama_toko').val(data[0].nama_toko);
                        $('#alamat_toko').val(data[0].alamat_toko)

                        $('#editmodal').modal('show');
                    },
                    error : function(err){
                        alert(err);
                        console.log(err);
                    }
                });
            });

            //----------------------------------------
            // edit form
            $('#editform').submit(function(e){
                e.preventDefault();

                $.ajax({
                    url : "{{url('admin/users/pedagang/update')}}",
                    type: "POST",
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function(){
                        $('.spinner').show();
                    },
                    complete: function(){
                        $('.spinner').hide();
                    },
                    success: function(data){
                        swal(data.pesan)
                        .then((result) => {
                            location.reload();
                        });
                    },
                    error: function(err){
                        alert(err);
                    }
                })
            });

            //----------------------------------------------
            // hapus form
            $('.delete').click(function(e){
                e.preventDefault();
                var confirmed = confirm('Hapus Akun pedagang Ini ?');

                if(confirmed) {

                    $.ajax({
                        data: {'id_pedagang':$(this).data('id'), '_token': "{{csrf_token()}}"},
                        type: 'DELETE',
                        url:"{{url('admin/users/pedagang')}}",
                        success : function(data){
                            swal(data.pesan)
                            .then((result) => {
                                location.reload();
                            });
                        },
                        error : function(err){
                            alert(err);
                            console.log(err);
                        }
                    });
                }
            });

        });

    </script>

@endsection
