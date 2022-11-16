<?php

namespace App\Http\Controllers;

use App\Models\Human;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AutentikasiController extends Controller
{
    public function register(){
        return view('halaman.register');
    }

    public function createRegister(Request $request)
    {
        $newUser = $request->validate([
            'nama' => ['string', 'max:191', 'min:4'],
            'username' => ['required', 'alpha', 'max:191', 'min:4', 'unique:humans,username'],// wajib
            'alamat' => ['min:10', 'max:191'],
            'email' => ['email:dns','unique:humans,email'],
            'password' => ['max:255','min:6'] // wajib
        ]);
        $human = Human::where('username', $request->username)->first();
        if($human){
            return back();
        }
        $newUser['password'] = Hash::make($request->password);
        Human::create($newUser);
    }
}
