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
                            <li class="breadcrumb-item">Users</li>
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
                       Data Pedagang

                        <div class="float-right d-none d-sm-inline-block">
                            <a href="#" data-toggle="modal" data-target="#addmodal" class="btn btn-primary btn-sm">Tambah</a>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered " id="pedagangtable">
                            <thead>
                                <tr>
                                    <th style="width:10px;">No</th>
                                    {{-- <th>Username</th> --}}
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No Telp</th>
                                    <th>No KTP</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat Pedagang</th>
                                    <th>Nama Pasar</th>
                                    <th>Nama Toko</th>
                                    <th>Alamat Toko</th>
                                    {{-- <th>Status</th> --}}
                                    <th style="width:10px;" class='notexport'>Aksi</th>
                                    <th>Bank</th>
                                    <th>No Rekening</th>
                                    <th>Foto Rekening</th>
                                    <th>Created at</th>
                                    <th>Update at</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedagang as $no=>$p)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            <td>{{ $p->nama_pedagang }}</td>
                                            <td>{{ $p->email }}</td>
                                            <td>{{ $p->nomor_telepon }}</td>
                                            <td>{{ $p->nomor_ktp }}</td>
                                            <td>{{ $p->tanggal_lahir }}</td>
                                            <td>{{ $p->alamat_pedagang }}</td>
                                            <td>{{ $p->nama_pasar }}</td>
                                            <td>{{ $p->nama_toko }}</td>
                                            <td>{{ $p->alamat_toko }}</td>
                                            {{-- <td>{{ $p->status }}</td> --}}
                                            <td class="text-center">
                                                <a href="#" data-id="<?= $p->id_pedagang; ?>" class="edit" data-toggle="tooltip" title="Edit" data-placement="top"><span class="badge badge-success"><i class="fas fa-edit"></i></span></a>
                                                <a href="#" data-id="<?= $p->id_pedagang; ?>" class="delete" data-toggle="tooltip" title="Hapus" data-placement="top"><span class="badge badge-danger"><i class="fas fa-trash"></i></span></a>
                                            </td>                                            
                                            <td>{{ $p->bank }}</td>
                                            <td>{{ $p->no_rekening }}</td>
                                            <td>
                                                <img src="{{ asset('assets/admin/pedagang/foto_rekening/' . $p->foto_rekening) }}" alt="" width="50px">
                                            </td>
                                            <td>{{ date('d-M-Y', strtotime($p->created_at))}}</td>
                                            <td>{{ date('d-M-Y', strtotime($p->updated_at))}}</td>
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
        <form id="tambahform" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3 row">
                    <label for="nama_pedagang" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_pedagang" placeholder="Nama Pedagang" required>
                    </div>
                </div>  

                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                    </div>
                </div>  

                <div class="mb-3 row">
                    <label for="nomor_telepon" class="col-sm-2 col-form-label">No Telp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telp" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nomor_ktp" class="col-sm-2 col-form-label">No KTP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nomor_ktp" placeholder="Nomor KTP" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="alamat_pedagang" class="col-sm-2 col-form-label">Alamat Pedagang</label>
                    <div class="col-sm-10 validate">
                        <textarea name="alamat_pedagang" cols="30" rows="10"  class="form-control" placeholder="Alamat Pedagang" required></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="id_pasar" class="col-sm-2 col-form-label">Nama Pasar</label>
                    <div class="col-sm-10">
                        <select class="custom-select" required name="id_pasar" id="id_pasar">
                            <option selected value="">- PILIH PASAR -</option>
                            @foreach($pasar as $p)
                                    <option value="{{$p->id_pasar}}">{{$p->nama_pasar}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>  

                <div class="mb-3 row">
                    <label for="nama_toko" class="col-sm-2 col-form-label">Nama Toko</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_toko" placeholder="Nama Toko" required>
                    </div>
                </div>  

                <div class="mb-3 row">
                    <label for="alamat_toko" class="col-sm-2 col-form-label">Alamat Toko</label>
                    <div class="col-sm-10 validate">
                        <textarea name="alamat_toko" cols="30" rows="10"  class="form-control" placeholder="Alamat Toko" required></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <input type="radio"  name="status" value="on" placeholder="Status" required>Aktif
                        <br>
                        <input type="radio" name="status" value="off" placeholder="Status" required>Tidak Aktif
                    </div>
                </div> 

                <div class="mb-3 row">
                    <label for="nis" class="col-sm-2 col-form-label">Bank</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="bank"  placeholder="bank" required>
                    </div>
                </div> 

                <div class="mb-3 row">
                    <label for="nis" class="col-sm-2 col-form-label">Nomor Rekening</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="no_rekening"  placeholder="Nomor rekening" required>
                    </div>
                </div> 

                <div class="mb-3 row">
                    <label for="foto_rekening" class="col-sm-2 col-form-label">Foto Rekening</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="foto_rekening" placeholder="Foto Rekening" required accept=".png,.jpg,.svg">
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
            <form id="editform" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_pedagang" id="id_pedagang">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="nama_pedagang" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_pedagang" id="nama_pedagang" placeholder="Nama Pedagang" required>
                        </div>
                    </div>  
    
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>  
    
                    <div class="mb-3 row">
                        <label for="nomor_telepon" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon" placeholder="Nomor Telp" required>
                        </div>
                    </div>
    
                    <div class="mb-3 row">
                        <label for="nomor_ktp" class="col-sm-2 col-form-label">No KTP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nomor_ktp" id="nomor_ktp" placeholder="Nomor KTP" required>
                        </div>
                    </div>
    
                    <div class="mb-3 row">
                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" required>
                        </div>
                    </div>
    
                    <div class="mb-3 row">
                        <label for="alamat_pedagang" class="col-sm-2 col-form-label">Alamat Pedagang</label>
                        <div class="col-sm-10 validate">
                            <textarea name="alamat_pedagang" cols="30" rows="10" id="alamat_pedagang" class="form-control" placeholder="Alamat Pedagang" required></textarea>
                        </div>
                    </div>
    
                    <div class="mb-3 row">
                        <label for="id_pasar" class="col-sm-2 col-form-label">Nama Pasar</label>
                        <div class="col-sm-10">
                            <select class="custom-select" required name="id_pasar" id="id_pasar">
                                <option selected value="">- PILIH PASAR -</option>
                                @foreach($pasar as $p)
                                        <option value="{{$p->id_pasar}}">{{$p->nama_pasar}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>  
    
                    <div class="mb-3 row">
                        <label for="nama_toko" class="col-sm-2 col-form-label">Nama Toko</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_toko" id="nama_toko" placeholder="Nama Toko" required>
                        </div>
                    </div>  
    
                    <div class="mb-3 row">
                        <label for="alamat_toko" class="col-sm-2 col-form-label">Alamat Toko</label>
                        <div class="col-sm-10 validate">
                            <textarea name="alamat_toko" cols="30" rows="10" id="alamat_toko" class="form-control" placeholder="Alamat Toko" required></textarea>
                        </div>
                    </div>
    
                    <div class="mb-3 row">
                        <label for="nama_alumni" class="col-sm-2 col-form-label">status</label>
                        <div class="col-sm-10">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input role" type="radio" name="status" id="flexRadioDefault11" required value="on">
                                <label class="custom-control-label" for="flexRadioDefault11" style="font-weight: normal;">
                                    Aktif
                                </label>
                                </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input role" type="radio" name="status" id="flexRadioDefault22" required value="off">
                                <label class="custom-control-label" for="flexRadioDefault22" style="font-weight: normal;">
                                    Tidak Aktif
                                </label>
                            </div>
                        </div>
                    </div> 
    
                    <div class="mb-3 row">
                        <label for="nis" class="col-sm-2 col-form-label">Bank</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="bank" id="bank" placeholder="bank" required>
                        </div>
                    </div> 
    
                    <div class="mb-3 row">
                        <label for="nis" class="col-sm-2 col-form-label">Nomor Rekening</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_rekening" id="no_rekening" placeholder="Nomor rekening" required>
                        </div>
                    </div> 
    
                    <div class="mb-3 row">
                        <label for="foto_rekening" class="col-sm-2 col-form-label">Foto Rekening</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="foto_rekening" id="foto_rekening" placeholder="Foto Rekening"  accept=".png,.jpg,.svg">
                        </div>
                    </div> 
    
                    <div class="mb-3 row">
                        <label for="nis" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10 validate">
                            <input type="password" class="form-control" name="password" autocomplete="on" placeholder="Password" >
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
                        $('#email').val(data[0].email)
                        $('#nama_pedagang').val(data[0].nama_pedagang);
                        $('#nomor_telepon').val(data[0].nomor_telepon)
                        $('#nomor_ktp').val(data[0].nomor_ktp)
                        $('#tanggal_lahir').val(data[0].tanggal_lahir)
                        $('#alamat_pedagang').val(data[0].alamat_pedagang)
                        $('#nama_toko').val(data[0].nama_toko);
                        $('#alamat_toko').val(data[0].alamat_toko)
                        $('#no_rekening').val(data[0].no_rekening)
                        $('#bank').val(data[0].bank)
                        
                        if(data[0].role == "pimpinan"){
                            $('#flexRadioDefault11').prop('checked', true);
                        }else{
                            $('#flexRadioDefault22').prop('checked', true);
                        }

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
