<?php

namespace App\Http\Controllers\Admin;

use App\Models\jabatan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JabatanController extends Controller
{
    public function jabatan(){

        $jabatan = jabatan::all();
        return view('Admin.Jabatan.jabatan', compact('jabatan'));
     }

     public function tambahJabatan(Request $request){
        jabatan::create([
           'nama_jabatan' => $request->nama_jabatan,
           'slug' => Str::slug($request->jabatan),
        ]);
        return redirect()->route('Admin.index.jabatan');
     }

     public function updateJabatan(Request $request){
        $jabatan = jabatan::findOrFail( $request->id);
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->slug = Str::slug($request->jabatan);
  
        $jabatan->update();
  
        return redirect()->route('Admin.index.jabatan');
  
     }

     public function deleteJabatan(Request $request){

      $jabatan = jabatan::findOrFail($request->id);
      {
          $jabatan->delete();
          return redirect()->route('Admin.index.jabatan');
      }
  }
}
