<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;

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
    
    public function formnonta2()
    {
        return view('/formnonta2');
    }
    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function login()
    {   
        
        return view('admin/login');
    }
    
    //transaksi
    // public function index()
    // {
    //     $transaksi = Transaksi::all();
    //     return view('admin.transaksi.index', compact('transaksi'));
    // }
    public function index()
    {
        $transaksi = Transaksi::with(['peminjam', 'alat'])->get(); // Mengambil semua transaksi beserta relasinya
        return view('admin.peminjam', compact('transaksi'));
    }

    public function approve($id)
    {
        $transaksi = Transaksi::find($id);
        if ($transaksi) {
            $transaksi->status = 'disetujui';
            $transaksi->save();
            return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil disetujui!');
        } else {
            return redirect()->route('transaksi.index')->with('error', 'Transaksi tidak ditemukan.');
        }
    }

    public function reject($id)
    {
        $transaksi = Transaksi::find($id);
        if ($transaksi) {
            $transaksi->status = 'tidak disetujui';
            $transaksi->save();
            return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditolak!');
        } else {
            return redirect()->route('transaksi.index')->with('error', 'Transaksi tidak ditemukan.');
        }
    }

    public function process($id)
    {
        $transaksi = Transaksi::find($id);
        if ($transaksi) {
            $transaksi->status = 'diproses';
            $transaksi->save();
            return redirect()->route('transaksi.index')->with('success', 'Transaksi sedang diproses!');
        } else {
            return redirect()->route('transaksi.index')->with('error', 'Transaksi tidak ditemukan.');
        }
    }
}
