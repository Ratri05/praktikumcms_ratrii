<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';

    protected $fillable = [
        'nama', 'email', 'no_telepon', 'alamat', 'kata_sandi'
    ];

    public $timestamps = false;
}
