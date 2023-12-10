<?php

namespace App\Http\Controllers;

use App\Models\dataPasien;
use App\Models\info;
use App\Models\obat;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontController extends Controller
{
    public function index() {
        return Inertia('Home');
    }

    public function information() {
        $info = info::all();
        return Inertia('Information', compact('info'));
    }
    public function deskripsiInfo($id) {
        $info = info::findOrFail($id);
        return Inertia('Deskripsi', compact('info'));
    }

    public function patientData() {
        $pasien = dataPasien::with('jabatan')->get();
        return Inertia('patientData', compact('pasien'));
    }

    public function dataObat() {
        $obat = obat::all();
        return Inertia('DataObat', compact('obat'));
    }

    public function dDemam() {
        return Inertia('DetailDemam');
    }

    public function magh() {
        return Inertia('DetailMagh');
    }

    public function pusing() {
        return Inertia('DetailPusing');
    }

    public function depresi() {
        return Inertia('DetailDepresi');
    }
}
