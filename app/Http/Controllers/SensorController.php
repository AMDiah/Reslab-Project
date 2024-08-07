<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;

class SensorController extends Controller
{
    public function bacakelembapan()
    {
    //baca nilai  tabel sensor dan ambil nilai suhu
    $sensor = Sensor::select('*')->get();
    return view('bacasuhu', ['nilaisensor' => $sensor]);
    }
    public function bacasuhu()
    {
    //baca nilai  tabel sensor dan ambil nilai suhu
    $sensor = Sensor::select('*')->get();
    return view('bacakelembapan', ['nilaisensor' => $sensor]);
    }
    public function simpansensor()
    {
        Sensor::where('id', '1')->update(['suhu' => request()->nilaisuhu, 'kelembapan' => request()->nilaikelembapan]);
    }
}
