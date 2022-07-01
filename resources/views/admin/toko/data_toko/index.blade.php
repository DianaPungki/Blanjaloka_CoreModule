@extends('admin/master-admin')
@section('content')
@php use Illuminate\Support\Facades\DB; @endphp

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Toko</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Data Toko</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Data Toko 
                </div>
                <div class="card-header bg-light">
                    <form action="{{ url('admin/toko') }}" method="get">
                        <div class="mb-3 row">
                            <label for="nis" class="col-sm-2 col-form-label">Pilih Pasar</label>
                            <div class="col-sm-10">
                                <select class="custom-select" required name="id_pasar" required>
                                    <option selected value="">Pilih Lokasi Pasar</option>
                                    @foreach ($pasar as $p)
                                        <option value="{{$p->id_pasar}}">{{$p->nama_pasar}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mt-3 mb-3 row">
                            <label for="nis" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary btn-sm">Terapkan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <table id="tokotable" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th style="width:10px;">No</th>
                            <th>Nama Pedagang</th>
                            <th>Lokasi Pasar</th>
                            <th>Nama Toko</th>
                            <th>Total Produk</th>
                            <th>Status</th>
                            <th style="width: 60px">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($toko as $no=>$t )
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $t->nama_pedagang }}</td>
                                <td>{{ $t->nama_pasar }}</td>
                                <td>{{ $t->nama_toko }}</td>
                                <td>{{count(DB::table('produk')->where('id_pedagang', $t->id_pedagang)->get()).' Produk'}}</td>
                                <td>
                                    @if ($t->status == "on")
                                        <i class='text-primary'>Active</i>
                                    @elseif ($t->status == "off")
                                        <i class='text-danger'>Non Aktif</i>
                                    @endif
                                </td>
                                <td>
                                    @if ($t->status == 'on')
                                        <a href="" data-toggle="tooltip" title="Lihat Toko" data-placement="top"><span class="badge badge-success"><i class="fas fa-store-alt"></i></span></a>
                                        <a href="{{ url('admin/toko/jam/'.$t->id_pedagang) }}" data-toggle="tooltip" title="Jam Toko" data-placement="top"><span class="badge badge-info"><i class="fas fa-cog"></i></span></a>
                                        <a href="#" class="editnon" data-id="{{ $t->id_pedagang }}" data-status="off" data-pesan="Ubah Status Toko Menjadi Non Aktif ?" data-toggle="tooltip" title="Not Active" data-placement="top"><span class="badge badge-danger"><i class="fas fa-times"></i></span></a>
                                    @elseif ($t->status == 'off')
                                        <a href="" data-toggle="tooltip" title="Lihat Toko" data-placement="top"><span class="badge badge-success"><i class="fas fa-store-alt"></i></span></a>
                                        <a href="{{  url('admin/toko/jam/'.$t->id_pedagang) }}" data-toggle="tooltip" title="Jam Toko" data-placement="top"><span class="badge badge-info"><i class="fas fa-cog"></i></span></a>
                                        <a href="#" class="edita" data-id="{{ $t->id_pedagang }}" data-status="on" data-pesan="Ubah Status Toko Menjadi Aktif ?" data-toggle="tooltip" title="Active" data-placement="top"><span class="badge badge-primary"><i class="fas fa-check-double"></i></span></a>
                                    @endif
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

        $('#tokotable').DataTable({
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

        $('.editnon').click(function(e){
            e.preventDefault();
            var confirmed = confirm('Non Aktifkan Akun pedagang Ini ?');

            if(confirmed) {

                $.ajax({
                    data: {'id_pedagang':$(this).data('id'), '_token': "{{csrf_token()}}"},
                    type: 'PUT',
                    url:"{{url('admin/toko/status/nonaktif')}}",
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

        $('.edita').click(function(e){
            e.preventDefault();
            var confirmed = confirm('Aktifkan Akun pedagang Ini ?');

            if(confirmed) {

                $.ajax({
                    data: {'id_pedagang':$(this).data('id'), '_token': "{{csrf_token()}}"},
                    type: 'PUT',
                    url:"{{url('admin/toko/status/aktif')}}",
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