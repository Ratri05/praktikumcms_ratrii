<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;

    protected $table = 'studio';
    protected $fillable = ['Nomor_Studio', 'Kapasitas', 'Tipe_Studio', 'TIKET_ID'];

    public function tiket()
    {
        return $this->belongsTo(Tiket::class, 'TIKET_ID');
    }
}
