<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{
    /**
     * Obtener los clientes asociados con este tipo de cliente.
     */
    public function clientes()
    {
        // Si la clave foránea en la tabla de clientes es tipo_cliente_id
        // y la tabla de tipos de cliente se llama tipo_clientes, puedes usar:
        // return $this->hasMany(Cliente::class, 'tipo_cliente_id');
        
        // Si la clave foránea en la tabla de clientes es tipocliente_id
        // y la tabla de tipos de cliente se llama tipoclientes, puedes usar:
        return $this->hasMany(Cliente::class, 'tipocliente_id');
    }
}
