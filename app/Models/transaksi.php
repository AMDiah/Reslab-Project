<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi'; // Nama tabel di database

    protected $primaryKey = 'id_tansaksi'; // Primary key

    public $timestamps = false; // Menonaktifkan timestamps otomatis

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id-transaksi',
        'user_id',
        'id_alat',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tanggal_pinjam' => 'datetime',
        'tanggal_kembali' => 'datetime',
    ];

    /**
     * Get the user that owns the transaction.
     */
    public function user()
    {
        return $this->belongsTo(Peminjam::class, 'user_id', 'id_user');
    }

    /**
     * Get the alat that is associated with the transaction.
     */
    public function alat()
    {
        return $this->belongsTo(Alat::class, 'id_alat', 'id_alat');
    }
}

