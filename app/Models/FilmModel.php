<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';

    protected $fillable = [
        'judul', 'durasi', 'sutradara', 'pemeran_utama', 'bahasa', 'tanggal_rilis'
    ];

    public $timestamps = false;
}
