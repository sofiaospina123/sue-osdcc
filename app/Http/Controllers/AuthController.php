<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Redirigir según el rol del usuario
            if ($user->id_cargo == 3) { // Administrador
                return redirect('/inventario');
                
            } 
            
            if ($user->id_cargo == 1) { // Administrador
                return redirect('/empleado');
                
            }
            elseif ($user->id_cargo == 2) { // Cliente
                // Colocar el nombre del usuario en la sesión
                session()->put('nombre_usuario', $user->name); // Suponiendo que el nombre del usuario se encuentra en el campo 'nombre'
            
                return redirect('/paginaa');
            
            

            } else {
                // Otro rol, redirigir a alguna otra vista o mostrar un mensaje de error
                return redirect()->back()->withErrors(['email' => 'Error en la autenticación']);
            }
        } else {
            // Las credenciales son incorrectas, redirigir al usuario de vuelta al formulario de inicio de sesión
            return redirect()->back()->withErrors(['email' => 'Credenciales incorrectas']);
        }
    }
}
