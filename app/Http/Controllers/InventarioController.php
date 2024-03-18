<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\inventarioExport;

class InventarioController extends Controller 
{
    public function realizarDescuento(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'id' => 'required|numeric', // ID del producto
            'cantidad' => 'required|numeric|min:1', // Cantidad seleccionada
        ]);
    
        // Obtener los datos del formulario
        $idProducto = $request->input('id');
        $cantidadDeseada = $request->input('cantidad');
    
        // Consultar el producto en la base de datos
        $producto = Inventario::find($idProducto);
    
        // Verificar si se encontró el producto
        if (!$producto) {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }
    
        // Verificar si hay suficiente stock
        if ($cantidadDeseada <= $producto->stock) {
            // Calcular la nueva cantidad de stock
            $nuevoStock = $producto->stock - $cantidadDeseada;
    
            // Actualizar el stock en la base de datos sin afectar la cantidad disponible
            $producto->decrement('stock', $cantidadDeseada);
    
            // Calcular el total a pagar
            $totalPago = $cantidadDeseada * $producto->precio;
            // Pasar los datos del producto, la cantidad deseada y el total a pagar a la vista
            return view('paginaa.detalle', compact('producto', 'cantidadDeseada', 'totalPago'));
        } else {
            // Devolver un error si no hay suficiente stock disponible
            return response()->json(['error' => 'No hay suficiente stock disponible para completar esta compra'], 400);
        }
    }
    
    public function mostrarProductos()
    {
        $productos = Inventario::all();
        return view('paginaa.catalogo',['productos' => $productos]);
    }
    public function aumentarStock(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'id' => 'required|numeric', // ID del producto
            'cantidad' => 'required|numeric|min:1', // Cantidad a aumentar
        ]);

        // Obtener el ID del producto y la cantidad a aumentar
        $id_producto = $request->input('id');
        $cantidad_aumentar = $request->input('cantidad');

        // Buscar el producto en el inventario
        $producto = Inventario::findOrFail($id_producto);

        // Aumentar el stock
        $producto->stock += $cantidad_aumentar;
        $producto->save();

        // Redireccionar de vuelta al index con un mensaje de éxito
        return redirect()->route('inventario.index')->with('success', 'Se ha aumentado el stock correctamente.');
    }
    public function agregarAlCarrito(Request $request)
    {
        // Aquí puedes realizar cualquier lógica relacionada con agregar al carrito
        // Por ejemplo, podrías guardar los datos en la sesión o en la base de datos

        // Después de manejar la lógica, redirecciona a la vista de detalle del producto
        return redirect()->route('detalle.producto', ['id' => $request->id]);
    }
    

    public function detalleProducto($id)
    {
        // Obtener el producto por su ID
        $producto = Inventario::findOrFail($id);
        
        // Mostrar la vista de detalle del producto
        return view('paginaa.detalle', compact('producto'));
    }
function index()
     {
         // Obtener los datos del inventario paginados
         $datos['inventarios'] = Inventario::paginate(5);
 
         // Preparar los datos para el gráfico
         $labels = $datos['inventarios']->pluck('Inventario')->toArray();
         $values = $datos['inventarios']->pluck('stock')->toArray();
 
         // Pasar los datos a la vista
         $datos['inventarioChartData'] = [
             'labels' => $labels,
             'values' => $values
         ];
 
         return view('inventario.index', $datos);
     }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'Producto' => 'required|unique:inventario,Producto',
            // Agrega más reglas de validación según sea necesario para otros campos
        ]);

        // Obtener los datos del formulario excepto el token CSRF
        $datosInventario = $request->except('_token');

        // Insertar el nuevo registro en la base de datos
        Inventario::create($datosInventario);

        // Verificar si la cantidad de producto está por debajo del umbral
        $umbral = 12; // Umbral de cantidad para mostrar la alerta (puedes ajustar este valor según tus necesidades)
        if ($datosInventario['stock'] < $umbral) {
            // Generar una alerta (puedes enviarla a la vista o almacenarla en una tabla de alertas)
            $alerta = '¡Alerta! La cantidad de ' . $datosInventario['Producto'] . ' está por debajo del umbral (' . $umbral . ')';
            // Aquí puedes almacenar la alerta en la base de datos o pasarla a la vista para mostrarla
        }
        
        if($request->hasFile('foto')){
          $datosInventario['foto'] = $request->file('foto')->storage('uploads', 'public');

        }
        // Redireccionar a la vista index con un mensaje de éxito
        return redirect()->route('inventario.index')->with('success', 'Producto agregado correctamente');

    }
  
    /**
     * Display the specified resource.
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $inventario=Inventario::findOrFail($id);
        return view('inventario.edit', compact('inventario'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosInventario = request()->except(['_token','_method']);
        Inventario::where('id','=',$id)->update($datosInventario);

        
        $inventario=Inventario::findOrFail($id);
        return view('inventario.edit', compact('inventario'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Inventario::destroy($id);
        return redirect('inventario')->with('mensaje','Producto Borrado');
    }
}
