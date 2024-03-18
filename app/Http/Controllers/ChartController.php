<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Models\Ventas;

class ChartController extends Controller
{
    public function chartData()
    {
        $data = inventario::select('producto', 'precio')->get();
        return response()->json($data);
    }
    public function chartDataa()
    {
        $data = Ventas::select('producto', 'centidad')->get();
        return response()->json($data);
    }
}
