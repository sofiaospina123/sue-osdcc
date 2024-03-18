<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    
    use HasFactory;
 // En el modelo Venta
 public function tipoCliente()
 {
     return $this->belongsTo(TipoCliente::class, 'id_Cliente');
 }
 public function inventario()
 {
     return $this->belongsTo(Inventario::class, 'GestionInventarios');
 }
// Define la relación con el modelo Empleado
public function empleado()
{
    return $this->belongsTo(Empleado::class, 'id_Empleado');
}

}
