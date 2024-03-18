<?php

// app/Http/Controllers/CarritoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;

class CarritoController extends Controller
{
    public function index()
    {
        $productos = Inventario::all();
        return view('carrito.index', compact('productos'));
    }

    public function mostrarCarrito()
    {
        return view('carrito');
    }

    public function procesarPago(Request $request)
    {
        // Lógica para procesar el pago

        // Construir el contenido del correo electrónico dinámicamente
        $asunto = 'Confirmación de pago';
        $contenido = 'Gracias por su compra, ' . $request->input('nombre') . '. Su pago de $' . $request->input('totalPago') . ' ha sido procesado con éxito.';

        // Envío del correo electrónico de confirmación
        Mail::to($request->input('correo'))->send(new EnviarCorreo($asunto, $contenido));

        // Redireccionar al usuario a una página de confirmación
        return redirect()->route('confirmacion')->with('mensaje', 'Pago procesado con éxito. Se ha enviado un correo electrónico de confirmación.');
    }

}