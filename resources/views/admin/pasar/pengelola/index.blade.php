@extends('admin/master-admin')
@section('content')
@php use Illuminate\Support\Facades\DB; @endphp
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pengelola Pasar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Pengelola Pasar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        Pengelola Pasar

                        <div class="float-right d-none d-sm-inline-block">
                            <a href="#" data-toggle="modal" data-target="#addmodal" class="btn btn-primary btn-sm">Tambah</a>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="pengelolatable">
                            <thead>
                                <tr>
                                    <th style="width:10px;">No</th>
                                    <th>Nama</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    {{-- <th>Tanggal Lahir</th> --}}
                                    <th>Alamat</th>
                                    {{-- <th>No. KTP</th> --}}
                                    {{-- <th>Foto KTP</th> --}}
                                    <th>Created at</th>
                                    <th>Update at</th>
                                    <th style="width:10px;" class='notexport'>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengelola as $no=>$p)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            <td>{{ $p->nama_pengelola }}</td>
                                            <td>{{ $p->nomor_telepon }}</td>
                                            <td>{{ $p->email }}</td>
                                            {{-- <td>Tanggal lahir</td> --}}
                                            <td>{{ $p->alamat_pengelola }}</td>
                                            {{-- <td>No KTP</td> --}}
                                            {{-- <td>Foto KTP</td> --}}
                                            <td>{{ date('d-M-Y', strtotime($p->created_at))}}</td>
                                            <td>{{ date('d-M-Y', strtotime($p->updated_at))}}</td>
                                            <td class="text-center">
                                                <a href="#" data-id="<?= $p->id_pengelola; ?>" class="edit" data-toggle="tooltip" title="Edit" data-placement="top"><span class="badge badge-success"><i class="fas fa-edit"></i></span></a>
                                                <a href="#" data-id="<?= $p->id_pengelola; ?>" class="delete" data-toggle="tooltip" title="Hapus" data-placement="top"><span class="badge badge-danger"><i class="fas fa-trash"></i></span></a>
                                            </td>
                                            {{-- <td>
                                                <br>
                                                @if(count(DB::table('pengelola_pasar')->where('pengelola_pasar.id_pengelola', $p->id_pengelola)->get()) == 0)
                                                    <b class="text-danger">Belum Mengelola Pasar Manapun</b>
                                                @else
                                                    @foreach(DB::table('pengelola_pasar')->where('pengelola_pasar.id_pengelola', $p->id_pengelola)->get() as $pp)
                                                        <b class="text-primary">{{$pp->nama_pasar}}</b>
                                                    @endforeach
                                                @endif
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>
    </div>

    {{-- Modal Tambah Pengelola Pasar --}}

    <div class="modal fade" id="addmodal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Pengelola Pasar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="tambahform">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="nama_pengelola" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_pengelola" placeholder="Nama Pengelola" required>
                        </div>
                    </div>  
    
                    <div class="mb-3 row">
                        <label for="nomor_telepon" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telp" required>
                        </div>
                    </div>
    
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10 validate">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                    </div>  

                    <div class="mb-3 row">
                        <label for="alamat_pengelola" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10 validate">
                            <textarea name="alamat_pengelola" id="" cols="30" rows="10"  class="form-control" required>Alamat</textarea>
                        </div>
                    </div>
    
                    <div class="mb-3 row">
                        <label for="nis" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10 validate">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
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
    
    {{-- Modal Edit Pengelola Pasar --}}

    <div class="modal fade" id="editmodal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Pengelola Pasar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editform">
                @csrf
                <input type="hidden" name="id_pengelola" id="id_pengelola">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="nama_pengelola" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_pengelola" id="nama_pengelola" placeholder="Nama Pengelola" required>
                        </div>
                    </div>  
    
                    <div class="mb-3 row">
                        <label for="nomor_telepon" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon" placeholder="Nomor Telp" required>
                        </div>
                    </div>
    
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10 validate">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>  

                    <div class="mb-3 row">
                        <label for="alamat_pengelola" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10 validate">
                            <textarea name="alamat_pengelola" id="" cols="30" rows="10"  class="form-control" id="alamat_pengelola" required>Alamat</textarea>
                        </div>
                    </div>
    
                    <div class="mb-3 row">
                        <label for="nis" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10 validate">
                            <input type="password" class="form-control" name="password" placeholder="Password">
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

            $('#pengelolatable').DataTable({
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

            //----------------------------

            // insert form
            $('#tambahform').submit(function(e){
                e.preventDefault();

                $.ajax({
                    url : "{{url('admin/pasar/pengelola/insert')}}",
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
                    data: {'id_pengelola':$(this).data('id'), '_token': "{{csrf_token()}}"},
                    type: 'POST',
                    url:"{{url('admin/pasar/pengelola/get')}}",
                    success : function(data){
                        $('#id_pengelola').val(data[0].id_pengelola);
                        $('#nama_pengelola').val(data[0].nama_pengelola);
                        $('#alamat_pengelola').val(data[0].alamat_pengelola);
                        $('#nomor_telepon').val(data[0].nomor_telepon);
                        $('#email').val(data[0].email);


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
                    url : "{{url('admin/pasar/pengelola/update')}}",
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

            //----------------------------------------------
            // hapus form
            $('.delete').click(function(e){
                e.preventDefault();
                var confirmed = confirm('Hapus Akun Pengelola Ini ?');

                if(confirmed) {

                    $.ajax({
                        data: {'id_pengelola':$(this).data('id'), '_token': "{{csrf_token()}}"},
                        type: 'POST',
                        url:"{{url('admin/pasar/pengelola/delete')}}",
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
