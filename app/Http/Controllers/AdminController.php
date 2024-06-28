<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Mime\Email;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function peminjamanAdmin()
    {
        return view('admin.peminjaman-admin');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if (Auth::attempt($credentials)) {
            return redirect('admin/dashboard')->with('success', 'Login Success');
        }else{ return back()->with('error', 'Email or Password');}
    }

    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('admin.login');
    }
}


