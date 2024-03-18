<?php

namespace App\Http\Controllers;

use App\Models\CarritoCompras;
use Illuminate\Http\Request;

class CarritoComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('carrito.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('carrito.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosCarrito = request()->all();
        return response()->json($datosCarrito);
    }

    /**
     * Display the specified resource.
     */
    public function show(CarritoCompras $carritoCompras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarritoCompras $carritoCompras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarritoCompras $carritoCompras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarritoCompras $carritoCompras)
    {
        //
    }
}
