@extends('admin/master-admin')
@section('content')

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
                    <form action="#" method="get">
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
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
</div>

<script>
    $(document).ready(function(){
        $('body').tooltip({selector: '[data-toggle="tooltip"]'});

        $('#tokotable').DataTable({
            "responsive":true,
            processing: true,
            serverSide: true,
            ajax: "{{url('admin/toko/json')}}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'nama_pedagang', name: 'nama_pedagang' },
                { data: 'nama_pasar', name: 'nama_pasar' },
                { data: 'nama_toko', name: 'nama_toko' },
                { data: 'total_produk', name: 'total_produk' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action' },

            ],
        });

        $('#tokotable').on('click', '.status[data-id]', function(e){
            e.preventDefault();

            var confirmed = confirm($(this).data('pesan'));

            if(confirmed) {

                $.ajax({
                    data: {'id_pedagang':$(this).data('id'), '_token': "{{csrf_token()}}", 'status':$(this).data('status')},
                    type: 'POST',
                    url:"{{url('admin/toko/status')}}",
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