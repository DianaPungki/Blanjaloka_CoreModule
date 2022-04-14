@extends('admin/master-admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Customer</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Users</li>
                            <li class="breadcrumb-item active">Customer</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                       Data Customer

                        <div class="float-right d-none d-sm-inline-block">
                            <a href="#" data-toggle="modal" data-target="#addmodal" class="btn btn-primary btn-sm">Tambah</a>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="customerstable">
                            <thead>
                                <tr>
                                    <th style="width:10px;">No</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No Telp</th>
                                    <th>Alamat</th>
                                    <th>Created at</th>
                                    <th>Update at</th>
                                    <th style="width:10px;" class='notexport'>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $no=>$c)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            <td>{{ $c->username }}</td>
                                            <td>{{ $c->nama_customer }}</td>
                                            <td>{{ $c->email_customer }}</td>
                                            <td>{{ $c->nomor_telepon }}</td>
                                            <td>{{ $c->alamat_customer }}</td>
                                            <td>{{ date('d-M-Y', strtotime($c->created_at))}}</td>
                                            <td>{{ date('d-M-Y', strtotime($c->updated_at))}}</td>
                                            <td class="text-center">
                                                <a href="#" data-id="<?= $c->id_customer; ?>" class="edit" data-toggle="tooltip" title="Edit" data-placement="top"><span class="badge badge-success"><i class="fas fa-edit"></i></span></a>
                                                <a href="#" data-id="<?= $c->id_customer; ?>" class="delete" data-toggle="tooltip" title="Hapus" data-placement="top"><span class="badge badge-danger"><i class="fas fa-trash"></i></span></a>
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

   {{-- Modal Tambah Customer --}}

   <div class="modal fade" id="addmodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Tambah Customer</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="tambahform">
            @csrf
            <div class="modal-body">
                <div class="mb-3 row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                </div>  
               
                <div class="mb-3 row">
                    <label for="nama_customer" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_customer" placeholder="Nama Customer" required>
                    </div>
                </div>  

                <div class="mb-3 row">
                    <label for="nomor_telepon" class="col-sm-2 col-form-label">No Telp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telp" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="email_customer" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10 validate">
                        <input type="email" class="form-control" name="email_customer" placeholder="Email" required>
                    </div>
                </div>  

                <div class="mb-3 row">
                    <label for="alamat_customer" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10 validate">
                        <textarea name="alamat_customer" cols="30" rows="10"  class="form-control" placeholder="Alamat" required></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nis" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10 validate">
                        <input type="password" class="form-control" name="password" autocomplete="on" placeholder="Password" required>
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
    
    {{-- Modal Edit Customer --}}

    <div class="modal fade" id="editmodal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Customer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editform">
                @csrf
                <input type="hidden" name="id_customer" id="id_customer">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                        </div>
                    </div>  
                    
                    <div class="mb-3 row">
                        <label for="nama_customer" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_customer" id="nama_customer" placeholder="Masukkan nama" required>
                        </div>
                    </div>  
    
                    <div class="mb-3 row">
                        <label for="nomor_telepon" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon" placeholder="Nomor Telp" required>
                        </div>
                    </div>
    
                    <div class="mb-3 row">
                        <label for="email_customer" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10 validate">
                            <input type="email" class="form-control" name="email_customer" id="email_customer" placeholder="Email" required>
                        </div>
                    </div>  

                    <div class="mb-3 row">
                        <label for="alamat_customer" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10 validate">
                            <textarea name="alamat_customer" id="alamat_customer" cols="30" rows="10"  class="form-control" id="alamat_customer" placeholder="Alamat" required></textarea>
                        </div>
                    </div>
    
                    <div class="mb-3 row">
                        <label for="nis" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10 validate">
                            <input type="password" class="form-control" name="password" autocomplete="on" placeholder="Password">
                            <small id="password" class="form-text text-muted">Kalau gak perlu diubah dikosongin aja</small>
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

            $('#customerstable').DataTable({
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
                    url : "{{url('admin/users/customers')}}",
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
                    data: {'id_customer':$(this).data('id'), '_token': "{{csrf_token()}}"},
                    type: 'POST',
                    url:"{{url('admin/users/customers/edit')}}",
                    success : function(data){
                        $('#id_customer').val(data[0].id_customer);
                        $('#username').val(data[0].username);
                        $('#nama_customer').val(data[0].nama_customer);
                        $('#email_customer').val(data[0].email_customer)
                        $('#alamat_customer').val(data[0].alamat_customer)
                        $('#nomor_telepon').val(data[0].nomor_telepon)

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
                    url : "{{url('admin/users/customers')}}",
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
                var confirmed = confirm('Hapus Akun Pemda Ini ?');

                if(confirmed) {

                    $.ajax({
                        data: {'id_customer':$(this).data('id'), '_token': "{{csrf_token()}}"},
                        type: 'DELETE',
                        url:"{{url('admin/users/customers')}}",
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
