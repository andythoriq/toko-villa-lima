<?php

namespace App\Http\Controllers;

use App\Models\Human;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AutentikasiController extends Controller
{
    public function register(){
        return view('halaman.register', [
            'title' => 'Register',
            'description' => 'Daftarkan dirimu sekarang!',
            'activate' => 'Register'
        ]);
    }

    public function createRegister(Request $request)
    {
        $validUsers = $request->validate([
            'nama' => ['min:4','max:191', 'nullable'],
            'username' => ['required', 'alpha', 'min:4', 'max:191', 'unique:humans,username'],// wajib
            'alamat' => ['min:10', 'max:191', 'nullable'],
            'email' => ['required','email:dns','unique:humans,email', 'min:4', 'max:191'],
            'password' => ['required','min:6','max:255'] // wajib
        ]);
        $validUsers['password'] = Hash::make($request->password);
        Human::create($validUsers);
        return redirect(route('login'))->with('register-success', 'anda berhasil daftar!');
    }

    public function login()
    {
        return view('halaman.login',[
            'title' => 'Login',
            'description' => 'sudah memiliki akun? login akunmu sekarang!',
            'activate' => 'Login'
        ]);
    }
}
