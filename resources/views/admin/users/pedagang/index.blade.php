@extends('admin/master-admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pedagang</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Pedagang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                       Pedagang

                        <div class="float-right d-none d-sm-inline-block">
                            <a href="#" data-toggle="modal" data-target="#addmodal" class="btn btn-primary btn-sm">Tambah</a>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="pedagangtable">
                            <thead>
                                <tr>
                                    <th style="width:10px;">No</th>
                                    {{-- <th>Username</th> --}}
                                    <th>Nama</th>
                                    <th>Nama Toko</th>
                                    {{-- <th>Email</th> --}}
                                    <th>No Telp</th>
                                    <th>Alamat Pedagang</th>
                                    <th>Alamat Toko</th>
                                    <th>Created at</th>
                                    <th>Update at</th>
                                    <th style="width:10px;" class='notexport'>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedagang as $no=>$c)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            {{-- <td>{{ $c->username }}</td> --}}
                                            <td>{{ $c->nama_pedagang }}</td>
                                            <td>{{ $c->nama_toko }}</td>
                                            {{-- <td>{{ $c->email }}</td> --}}
                                            <td>{{ $c->nomor_telepon }}</td>
                                            <td>{{ $c->alamat_pedagang }}</td>
                                            <td>{{ $c->alamat_toko }}</td>
                                            <td>{{ date('d-M-Y', strtotime($c->created_at))}}</td>
                                            <td>{{ date('d-M-Y', strtotime($c->updated_at))}}</td>
                                            <td class="text-center">
                                                <a href="#" data-id="<?= $c->id_pedagang; ?>" class="edit" data-toggle="tooltip" title="Edit" data-placement="top"><span class="badge badge-success"><i class="fas fa-edit"></i></span></a>
                                                <a href="#" data-id="<?= $c->id_pedagang; ?>" class="delete" data-toggle="tooltip" title="Hapus" data-placement="top"><span class="badge badge-danger"><i class="fas fa-trash"></i></span></a>
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

   {{-- Modal Tambah Pedagang --}}

   <div class="modal fade" id="addmodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Tambah Pedagang</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="tambahform">
            @csrf
            <div class="modal-body">
                {{-- <div class="mb-3 row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                </div>   --}}
               
                <div class="mb-3 row">
                    <label for="nama_pedagang" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_pedagang" placeholder="Nama Pedagang" required>
                    </div>
                </div>  

                <div class="mb-3 row">
                    <label for="nama_toko" class="col-sm-2 col-form-label">Nama Toko</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_toko" placeholder="Nama Toko" required>
                    </div>
                </div>  

                <div class="mb-3 row">
                    <label for="nomor_telepon" class="col-sm-2 col-form-label">No Telp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telp" required>
                    </div>
                </div>

                {{-- <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10 validate">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                </div>   --}}

                <div class="mb-3 row">
                    <label for="alamat_pedagang" class="col-sm-2 col-form-label">Alamat Pedagang</label>
                    <div class="col-sm-10 validate">
                        <textarea name="alamat_pedagang" cols="30" rows="10"  class="form-control" required>Alamat Pedagang</textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="alamat_toko" class="col-sm-2 col-form-label">Alamat Toko</label>
                    <div class="col-sm-10 validate">
                        <textarea name="alamat_toko" cols="30" rows="10"  class="form-control" required>Alamat Toko</textarea>
                    </div>
                </div>

                {{-- <div class="mb-3 row">
                    <label for="nis" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10 validate">
                        <input type="password" class="form-control" name="password" autocomplete="on" placeholder="Password" required>
                    </div>
                </div>   --}}

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
    
    {{-- Modal Edit Pedagang --}}

    <div class="modal fade" id="editmodal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Pedagang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editform">
                @csrf
                <input type="hidden" name="id_pedagang" id="id_pedagang">
                <div class="modal-body">
                    {{-- <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                        </div>
                    </div>   --}}
                    
                    <div class="mb-3 row">
                        <label for="nama_pedagang" class="col-sm-2 col-form-label">Nama Pedagang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_pedagang" id="nama_pedagang" placeholder="Nama Pedagang" required>
                        </div>
                    </div>  

                    <div class="mb-3 row">
                        <label for="nama_toko" class="col-sm-2 col-form-label">Nama Toko</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_toko" id="nama_toko" placeholder="Nama Pedagang" required>
                        </div>
                    </div>  
    
                    <div class="mb-3 row">
                        <label for="nomor_telepon" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon" placeholder="Nomor Telp" required>
                        </div>
                    </div>
    
                    {{-- <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10 validate">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>   --}}

                    <div class="mb-3 row">
                        <label for="alamat_pedagang" class="col-sm-2 col-form-label">Alamat Pedagang</label>
                        <div class="col-sm-10 validate">
                            <textarea name="alamat_pedagang" id="alamat_pedagang" cols="30" rows="10"  class="form-control" id="alamat_pedagang" required>Alamat Toko</textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat_toko" class="col-sm-2 col-form-label">Alamat Toko</label>
                        <div class="col-sm-10 validate">
                            <textarea name="alamat_toko" id="alamat_toko" cols="30" rows="10"  class="form-control" id="alamat_toko" required>Alamat Toko</textarea>
                        </div>
                    </div>
    
                    {{-- <div class="mb-3 row">
                        <label for="nis" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10 validate">
                            <input type="password" class="form-control" name="password" autocomplete="on" placeholder="Password">
                            <small id="password" class="form-text text-muted">Kalau gak perlu diubah dikosongin aja</small>
                        </div>
                    </div>   --}}
    
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
                    data: {'id_pedagang':$(this).data('id'), '_token': "{{csrf_token()}}"},
                    type: 'POST',
                    url:"{{url('admin/users/pedagang/edit')}}",
                    success : function(data){
                        $('#id_pedagang').val(data[0].id_pedagang);
                        // $('#username').val(data[0].username);
                        $('#nama_pedagang').val(data[0].nama_pedagang);
                        $('#nama_toko').val(data[0].nama_toko);
                        // $('#email').val(data[0].email)
                        $('#nomor_telepon').val(data[0].nomor_telepon)
                        $('#alamat_pedagang').val(data[0].alamat_pedagang)
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
                    url : "{{url('admin/users/pedagang')}}",
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
