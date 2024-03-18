<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function actualizarCantidad(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'cantidad' => 'required|numeric',
        ], [
            'cantidad.required' => 'El campo cantidad es requerido.',
            'cantidad.numeric' => 'El campo cantidad debe ser un valor numérico.',
        ]);
    
        // Encontrar la venta por su ID
        $venta = Ventas::find($id);
    
        // Verificar si la venta existe
        if (!$venta) {
            return response()->json(['error' => 'Venta no encontrada'], 404);
        }
    
        // Actualizar la cantidad en el inventario
        $venta->update(['Inventario' => $venta->Inventario - $request->cantidad]);
    
        // Retorna una respuesta JSON indicando que la cantidad ha sido actualizada correctamente
        return response()->json(['message' => 'Cantidad actualizada correctamente']);
    }
    public function index()
{
    // Obtener los datos de ventas
    $ventas = Ventas::all();

    // Preparar los datos para el gráfico
    $labels = $ventas->pluck('GestionInventarios')->toArray(); // Supongamos que tienes un campo 'mes' en tu modelo Venta
    $values = $ventas->pluck('stock')->toArray(); // Supongamos que tienes un campo 'cantidad' en tu modelo Venta

    // Pasar los datos a la vista
    $data = [
        'labels' => $labels,
        'values' => $values
    ];
    return view('ventas.index', compact('data', 'ventas')); 
}
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ventas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosVentas = request()->except('_token');
        Ventas::insert($datosVentas);
        return response()->json($datosVentas);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ventas $ventas)
    {
        //
    }
    public function aplicarDescuento(Request $request, $id)
    {
        // Validar la cantidad enviada
        $request->validate([
            'cantidad' => 'required|integer|min:1',
        ]);

        // Obtener la venta por su ID
        $venta = Ventas::findOrFail($id);

        // Aplicar el descuento a la cantidad
        $cantidad = $request->input('cantidad');
        $venta->cantidad -= $cantidad; // Aplicar el descuento

        // Guardar los cambios en la base de datos
        $venta->save();

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Descuento aplicado correctamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $venta = Ventas::findOrFail($id);
        return view('ventas.edit', compact('venta'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar los datos de entrada
        $request->validate([
            'cantidad_vendida' => 'required|numeric',
            'descuento' => 'required|numeric',
        ]);
    
        // Obtener los datos de la venta
        $datosVentas = $request->only(['cantidad_vendida', 'descuento']);
    
        // Actualizar la venta en la base de datos
        Ventas::where('id', $id)->update($datosVentas);
    
        // Obtener la venta actualizada
        $venta = Ventas::findOrFail($id);
    
        // Renderizar la vista de edición con la venta actualizada
        return view('ventas.edit', compact('venta'));
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Ventas::destroy($id);
        return redirect('ventas');
    }
}