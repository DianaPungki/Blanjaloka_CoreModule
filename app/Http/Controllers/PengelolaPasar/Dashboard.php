<?php
namespace App\Http\Controllers\PengelolaPasar;
use App\http\Controllers\Controller;
use App\Models\Pasar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *[]
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'pasar' => Pasar::join('pengelola_pasar','pasar.id_pengelola','=','pengelola_pasar.id_pengelola')->where('pengelola_pasar.id_pengelola','=',auth()->user()->id_pengelola)->get(),
            'jampasar' => DB::table('jam_pasar')->join('pasar','jam_pasar.id_pasar','=','pasar.id_pasar')->join('pengelola_pasar','pasar.id_pengelola','=','pengelola_pasar.id_pengelola')->where('pengelola_pasar.id_pengelola','=',auth()->user()->id_pengelola)->get(),
        ];
        
        return view('pengelola.dashboard.index',$data);
    } 

    public function insertjam(Request $request){

        $data = [
            'catatan' => $request->post('catatan'),
            'hari' => $request->post('hari'),
            'buka' => $request->post('buka'),
            'tutup' => $request->post('tutup'),
            'id_pasar' => $request->post('id_pasar')
        ];

        DB::table('jam_pasar')->insert($data);
        
        return response()->json([
            'pesan' => 'Berhasil Tambah Jam Operasional Pasar'
        ]);

    }

    public function getjam(Request $request){
        return response()->json(
            DB::table('jam_pasar')->where('id_jampasar', $request->post('id_jampasar'))->get()
        );
    } 

    public function updatejam(Request $request){

        $data = [
            'catatan' => $request->post('catatan'),
            'hari' => $request->post('hari'),
            'buka' => $request->post('buka'),
            'tutup' => $request->post('tutup'),
        ];

        DB::table('jam_pasar')->where('id_jampasar', $request->post('id_jampasar'))->update($data);
        
        return response()->json([
            'pesan' => 'Berhasil Update Jam Operasional Pasar'
        ]);

    }

    public function deletejam(Request $request){
        DB::table('jam_pasar')->where('id_jampasar', $request->post('id_jampasar'))->delete();
        return response()->json([
            'pesan' => 'Berhasil Hapus Jam Operasional Pasar'
        ]);
    }
}