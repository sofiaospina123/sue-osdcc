<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'id_cargo' => 'required|exists:roles,id',
        ]);

        // Crear el usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'id_cargo' => 2, // Asigna un valor adecuado para id_cargo aquí
        ]);

        if ($user) {
            // Envía el correo electrónico de bienvenida al usuario
            Mail::to($user->email)->send(new WelcomeEmail($user));

            // Redirige al usuario a la página de inicio, o a donde quieras
            return redirect('/login')->with('success', 'Usuario registrado exitosamente');
        } else {
            return back()->withInput()->withErrors(['Error al crear el usuario']);
        }
    }
}
