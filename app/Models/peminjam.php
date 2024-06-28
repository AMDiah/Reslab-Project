<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    use HasFactory;
    protected $table = 'peminjam'; // Nama tabel di database

    protected $primaryKey = 'id_user'; // Primary key

    public $timestamps = false; // Menonaktifkan timestamps otomatis

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nim',
        'nama',
        'angkatan',
    ];

}
