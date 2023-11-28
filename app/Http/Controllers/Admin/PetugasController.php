<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function petugas(){

        $petugas = petugas::all();
        return view('Admin.Petugas.petugas', compact('petugas'));
     }
  
     public function tambahPetugas(Request $request){
        petugas::create([
           'nama_petugas' => $request->nama_petugas,
           'no_telp' => $request->no_telp,
           'NIP' => $request->NIP,
        ]);
        return redirect()->route('Admin.index.petugas');
     }
  
     public function showPetugas(petugas $petugas)
     {
         $petugas = petugas::findOrFail($petugas->id);
         return view('Admin.petugas.showPetugas', compact('petugas'));
     }
  
     public function updatePetugas(Request $request){
        $petugas = petugas::findOrFail( $request->id);
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->no_telp = $request->no_telp;
        $petugas->NIP = $request->NIP;
  
        $petugas->update();
  
        return redirect()->route('Admin.index.petugas');
  
     }
  
     public function deletePetugas(Request $request){
  
        $petugas = petugas::findOrFail($request->id);
        {
            $petugas->delete();
            return redirect()->route('Admin.index.petugas');
        }
    }
}
