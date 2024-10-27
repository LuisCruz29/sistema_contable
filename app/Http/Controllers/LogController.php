<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LogController extends Controller
{
    public function verLogin()
    {
        return view('index.login');
    }

    public function login(Request $peticion)
    {
        $peticion->validate([
            'username' => 'required|string',
            'password' => 'string|required'
        ]);

        $usuario = DB::table('users')->where('user', $peticion->username)->first();

        if ($usuario && $peticion->password === $usuario->password)
        {
            session(['user_id' => $usuario->id, 'username' => $usuario->user]);
            return redirect('/principal');
        }

        return redirect()->route('login')->with('error', 'Usuario o contraseña incorrectos.');
    }

    public function logout()
    {
        session()->forget(['user_id', 'username']);
        return view('index.home');
    }
}
