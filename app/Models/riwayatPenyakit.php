<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayatPenyakit extends Model
{
    use HasFactory;
    protected $table = 'riwayat_penyakit';
    protected $fillable = [
        'pasien_id',
        'keluhan',
        'tindakan',
        'status_pasien',
        'id_petugas',
        'id_obat',
        'created_at',
        'updated_at'
    ];

    public function dataPasien(){
        return $this->belongsTo(dataPasien::class, 'pasien_id', 'id');
    }

    public function petugas(){
        return $this->belongsTo(petugas::class,'id_petugas', 'id');
    }
    public function obats(){
        return $this->belongsTo(Obat::class,'id_obat', 'id');
    }
}
