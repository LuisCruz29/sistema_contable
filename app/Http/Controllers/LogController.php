<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Log;  // Importar el modelo Log
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

        $user = User::where('user', $peticion->username)->first();
        
        if ($user && $peticion->password === $user->password) {
            session([
                'user' => $user,
            ]);
            
            // Registrar el evento de login exitoso
            Log::create([
                'user_id' => $user->id,
                'fecha_hora' => now(),
                'accion' => 'login',
                'modulo' => 'Autenticación',
                'descripcion' => 'El usuario ha iniciado sesión exitosamente.',
                'tipoLog' => 'informativo',
            ]);

            return redirect('/principal');
        }

        // Registrar el evento de login fallido
        Log::create([
            'user_id' => null,
            'fecha_hora' => now(),
            'accion' => 'login fallido',
            'modulo' => 'Autenticación',
            'descripcion' => 'Usuario o contraseña incorrectos.',
            'tipoLog' => 'advertencia',
        ]);

        return redirect()->route('login')->with('error', 'Usuario o contraseña incorrectos.');
    }

    public function logout()
    {
        // Registrar el evento de logout
        if (session('user')) {
            Log::create([
                'user_id' => session('user')->id,
                'fecha_hora' => now(),
                'accion' => 'logout',
                'modulo' => 'Autenticación',
                'descripcion' => 'El usuario ha cerrado sesión.',
                'tipoLog' => 'informativo',
            ]);
        }

        session()->forget(['user']);
        return redirect()->route('login');
    }
}
