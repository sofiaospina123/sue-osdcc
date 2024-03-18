<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\VentasController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarritoComprasController;
use App\Mail\EnviarCorreo;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Ruta para mostrar el formulario de login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/actualizar-cantidad', [InventarioController::class, 'actualizarCantidad'])->name('inventario.actualizar_cantidad');
Route::get('/descargar-excel', 'ExcelController@descargar')->name('descargar.excel');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/carrito/agregar', [InventarioController::class, 'realizarDescuentoStock'])->name('inventario.descuento');
Route::post('/inventario/descuento', [InventarioController::class, 'realizarDescuentoStock']);
Route::post('/realizar-descuento', [InventarioController::class, 'realizarDescuento'])->name('realizar.descuento');
Route::post('/inventario/aumentar-stock', [InventarioController::class, 'aumentarStock'])->name('aumentarStock');
Route::post('/agregar-al-carrito', [InventarioController::class, 'agregarAlCarrito'])->name('agregar.al.carrito');
Route::get('/detalle-producto/{id}', [InventarioController::class, 'detalleProducto'])->name('detalle.producto');
// Ruta para cerrar sesión
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Ruta para mostrar el formulario de registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/procesar-inventario', [InventarioController::class, 'procesar'])->name('inventario.procesar');
// Ruta para procesar el registro
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/pagina', function () {
    return view('pagina.index');
});
Route::post('/registrar', 'Auth\RegisterController@register');
Route::get('/registrar', function () {
    return view('pagina.registrar');
});
Route::get('/clientes', function () {
    return view('cliente.index');
});
Route::get('/ventajas', function () {
    return view('paginaa.ventajas');
});
Route::get('/pago', function () {
    return view('paginaa.pago');
});
Route::get('/', function () {
    return view('mails.welcome_email');
});
Route::get('/cliente/create',[ClienteController::class,'create']);
Route::resource('cliente',ClienteController::class );

Route::get('/login', function () {
    return view('pagina.login');
});
Route::get('/register', [RegisterController::class, 'create'])->name('pagina.login');
Route::get('/login', [SessionController::class, 'create'])->name('pagina.login');
Route::get('/catalogo', function () {
    return view('pagina.catalogo');
});

Route::get('/contacto', function () {
    return view('pagina.contacto');
});

Route::get('/empleado', function () {
    return view('empleado.index');
});

Route::get('/inventar', function () {
    return view('inventario.index');
});
Route::get('/ventas', function () {
    return view('ventas.index');
});
Route::get('/procesar', function () {
    return view('paginaa.procesar');
});
Route::post('/inventario', [InventarioController::class, 'store'])->name('inventario.store');

Route::post('/actualizar-cantidad/{id}', [VentasController::class, 'actualizarCantidad'])->name('venta.actualizar_cantidad');
Route::get('/carrito', function () {
    return view('carrito.create');
});
Route::get('/adios', function () {
    return view('paginaa.adios');
});
Route::post('/actualizarInventario', [InventarioController::class, 'actualizar']);
Route::post('/registrarVenta', [InventarioController::class, 'registrarVenta']);
Route::get('/carrito/create', [CarritoComprasController::class, 'create']);
Route::resource('carrito',CarritoComprasController::class );
Route::get('/ventas/create',[VentasController::class,'create']);
Route::resource('ventas',VentasController::class );

Route::get('/inventario/create',[InventarioController::class,'create']);
Route::resource('inventario',InventarioController::class );

Route::get('/empleado/create',[EmpleadoController::class,'create']);
Route::resource('empleado',EmpleadoController::class );

Route::get('/paginaa', function () {
    return view('paginaa.index');
});

Route::get('/cata', function () {
    return view('paginaa.catalogo');
});
Route::get('/carrito', function () {
    return view('carrito.index');
});
Route::post('enviar-correo', function(Request $request) {
    // Obtener los datos del formulario
    $destinatarios = $request->input('destinatarios');
    $asunto = $request->input('asunto');
    $contenido = $request->input('contenido');

    // Enviar el correo electrónico a cada destinatario
    foreach ($destinatarios as $destinatario) {
        Mail::to(trim($destinatario))->send(new EnviarCorreo($asunto, $contenido));
    }
    
    return "Correo enviado exitosamente";
})->name('enviar-correo');

Route::get('/chart-data', [ChartController::class, 'chartData']);





Route::get('/carrito', function () {
    return view('carrito.index');
})->name('confirmacion');




Route::get('/carritos', [CarritoController::class, 'index'])->name('carrito.inicio');
Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::get('/carrito/mostrar', [CarritoController::class, 'mostrar'])->name('carrito.mostrar');
Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
Route::post('/carrito/pagar', [CarritoController::class, 'procesarPago'])->name('carrito.pagar'); // Cambiado de 'pagar' a 'procesarPago'



Route::get('/carrito', [CarritoController::class, 'mostrarCarrito'])->name('carrito.mostrar');

Route::post('/procesar-pago', [CarritoController::class, 'procesarPago'])->name('pago.procesar');

Route::get('/confirmacion', function () {
    return view('mostrarCarrito.index');
})->name('confirmacion');


Route::get('/confirmacion', function () {
    return view('mostrarCarrito.index');
})->name('confirmacion');