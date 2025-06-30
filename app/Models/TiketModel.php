<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $table = 'tiket';
    protected $fillable = ['Nomor_Kursi', 'Status', 'Harga_Tiket', 'FILM_ID'];

    public function film()
    {
        return $this->belongsTo(Film::class, 'FILM_ID');
    }
}
