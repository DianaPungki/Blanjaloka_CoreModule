@extends('pengelola/master-pengelola')
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
            ajax: "{{url('pengelola/toko/json')}}",
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
                    url:"{{url('pengelola/toko/status')}}",
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