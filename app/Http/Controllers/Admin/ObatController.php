<?php

namespace App\Http\Controllers\Admin;

use App\Models\obat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ObatController extends Controller
{
    public function obat(){

        $obat = obat::all();
        return view('Admin.DataObat.obat', compact('obat'));
    }

    public function formObat(){

        $obat = Obat::all();
        return view('Admin.DataObat.createObat', compact('obat'));
    }

    public function createObat(Request $request){
        Obat::create([
            'nama_obat' => $request->nama_obat,
            'fungsi_obat' => $request->fungsi_obat,
            'jumlah_obat' => $request->jumlah_obat,
            'status' => $request->status,
            'kadaluarsa' => $request->kadaluarsa,
            'slug' => Str::slug($request->nama_obat),
        ]);
        return redirect()->route('Admin.index.obat');
    }

    public function showObat(Obat $obat)
    {
        $obat = Obat::findOrFail($obat->id);
        return view('Admin.obatUKS.showObat', compact('obat'));
    } 


    public function updateObat(Request $request){
        $obat = Obat::findOrFail( $request->id);
        $obat->nama_obat = $request->nama_obat;
        $obat->fungsi_obat = $request->fungsi_obat;
        $obat->jumlah_obat = $request->jumlah_obat;
        $obat->status = $request->status;
        $obat->kadaluarsa = $request->kadaluarsa;
        $obat->slug = Str::slug($request->nama_obat);
  
        $obat->update();
  
        return redirect()->route('Admin.index.obat');
  
     }

     public function deleteObat(Request $request){

        $obat = Obat::findOrFail($request->id);
        {
            $obat->delete();
            return redirect()->route('Admin.index.obat');
        }
    }
}
