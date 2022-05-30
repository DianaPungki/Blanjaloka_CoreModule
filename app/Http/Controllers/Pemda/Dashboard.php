<?php
namespace App\Http\Controllers\Pemda;
use App\http\Controllers\Controller;
use Illuminate\Http\Request;

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
            'title' => 'Dashboard'
        ];
        return view('pemda.dashboard.index',$data);
    } 
}