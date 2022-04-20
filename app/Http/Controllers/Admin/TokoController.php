<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pasar;
use App\Models\Pedagang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class TokoController extends Controller
{
    public function index()
    {
        $data=[
            'title' => 'Data Toko',
            'pasar' => Pasar::all(),
            'toko' => Pedagang::all()
        ];

        return view('admin.toko.data_toko.index', $data);
    }

      # get datatables toko
      public function datatokojson(){

        $query = DB::table('pedagang')->join('pasar', 'pasar.id_pasar', '=', 'pedagang.id_pasar')->orderBy('pedagang.id_pedagang', "DESC")->get();
        return DataTables::of($query)
        ->addIndexColumn()
        ->addColumn('status', function($query){
            return $query->status == 'on' ? "<i class='text-primary'>Active</i>" : "<i class='text-danger'>Not-active</i>";
        })
        ->addColumn('total_produk', function($query){

            # Belum Berfungsi
            return '23 Produk';

        })
        ->addColumn('action', function($query){
            
            if($query->status == 'on'){

                return '
                <a href="" data-toggle="tooltip" title="Lihat Toko" data-placement="top"><span class="badge badge-success"><i class="fas fa-store-alt"></i></span></a>
                <a href="'.url('admin/toko/jam/'.$query->id_pedagang).'" data-toggle="tooltip" title="Jam Toko" data-placement="top"><span class="badge badge-info"><i class="fas fa-cog"></i></span></a>
                <a href="#" class="status" data-id="'.$query->id_pedagang.'" data-status="off" data-pesan="Ubah Status Toko Menjadi Non Aktif ?" data-toggle="tooltip" title="Not Active" data-placement="top"><span class="badge badge-danger"><i class="fas fa-times"></i></span></a>
                ';

            }else{

                return '
                <a href="" data-toggle="tooltip" title="Lihat Toko" data-placement="top"><span class="badge badge-success"><i class="fas fa-store-alt"></i></span></a>
                <a href="'.url('admin/toko/jam/'.$query->id_pedagang).'" data-toggle="tooltip" title="Jam Toko" data-placement="top"><span class="badge badge-info"><i class="fas fa-cog"></i></span></a>
                <a href="#" class="status" data-id="'.$query->id_pedagang.'" data-status="on" data-pesan="Ubah Status Toko Menjadi Aktif ?" data-toggle="tooltip" title="Active" data-placement="top"><span class="badge badge-primary"><i class="fas fa-check-double"></i></span></a>
                ';

            }

        })
        ->rawColumns(['status', 'total_produk', 'action'])
        ->make(true);
    }

    // -----------------------------------------------------------------------------------------------------------------------------
    // jam
    public function jamoperasional(Request $request){

        $data = [
            'title' => 'Jam Operasional',
            'jamtoko' => DB::table('jam_toko')->where('id_pedagang', $request->segment(4))->get(),
            'pedagang' => DB::table('pasar')->join('pedagang', 'pasar.id_pasar', '=', 'pedagang.id_pasar')->where('pedagang.id_pedagang', $request->segment(4))->get(),
            'id_pedagang' => $request->segment(4)
        ];

        return view('admin/toko/data_toko/jamtoko', $data);

    }

       public function insertjam(Request $request){

        $data = [
            'catatan' => $request->post('catatan'),
            'hari' => $request->post('hari'),
            'buka' => $request->post('buka'),
            'tutup' => $request->post('tutup'),
            'id_pedagang' => $request->post('id_pedagang')
        ];

        DB::table('jam_toko')->insert($data);
        
        return response()->json([
            'pesan' => 'Berhasil Tambah Jam Operasional Toko'
        ]);

    }

    public function getjam(Request $request){
        return response()->json(
            DB::table('jam_toko')->where('id_jamtoko', $request->post('id_jamtoko'))->get()
        );
    }   

    public function updatejam(Request $request){

        $data = [
            'catatan' => $request->post('catatan'),
            'hari' => $request->post('hari'),
            'buka' => $request->post('buka'),
            'tutup' => $request->post('tutup'),
        ];

        DB::table('jam_toko')->where('id_jamtoko', $request->post('id_jamtoko'))->update($data);
        
        return response()->json([
            'pesan' => 'Berhasil Update Jam Operasional Toko'
        ]);

    }

    public function deletejam(Request $request){
        DB::table('jam_toko')->where('id_jamtoko', $request->post('id_jamtoko'))->delete();
        return response()->json([
            'pesan' => 'Berhasil Hapus Jam Operasional Toko'
        ]);
    }

    // ------------------------------------------------------------------------------
    public function updatestatustoko(Request $request){
        DB::table('pedagang')->where('id_pedagang', $request->post('id_pedagang'))->update(['status'=>$request->post('status')]);
        return response()->json([
            'pesan' => 'Berhasil Update Status Toko'
        ]);
    }
}
