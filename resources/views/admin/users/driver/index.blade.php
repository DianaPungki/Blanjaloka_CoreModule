@extends('admin/master-admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Driver</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Users</li>
                            <li class="breadcrumb-item active">Driver</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                       Data Driver

                        <div class="float-right d-none d-sm-inline-block">
                            <a href="#" data-toggle="modal" data-target="#addmodal" class="btn btn-primary btn-sm">Tambah</a>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="drivertable">
                            <thead>
                                <tr>
                                    <th style="width:10px;">No</th>
                                    {{-- <th>Username</th> --}}
                                    <th>Nama</th>
                                    {{-- <th>Email</th> --}}
                                    <th>No Telp</th>
                                    <th>Tanggal Lahir</th>
                                    <th>No KTP</th>
                                    <th>Kendaraan</th>
                                    <th>Alamat</th>
                                    {{-- <th>Foto STNK</th> --}}
                                    <th>Created at</th>
                                    <th>Update at</th>
                                    <th style="width:10px;" class='notexport'>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($driver as $no=>$d)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            {{-- <td>{{ $d->username }}</td> --}}
                                            <td>{{ $d->nama_driver }}</td>
                                            {{-- <td>{{ $d->email }}</td> --}}
                                            <td>{{ $d->nomor_telepon }}</td>
                                            <td>{{ $d->tanggal_lahir }}</td>
                                            <td>{{ $d->nomor_ktp }}</td>
                                            <td>{{ $d->kendaraan }}</td>
                                            <td>{{ $d->alamat_driver }}</td>
                                            {{-- <td>{{ $d->foto_stnk }}</td> --}}
                                            <td>{{ date('d-M-Y', strtotime($d->created_at))}}</td>
                                            <td>{{ date('d-M-Y', strtotime($d->updated_at))}}</td>
                                            <td class="text-center">
                                                <a href="#" data-id="<?= $d->id_driver; ?>" class="edit" data-toggle="tooltip" title="Edit" data-placement="top"><span class="badge badge-success"><i class="fas fa-edit"></i></span></a>
                                                <a href="#" data-id="<?= $d->id_driver; ?>" class="delete" data-toggle="tooltip" title="Hapus" data-placement="top"><span class="badge badge-danger"><i class="fas fa-trash"></i></span></a>
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

   {{-- Modal Tambah Driver --}}

   <div class="modal fade" id="addmodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Tambah Driver</h4>
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
                    <label for="nama_driver" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_driver" placeholder="Nama Driver" required>
                    </div>
                </div>  

                <div class="mb-3 row">
                    <label for="nomor_telepon" class="col-sm-2 col-form-label">No Telp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telp" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Nomor Telp" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nomor_ktp" class="col-sm-2 col-form-label">No KTP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nomor_ktp" placeholder="Nomor KTP" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="kendaraan" class="col-sm-2 col-form-label">Kendaraan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kendaraan" placeholder="Kendaraan" required>
                    </div>
                </div>

                {{-- <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10 validate">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                </div>   --}}

                <div class="mb-3 row">
                    <label for="alamat_driver" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10 validate">
                        <textarea name="alamat_driver" cols="30" rows="10"  class="form-control" placeholder="Alamat" required></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="foto_stnk" class="col-sm-2 col-form-label">Foto STNK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="foto_stnk" placeholder="Foto STNK" required>
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
    
    {{-- Modal Edit Pemda --}}

    <div class="modal fade" id="editmodal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Pemda</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editform">
                @csrf
                <input type="hidden" name="id_driver" id="id_driver">
                <div class="modal-body">
                    {{-- <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                        </div>
                    </div>   --}}
                    
                    <div class="mb-3 row">
                        <label for="nama_driver" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_driver" id="nama_driver" placeholder="Nama" required>
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
                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Nomor Telp" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nomor_ktp" class="col-sm-2 col-form-label">No KTP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nomor_ktp" id="nomor_ktp" placeholder="Nomor KTP" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="kendaraan" class="col-sm-2 col-form-label">Kendaraan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kendaraan" id="kendaraan" placeholder="Kendaraan" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat_driver" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10 validate">
                            <textarea name="alamat_driver" id="alamat_driver" cols="30" rows="10"  class="form-control" id="alamat_driver" placeholder="Alamat" required></textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="foto_stnk" class="col-sm-2 col-form-label">Foto STNK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="foto_stnk" id="foto_stnk" placeholder="Foto STNK" required>
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

            $('#drivertable').DataTable({
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
                    url : "{{url('admin/users/driver')}}",
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
                    data: {'id_driver':$(this).data('id'), '_token': "{{csrf_token()}}"},
                    type: 'POST',
                    url:"{{url('admin/users/driver/edit')}}",
                    success : function(data){
                        $('#id_driver').val(data[0].id_driver);
                        // $('#username').val(data[0].username);
                        $('#nama_driver').val(data[0].nama_driver);
                        // $('#email').val(data[0].email)
                        $('#nomor_telepon').val(data[0].nomor_telepon)
                        $('#tanggal_lahir').val(data[0].tanggal_lahir)
                        $('#nomor_ktp').val(data[0].nomor_ktp)
                        $('#kendaraan').val(data[0].kendaraan)
                        $('#alamat_driver').val(data[0].alamat_driver)
                        $('#foto_stnk').val(data[0].foto_stnk)

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
                    url : "{{url('admin/users/driver')}}",
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
                var confirmed = confirm('Hapus Akun Driver Ini ?');

                if(confirmed) {

                    $.ajax({
                        data: {'id_driver':$(this).data('id'), '_token': "{{csrf_token()}}"},
                        type: 'DELETE',
                        url:"{{url('admin/users/driver')}}",
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
