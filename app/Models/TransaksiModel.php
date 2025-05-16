<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    protected $fillable = [
        'tanggal_transaksi', 'metode_pembayaran', 'total_pembayaran'
    ];

    public $timestamps = false;
}
