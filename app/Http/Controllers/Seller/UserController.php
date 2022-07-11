<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register_seller()
    {
        $data['title'] = 'Register';
        return view('seller/registrasi', $data);
    }

    public function register_seller_action(Request $request)
    {
        $request->validate([
            'nama_pedagang' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $user = new User([
            'nama_pedagang' => $request->nama_pedagang,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('login_seller')->with('success', 'Registration success. Please login!');
    }

    public function login_seller()
    {
        $data['title'] = 'Login';
        return view('seller/login', $data);
    }

    public function login_seller_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('seller/pengaturan', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    // public function password_seller()
    // {
    //     $data['title'] = 'Change Password';
    //     return view('seller/pengaturan', $data);
    // }

    // public function password_seller_action(Request $request)
    // {
    //     $request->validate([
    //         'old_password' => 'required|current_password',
    //         'new_password' => 'required|confirmed',
    //     ]);
    //     $user = User::find(Auth::id());
    //     $user->password = Hash::make($request->new_password);
    //     $user->save();
    //     $request->session()->regenerate();
    //     return back()->with('success', 'Password changed!');
    // }

    public function logout_seller(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/seller/login');
    }
}