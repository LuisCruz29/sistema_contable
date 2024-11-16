<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Log;  // Importar el modelo Log
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\TblPermiso;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $users = User::paginate();

        return view('user.index', compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $user = new User();
        $permisos = TblPermiso::all(['id', 'rol']);

        return view('user.create', compact('user', 'permisos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request): RedirectResponse
    {
        $user = User::create($request->validated());

        // Registrar el evento de creación de usuario
        Log::create([
            'user_id' => session('user')->id,  // Suponiendo que el usuario está en la sesión
            'fecha_hora' => now(),
            'accion' => 'crear usuario',
            'modulo' => 'Usuarios',
            'descripcion' => 'Se ha creado un nuevo usuario con ID ' . $user->id,
            'tipoLog' => 'informativo',
        ]);

        return Redirect::route('users.index')
            ->with('success', 'Usuario Creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $user = User::findOrFail($id);  
        $permisos = TblPermiso::all(['id', 'rol']); 

        return view('user.edit', compact('user', 'permisos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user): RedirectResponse
    {
        $data = $request->validated();

        if (empty($data['password'])) {
            unset($data['password']); 
        }

        $user->update($data);

        // Registrar el evento de actualización de usuario
        Log::create([
            'user_id' => session('user')->id,  // Suponiendo que el usuario está en la sesión
            'fecha_hora' => now(),
            'accion' => 'actualizar usuario',
            'modulo' => 'Usuarios',
            'descripcion' => 'Se ha actualizado el usuario con ID ' . $user->id,
            'tipoLog' => 'informativo',
        ]);

        return Redirect::route('users.index')
            ->with('success', 'Usuario Modificado Correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        $user = User::find($id);

        // Registrar el evento de eliminación de usuario
        Log::create([
            'user_id' => session('user')->id,  // Suponiendo que el usuario está en la sesión
            'fecha_hora' => now(),
            'accion' => 'eliminar usuario',
            'modulo' => 'Usuarios',
            'descripcion' => 'Se ha eliminado el usuario con ID ' . $user->id,
            'tipoLog' => 'informativo',
        ]);

        $user->delete();

        return Redirect::route('users.index')
            ->with('success', 'Usuario Eliminado Correctamente');
    }
}
