<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $user=User::where('user',$peticion->username)->first();
        

        if ($user && $peticion->password === $user->password) {
            
            session([
                'user'=>$user,
            ]);
            
            return redirect('/principal');
        }

        return redirect()->route('login')->with('error', 'Usuario o contraseña incorrectos.');
    }

    public function logout()
    {
        
        session()->forget(['user']);
        return view('index.login');
    }
}
