<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'films';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'judul',
        'durasi',         
        'sutradara',
        'pemeran_utama',
        'bahasa',
        'tanggal_rilis',
    ];


    protected $casts = [
        'tanggal_rilis' => 'date',
    ];
}
