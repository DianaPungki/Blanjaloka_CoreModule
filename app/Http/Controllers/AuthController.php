<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login_pengelola(Request $request)
    {
        return view('admin.auth.login');
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

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('admin/login')->with('sukses','Anda Telah Logout');
    }

}
