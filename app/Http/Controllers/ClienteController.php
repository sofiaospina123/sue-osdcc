<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['cliente']=Cliente::paginate(5);
        return view('cliente.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datoCliente = request()->except('_token');
        Cliente::insert($datoCliente);
        return redirect('cliente')->with('mensaje','Cliente registrado con exito');
        //return response()->json($datoCliente);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $cliente=Cliente::findOrFail($id);
        
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datoCliente = request()->except(['_token','_method']);
        Cliente::where('id','=',$id)->update($datoCliente);

        
        $cliente=Cliente::findOrFail($id);
        return view('cliente.edit', compact('cliente'));

    }

    /**
     * Remove the specified resource from storage.
     */
 
    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect('cliente')->with('mensaje','Empleado Borrado');
    }
}
