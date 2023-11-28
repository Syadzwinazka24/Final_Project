<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\dataPasien;
use App\Models\obat;
use App\Models\petugas;
use App\Models\riwayatPenyakit;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function riwayatPenyakit(){
        $riwayatPenyakit = riwayatPenyakit::all();
        $dataPasien = dataPasien::all();
        $obats = obat::all();
        $petugas = petugas::all();
         return view('userPetugas.RiwayatPenyakit.riwayat', compact('riwayatPenyakit','dataPasien', 'obats', 'petugas'));
     }

     public function tambahRiwayat(Request $request){
        
        riwayatPenyakit::create([
           'pasien_id' => $request->pasien_id,
           'keluhan' => $request->keluhan,
           'tindakan' => $request->tindakan,
           'status_pasien' => $request->status_pasien,
           'id_petugas' => $request->id_petugas,
           'id_obat' => $request->id_obat,
        ]);
        return redirect()->route('petugas.index.riwayat');
     }

     public function showRiwayat($id)
     {
         $riwayatPenyakit = riwayatPenyakit::findOrFail($id);
         $dataPasien = dataPasien::all();

         return view('userPetugas.RiwayatPenyakit.showRiwayat', compact('riwayatPenyakit', 'dataPasien'));
     }  

     public function edit($id)
     {
        $dataPasien = dataPasien::all();
        $petugas = petugas::all();
        $obats = Obat::all();
        $riwayatPenyakit = riwayatPenyakit::findOrFail($id);
 
        return view('userPetugas.RiwayatPenyakit.editRiwayat', compact('dataPasien',  'petugas', 'obats', 'riwayatPenyakit'));
     }
     public function update(Request $request, $id)
     {
        $riwayatPenyakit= riwayatPenyakit::findOrFail($id);

        $riwayatPenyakit->update([
            'pasien_id' => $request->pasien_id,
            'keluhan' => $request->keluhan,
            'tindakan' => $request->tindakan,
            'status_pasien' => $request->status_pasien,
            'id_petugas' => $request->id_petugas,
            'id_obat' => $request->id_obat,
            
        ]);

        return redirect()->route('petugas.index.riwayat');
     }

     

   public function deleteRiwayat(Request $request){

      $riwayatPenyakit = riwayatPenyakit::findOrFail($request->id);
      {
          $riwayatPenyakit->delete();
          return redirect()->route('petugas.index.riwayat');
      }
  }
}
