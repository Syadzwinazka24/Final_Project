<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\dataPasien;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PasienApiController extends Controller
{
    public function index()
    {
        $pasien = dataPasien::get()
            ->map(function ($pasien) {
                return $this->format($pasien);
            });

        return $this->respons($pasien);
    }

    public function format($pasien)
    {
        return [
            'id' => $pasien->id,
            'nama_pasien' => $pasien->nama_pasien,
            'tanggal_lahir' => $pasien->tanggal_lahir,
            'kelas' => $pasien->kelas,
            'tanggal_tambah' => Carbon::parse($pasien->created_at)->translatedFormat('d F Y'),
        ];
    }
    public function respons($pasien)
    {
        return response()->json([
            'status' => true,
            'data' => $pasien,
        ], 200);
    }
}
  