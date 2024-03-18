<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
        public function producto()
        {
            return $this->belongsTo(Productos::class, 'id_Producto');
        }
    
        public function tipoProducto()
        {
            return $this->belongsTo(TipoProducto::class, 'Id_TipoProducto');
        }

        protected $table = 'inventarios';

        // Define la relación con el modelo Producto
        public function productos()
        {
            return $this->belongsTo(Productos::class, 'producto_id'); // Asegúrate de reemplazar 'producto_id' con el nombre real de la clave foránea
        }
    }
    

