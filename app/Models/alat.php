<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    use HasFactory;
    protected $table = 'alat'; // Nama tabel di database

    protected $primaryKey = 'id_alat'; // Primary key

    public $timestamps = false; // Menonaktifkan timestamps otomatis

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_alat',
        'jenis',
        'qnty',
    ];

    /**
     * Get the transactions for the alat.
     */
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_alat', 'id_alat');
    }
}
