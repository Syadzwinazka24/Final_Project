<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataPasien extends Model
{
    use HasFactory;

    protected $table = 'data_pasien';
    protected $fillable = [
        'nama_pasien',
        'tanggal_lahir',
        'jenis_kelamin',
        'kelas',
        'jabatan_id'
    ];

    public function jabatan(){
        return $this->belongsTo(jabatan::class, 'jabatan_id', 'id');
    }
}
