<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home()
    {
        return view('/home');
    }
    public function landing()
    {
        return view('/landing');
    }
    
    public function praktikum()
    {
        return view('/praktikum');
    }

    public function navb()
    {
        return view('/navb');
    }
    public function footer()
    {
        return view('/footer');
    }
    public function informasi()
    {
        return view('/informasi');
    }
    public function profil()
    {
        return view('/profil');
    }
    public function peminjaman()
    {
        return view('/peminjaman');
    }
    public function peminjamanta()
    {
        return view('/peminjamanta');
    }
    public function formta()
    {
        return view('/formta');
    }
    public function peminjamannonta()
    {
        return view('/peminjamannonta');
    }
    public function formnonta()
    {
        return view('/formnonta');
    }
    public function rl()
    {
        return view('/rl');
    }

    public function par()
    {
        return view('/par');
    }
    public function sister()
    {
        return view('/sister');
    }
    
}
