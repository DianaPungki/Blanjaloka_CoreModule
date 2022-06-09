<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
     /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:admin')->except('logout');
            $this->middleware('guest:pemda')->except('logout');
    }

    public function login_admin(Request $request)
    {
        return view('admin.auth.login');
    }

    public function login_admin_handler(Request $request)
    {
         # Validator
         $validator = Validator::make($request->all(),[
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        # if else validator salah atau benar
        if($validator->fails()){

            # jika validasi error kembali ke laman login admin dengan pesan error
            return redirect('admin/login')->withErrors($validator);

        }

        // Attempt to log the user in
            // Passwordnya pake bcrypt
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            return redirect()->intended('/admin');
        } else {
            return redirect()->intended('admin/login');
        }
    }

    public function login_pengelola(Request $request)
    {
     return view('pengelola.auth.login');
    }

    public function login_pengelola_handler(Request $request)
    {
         # Validator
         $validator = Validator::make($request->all(),[
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        # if else validator salah atau benar
        if($validator->fails()){

            # jika validasi error kembali ke laman login pemda dengan pesan error
            return redirect('pengelola/login')->withErrors($validator);

        }

        // Attempt to log the user in
            // Passwordnya pake bcrypt
        if (Auth::guard('pengelola')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            return redirect()->intended('/pengelola');
        } else {
            return redirect()->intended('pengelola/login');
        }
    }

    public function login_pemda(Request $request)
    {
     return view('pemda.auth.login');
    }

    public function login_pemda_handler(Request $request)
    {
         # Validator
         $validator = Validator::make($request->all(),[
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        # if else validator salah atau benar
        if($validator->fails()){

            # jika validasi error kembali ke laman login pemda dengan pesan error
            return redirect('pemda/login')->withErrors($validator);

        }

        // Attempt to log the user in
            // Passwordnya pake bcrypt
        if (Auth::guard('pemda')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            return redirect()->intended('/pemda');
        } else {
            return redirect()->intended('pemda/login');
        }
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('/')->with('sukses','Anda Telah Logout');
    }

}
