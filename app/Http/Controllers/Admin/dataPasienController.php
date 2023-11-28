<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\dataPasien;
use App\Models\jabatan;
use Illuminate\Http\Request;

class dataPasienController extends Controller
{
    public function pasien(){
        $dataPasien = dataPasien::all();
        $jabatan = jabatan::all();
         return view('Admin.dataPasien.pasien', compact('jabatan','dataPasien'));
     }
 
     public function tambahPasien(Request $request){
         
         dataPasien::create([
            'nama_pasien' => $request->nama_pasien,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kelas' => $request->kelas,
            'jabatan_id' => $request->jabatan_id,
         ]);
         return redirect()->route('Admin.index.pasien');
      }
 
      public function showPasien(dataPasien $dataPasien)
      {
          $dataPasien = dataPasien::findOrFail($dataPasien->id);
          return view('Admin.dataPasien.showPasien', compact('dataPasien'));
      }  
 
      public function updatePasien(Request $request){
         $dataPasien = dataPasien::findOrFail( $request->id);
         $dataPasien->nama_pasien = $request->nama_pasien;
         $dataPasien->tanggal_lahir = $request->tanggal_lahir;
         $dataPasien->jenis_kelamin = $request->jenis_kelamin;
         $dataPasien->kelas = $request->kelas;
         $dataPasien->jabatan_id = $request->jabatan_id;
   
         $dataPasien->update();
   
         return redirect()->route('Admin.index.pasien');
      }
 
      public function deletePasien(Request $request){
 
       $dataPasien = dataPasien::findOrFail($request->id);
       {
           $dataPasien->delete();
           return redirect()->route('Admin.index.pasien');
       }
   }
}
