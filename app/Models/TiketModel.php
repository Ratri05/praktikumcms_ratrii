<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $table = 'tiket';

    protected $fillable = [
        'nomor_kursi', 'status', 'harga_tiket'
    ];

    public $timestamps = false;
}
