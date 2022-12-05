<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('user.show', [
            'description' => "halaman profile dari $user->nama",
            'title' => $user->nama,
            'activate' => '',
            'user' => $user
        ]);
    }
}
