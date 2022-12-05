<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $validUser = $request->validate([
            'nama' => ['min:2','max:191', 'nullable'],
            'alamat' => ['min:6', 'max:191', 'nullable'],
            'email' => ['required','email:dns','unique:users,email', 'min:2', 'max:191'],
            'password' => ['required','min:6','max:255'] // wajib
        ]);
        $validUser['password'] = Hash::make($request->password);
        User::create($validUser);
        return redirect(route('login'))->with('auth-success', 'anda berhasil daftar! saatnya login');
    }

    public function login()
    {
        return view('halaman.login',[
            'title' => 'Login',
            'description' => 'sudah memiliki akun? login akunmu sekarang!',
            'activate' => 'Login'
        ]);
    }

    public function createLogin(Request $request)
    {
        $validUser = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($validUser)){
            $request->session()->regenerate();
            return redirect()->intended(route('beranda'));
        }

        return redirect(route('login'))->with('auth-failed', 'anda gagal login');
    }
}
