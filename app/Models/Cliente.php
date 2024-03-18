<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function mostrarClientes()
    {
        $clientes = Cliente::all(); // Obtén todos los clientes desde tu base de datos
        return view('clientes.index', compact('clientes')); // Pasa los clientes a tu vista
    }
}

    
