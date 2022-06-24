@extends('pengelola/master-pengelola')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Kategori Produk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Produk</li>
                            <li class="breadcrumb-item active">Kategori Produk</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                       Data Kategori Produk

                        <div class="float-right d-none d-sm-inline-block">
                            <a href="#" data-toggle="modal" data-target="#addmodal" class="btn btn-primary btn-sm">Tambah</a>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="kategoritable">
                            <thead>
                                <tr>
                                    <th style="width:10px;">No</th>
                                    <th>Kategori</th>
                                    <th>Created at</th>
                                    <th>Update at</th>
                                    <th style="width:10px;" class='notexport'>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategori as $no=>$k)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            <td>{{ $k->jenis_kategori }}</td>
                                            <td>{{ date('d-M-Y', strtotime($k->created_at))}}</td>
                                            <td>{{ date('d-M-Y', strtotime($k->updated_at))}}</td>
                                            <td class="text-center">
                                                <a href="#" data-id="<?= $k->id_kategori; ?>" class="edit" data-toggle="tooltip" title="Edit" data-placement="top"><span class="badge badge-success"><i class="fas fa-edit"></i></span></a>
                                                <a href="#" data-id="<?= $k->id_kategori; ?>" class="delete" data-toggle="tooltip" title="Hapus" data-placement="top"><span class="badge badge-danger"><i class="fas fa-trash"></i></span></a>
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

    {{-- Modal Tambah Kategori Produk --}}

    <div class="modal fade" id="addmodal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kategori Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="tambahform">
                @csrf
                <div class="modal-body">

                    <div class="mb-3 row">
                        <label for="jenis_kategori" class="col-sm-2 col-form-label">Kategori Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jenis_kategori" placeholder="Misal : Sayuran">
                        </div>
                    </div>   
    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">  
                        <span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span>
                        Tambah
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>
    
    {{-- Modal Edit Kategori Produk --}}

    <div class="modal fade" id="editmodal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Kategori Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editform">
                @csrf
                <input type="hidden" name="id_kategori" id="id_kategori">
                <div class="modal-body">

                    <div class="mb-3 row">
                        <label for="jenis_kategori" class="col-sm-2 col-form-label">Kategori Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jenis_kategori" id="jenis_kategori" placeholder="Misal : Sayuran" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">  
                        <span class="spinner-border spinner-border-sm spinner" role="status" aria-hidden="true"></span>
                        Update
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.spinner').hide();

            $('[data-toggle="tooltip"]').tooltip();

            $('#kategoritable').DataTable({
                "responsive":true
            });

            // insert form
            $('#tambahform').submit(function(e){
                e.preventDefault();

                $.ajax({
                    url : "{{url('pengelola/produk/kategori')}}",
                    type: "POST",
                    data: $(this).serialize(),
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
                    data: {'id_kategori':$(this).data('id'), '_token': "{{csrf_token()}}"},
                    type: 'POST',
                    url:"{{url('pengelola/produk/kategori/edit')}}",
                    success : function(data){
                        $('#id_kategori').val(data[0].id_kategori);
                        $('#jenis_kategori').val(data[0].jenis_kategori);

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
                    url : "{{url('pengelola/produk/kategori')}}",
                    type: "PUT",
                    data: $(this).serialize(),
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
                var confirmed = confirm('Hapus Data kategori Ini ?');

                if(confirmed) {

                    $.ajax({
                        data: {'id_kategori':$(this).data('id'), '_token': "{{csrf_token()}}"},
                        type: 'DELETE',
                        url:"{{url('pengelola/produk/kategori')}}",
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
