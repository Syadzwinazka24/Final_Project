<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class loginPetugasController extends Controller
{
    public function userPetugas(){

        $User = User::all();
        return view('Admin.UserPetugas.uPetugas', compact('User'));
     }

     public function tambahUpetugas(Request $request){
        User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => $request->password,
        ]);
        return redirect()->route('Admin.index.Upetugas');
     }

     public function deleteUpetugas(Request $request){

        $User = User::findOrFail($request->id);
        {
            $User->delete();
            return redirect()->route('Admin.index.Upetugas');
        }
    }
}
