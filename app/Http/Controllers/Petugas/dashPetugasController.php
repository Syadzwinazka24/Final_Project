<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\dataPasien;
use App\Models\obat;
use App\Models\riwayatPenyakit;
use App\Models\User;
use Illuminate\Http\Request;

class dashPetugasController extends Controller
{
    public function index(){
        $dataPasien = dataPasien::count();
        $inap = riwayatPenyakit::where('status_pasien', 'Rawat Inap')->count();
        $jalan = riwayatPenyakit::where('status_pasien', 'Rawat jalan')->count();
        $obat = obat::count();
        return view('userPetugas.index', compact('dataPasien', 'inap', 'jalan', 'obat'));
       
    }

    public function profile(){
        $id = Auth()->user()->id;
        $user = User::where('id', $id)->first();
        return view('userPetugas.profilePetugas', compact('user'));
    }

    public function updateProfile(Request $request){
        $profile = User::findOrFail( $request->id);
        $profile->name = $request->name;
        $profile->email = $request->email;
  
        $profile->update();
  
        return redirect()->route('petugas.profile');
  
     }
}
