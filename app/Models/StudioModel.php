<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $table = 'studio';

    protected $fillable = [
        'nomor_studio', 'kapasitas', 'tipe_studio'
    ];

    public $timestamps = false;
}
