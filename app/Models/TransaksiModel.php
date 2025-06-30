<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $fillable = ['Tanggal_Transaksi', 'Metode_Pembayaran', 'Total_Pembayaran', 'PENGGUNA_ID', 'TIKET_ID'];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'PENGGUNA_ID');
    }

    public function tiket()
    {
        return $this->belongsTo(Tiket::class, 'TIKET_ID');
    }
}
