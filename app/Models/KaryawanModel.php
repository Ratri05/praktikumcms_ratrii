<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';

    protected $fillable = [
        'nama', 'posisi', 'jadwal_kerja', 'no_telepon', 'alamat'
    ];

    public $timestamps = false;
}
