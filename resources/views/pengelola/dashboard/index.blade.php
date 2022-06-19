@extends('pengelola.master-pengelola')
   
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pengelola Pasar</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
         
          <!-- /.card -->

          @foreach ($pasar as $p)
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Pasar</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nama Pasar</th>
                    <th>{{ $p->nama_pasar }}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Nama Pengelola</th>
                    <th>{{ $p->nama_pengelola }}</th>
                  </tr>
                  <tr>
                    <th>Alamat</th>
                    <th>
                      {{ $p->alamat }}
                    </th>
                  </tr>
                  <tr>
                    <th>Maksimal Toko</th>
                    <th>{{ $p->max_toko }}</th>
                  </tr>
                  <tr>
                    <th>Maksimal Pengunjung</th>
                    <th>{{ $p->max_pengunjung }}</th>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          @endforeach
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Jam Operasional Pasar</h3>
              
              <div class="float-right d-none d-sm-inline-block">
                <a href="#" data-toggle="modal" data-target="#addjampasar" class="btn btn-primary btn-sm">Tambah</a>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Catatan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                @foreach ($jampasar as $no=>$j)
                <tbody>
                  <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $j->hari }}</td>
                    <td>{{ $j->buka . " - ". $j->tutup }}</td>
                    <td>{{ $j->catatan }}</td>
                    <td class="text-center">
                      <a href="#"  class="edit_jampasar" data-id="{{$j->id_jampasar}}" data-toggle="tooltip" title="Edit" data-placement="top"><span class="badge badge-success"><i class="fas fa-edit"></i></span></a>
                      <a href="#" data-id="<?= $j->id_jampasar; ?>" class="delete_jampasar" data-toggle="tooltip" title="Hapus" data-placement="top"><span class="badge badge-danger"><i class="fas fa-trash"></i></span></a>
                  </td>
                  </tr>
             
                </tbody>
                @endforeach
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


 {{-- Modal Tambah Jam Pasar --}}
 <div class="modal fade" id="addjampasar">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Tambahkan Jam Operasional Pasar</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <form id="saveform">
          @csrf
          @foreach ($pasar as $p)
          <input type="hidden" name="id_pasar" value="{{$p->id_pasar}}">
          @endforeach
          <div class="modal-body">
              <div class="mb-3 row">
                  <label for="nis" class="col-sm-2 col-form-label">Pilih Hari</label>
                  <div class="col-sm-10">
                      <select class="custom-select" required name="hari">
                          <option selected value="">- PILIH HARI -</option>
                          <option value="senin">- SENIN -</option>
                          <option value="selasa">- SELASA -</option>
                          <option value="rabu">- RABU -</option>
                          <option value="kamis">- KAMIS -</option>
                          <option value="jumat">- JUMAT -</option>
                          <option value="sabtu">- SABTU -</option>
                          <option value="minggu">- MINGGU -</option>
                      </select>
                  </div>
              </div>

              <div class="mb-3 row">
                  <label for="nis" class="col-sm-2 col-form-label">Jam Buka</label>
                  <div class="col-sm-10">
                      <input type="time" name="buka" id="" required class="form-control" placeholder="Jam Pasar Buka">
                  </div>
              </div>

              <div class="mb-3 row">
                  <label for="nis" class="col-sm-2 col-form-label">Jam Tutup</label>
                  <div class="col-sm-10">
                      <input type="time" name="tutup" id="" required class="form-control" placeholder="Jam Pasar Tutup">
                  </div>
              </div>

              <div class="mb-3 row">
                  <label for="nis" class="col-sm-2 col-form-label">Catatan</label>
                  <div class="col-sm-10">
                      <input type="text" name="catatan" id="" class="form-control" placeholder="Catatan Tambahan">
                  </div>
              </div>

          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary btn-sm">  
                  Simpan
              </button>
          </div>
      </form>
      </div>
  </div>
</div>

{{-- Modal Edit Jam Pasar --}}
<div class="modal fade" id="editjampasar">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Update Jam Operasional Pasar</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <form id="updateform">
          @csrf
          <input type="hidden" name="id_jampasar" id="id_jampasar">
          <div class="modal-body">
              <div class="mb-3 row">
                  <label for="nis" class="col-sm-2 col-form-label">Pilih Hari</label>
                  <div class="col-sm-10">
                      <select class="custom-select" required name="hari" id="hari">
                          <option selected value="">- PILIH HARI -</option>
                          <option value="senin">- SENIN -</option>
                          <option value="selasa">- SELASA -</option>
                          <option value="rabu">- RABU -</option>
                          <option value="kamis">- KAMIS -</option>
                          <option value="jumat">- JUMAT -</option>
                          <option value="sabtu">- SABTU -</option>
                          <option value="minggu">- MINGGU -</option>
                      </select>
                  </div>
              </div>

              <div class="mb-3 row">
                  <label for="nis" class="col-sm-2 col-form-label">Jam Buka</label>
                  <div class="col-sm-10">
                      <input type="time" name="buka" id="buka" required class="form-control" placeholder="Jam Pasar Buka">
                  </div>
              </div>

              <div class="mb-3 row">
                  <label for="nis" class="col-sm-2 col-form-label">Jam Tutup</label>
                  <div class="col-sm-10">
                      <input type="time" name="tutup" id="tutup" required class="form-control" placeholder="Jam Pasar Tutup">
                  </div>
              </div>

              <div class="mb-3 row">
                  <label for="nis" class="col-sm-2 col-form-label">Catatan</label>
                  <div class="col-sm-10">
                      <input type="text" name="catatan" id="catatan" class="form-control" placeholder="Catatan Tambahan">
                  </div>
              </div>

          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary btn-sm">  
                  Update
              </button>
          </div>
      </form>
      </div>
  </div>
</div>

<script>
  $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
      
      $('#pasartable').DataTable({
          "responsive":true,
      });

      //save form
      $('#saveform').submit(function(e){
          e.preventDefault();
          $.ajax({
              data: $(this).serialize(),
              type: 'POST',
              url:"{{url('pengelola/jam/insert')}}",
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

      });


      //show modal update form 
      $('.edit_jampasar').click(function(e){
          e.preventDefault();
          $.ajax({
              data: {'id_jampasar':$(this).data('id'), '_token': "{{csrf_token()}}"},
              type: 'POST',
              url:"{{url('pengelola/jam/get')}}",
              success : function(data){
                  $('#id_jampasar').val(data[0].id_jampasar);
                  $('#hari').val(data[0].hari);
                  $('#buka').val(data[0].buka);
                  $('#tutup').val(data[0].tutup);
                  $('#catatan').val(data[0].catatan);
                  
                  $('#editjampasar').modal('show');
              },
              error : function(err){
                  alert(err);
                  console.log(err);
              }
          });
      });

      //update jam pasar
      $('#updateform').submit(function(e){
          e.preventDefault();
          $.ajax({
              data: $(this).serialize(),
              type: 'POST',
              url:"{{url('pengelola/jam/update')}}",
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

      });

      //delete jam pasar
      $('.delete_jampasar').click(function(e){
          e.preventDefault();
          var confirmed = confirm('Hapus jam ini ?');

          if(confirmed) {

              $.ajax({
                  data: {'id_jampasar':$(this).data('id'), '_token': "{{csrf_token()}}"},
                  type: 'POST',
                  url:"{{url('pengelola/jam/delete')}}",
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