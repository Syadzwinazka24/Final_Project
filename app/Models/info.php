<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    use HasFactory;

    protected $table ='info';
    protected $fillable = [
        'judul_info',
        'isi_info',
        'penerbit',
        'slug',
        'img',
        'deskripsi',
    ];
}
