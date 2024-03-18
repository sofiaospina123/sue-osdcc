<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   // Método para mostrar el formulario de login
   public function showLoginForm()
   {
       return view('auth.login');
   }

   // Método para procesar el login
   public function login(Request $request)
   {
       $credentials = $request->only('email', 'password');

       if (Auth::attempt($credentials)) {
           // Authentication passed...
           return redirect()->intended('/');
       }

       return redirect()->back()->withErrors(['email' => 'Estas credenciales no coinciden con nuestros registros']);
   }

   // Método para cerrar sesión
   public function logout(Request $request)
   {
       Auth::logout();

       return redirect('/');
   }
}
