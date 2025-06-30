<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $fillable = [
    'nama',
    'email',
    'no_telepon',
    'alamat',
    'kata_sandi',
];

}
