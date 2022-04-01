@extends('admin/master-admin')
@section('content')
@php use Illuminate\Support\Facades\DB; @endphp
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Customer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Data Customers</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Data Customers
                            <a href="{{url('admin/users/customers/add')}}" class="btn btn-primary btn-sm" type="button" style="float: right;">Tambah</a>
                        </div>

                        <div class="card-body">
                        <table id="customerstable" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="width:10px;">No</th>
                                <th>Nam</th>
                                <th>Email</th>
                                <th>No Telpon</th>
                                <th class='notexport'>Created At</th>
                                <th class='notexport'>Update At</th>
                                <th style="width:10px;" class='notexport'>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $no=>$c)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            <td>{{ $c->nama_customer }}</td>
                                            <td>{{ $c->email_customer }}</td>
                                            <td>{{ $c->nomor_telepon }}</td>
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
            </div>
        </div>
    </section>
</div>
<script>
    $(document).ready(function() {
            $('.spinner').hide();

            $('[data-toggle="tooltip"]').tooltip();

            $('#customerstable').DataTable({
                "responsive": true,
                dom: 'Bfrtip',
                buttons: [{
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
            $('#tambahform').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ url('admin/produk/kategori/insert') }}",
                    type: "POST",
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $('.spinner').show();
                    },
                    complete: function() {
                        $('.spinner').hide();
                    },
                    success: function(data) {
                        swal(data.pesan)
                            .then((result) => {
                                location.reload();
                            });
                    },
                    error: function(err) {
                        alert(err);
                    }
                })
            });

            //-------------------------------------

            //show modal update form 
            $('.edit').click(function(e) {
                e.preventDefault();
                $.ajax({
                    data: {
                        'id_kategori': $(this).data('id'),
                        '_token': "{{ csrf_token() }}"
                    },
                    type: 'POST',
                    url: "{{ url('admin/produk/kategori/get') }}",
                    success: function(data) {
                        $('#id_kategori').val(data[0].id_kategori);
                        $('#nama_kategori').val(data[0].nama_kategori);
                        $('.icon_kategori').val(data[0].icon_kategori);

                        $('#editmodal').modal('show');
                    },
                    error: function(err) {
                        alert(err);
                        console.log(err);
                    }
                });
            });


            //----------------------------------------
            // edit form
            $('#editform').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ url('admin/produk/kategori/update') }}",
                    type: "POST",
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $('.spinner').show();
                    },
                    complete: function() {
                        $('.spinner').hide();
                    },
                    success: function(data) {
                        swal(data.pesan)
                            .then((result) => {
                                location.reload();
                            });
                    },
                    error: function(err) {
                        alert(err);
                    }
                })
            });

            //----------------------------------------------
            // hapus form
            $('.delete').click(function(e) {
                e.preventDefault();
                var confirmed = confirm('Hapus Kategori Produk Ini ?');

                if (confirmed) {

                    $.ajax({
                        data: {
                            'id_kategori': $(this).data('id'),
                            '_token': "{{ csrf_token() }}"
                        },
                        type: 'POST',
                        url: "{{ url('admin/produk/kategori/delete') }}",
                        success: function(data) {
                            swal(data.pesan)
                                .then((result) => {
                                    location.reload();
                                });
                        },
                        error: function(err) {
                            alert(err);
                            console.log(err);
                        }
                    });
                }
            });

        });
</script>
@endsection