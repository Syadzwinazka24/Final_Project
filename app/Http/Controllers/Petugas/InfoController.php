<?php

namespace App\Http\Controllers\Petugas;

use App\Models\info;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    public function info()
    {

        $info = info::all();
        return view('userPetugas.infoUKS.info', compact('info'));
    }

    public function tambahInfo(Request $request)
    {
        $request->validate([
            'judul_info' => 'required',
            'isi_info' => 'required',
            'penerbit' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'deskripsi' => 'required',

        ]);

        $img = $request->file('img');
        $namaFile = time() . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('img'), $namaFile);

        info::create([
            'judul_info' => $request->judul_info,
            'isi_info' => $request->isi_info,
            'penerbit' => $request->penerbit,
            'img' => $namaFile,
            'deskripsi' => $request->deskripsi,
            'slug' => Str::slug($request->info)
        ]);

        return redirect()->route('petugas.index.info');
    }


    public function showInfo(info $info)
    {
        $info = info::findOrFail($info->id);
        return view('userPetugas.infoUKS.showInfo', compact('info'));
    }
    public function updateInfo(Request $request, $id)
    {

        $request->validate([
            'judul_info' => 'required',
            'isi_info' => 'required',
            'penerbit' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'deskripsi' => 'required',
        ]);

        $info = info::findOrFail($id);

        if ($request->file('img') == "") {
            $info([
                'judul_info' => $request->judul_info,
                'isi_info' => $request->isi_info,
                'penerbit' => $request->penerbit,
                'img' => $request->img,
                'deskripsi' => $request->deskripsi,
                'slug' => Str::slug($request->info)
            ]);
        } else {
            $img = $request->file('img');
            $namaFile = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('img'), $namaFile);


            $info->update([
                $info->judul_info = $request->judul_info,
                $info->isi_info = $request->isi_info,
                $info->penerbit = $request->penerbit,
                $info->img = $namaFile,
                $info->deskripsi = $request->deskripsi,
                $info->slug = Str::slug($request->judul_info),

            ]);
            return redirect()->back();
        }
    }

    public function deleteInfo(Request $request)
    {

        $info = info::findOrFail($request->id); {
            $info->delete();
            return redirect()->route('petugas.index.info');
        }
    }

}
