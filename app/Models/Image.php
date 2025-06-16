<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // INI BAGIAN PENTING YANG HARUS ADA
    protected $fillable = ['title', 'image_path'];
}
