<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Monolog\Handler\RollbarHandler;

class Empleado extends Model
{
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_rol');
    }
    

}
