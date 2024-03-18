<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;
use PDO;
use PDOException;

class mostrarCarrito extends Controller
{
    public function eliminarProducto(Request $request)
    {
        $conn = mysqli_connect(
            'localhost',
            'root',
            '',
            'sueñosdc'
        );
        define("KEY", "sueñosdc");
        define("COD", "AES-128-ECB");

        define("SERVIDOR", "localhost");
        define("USUARIO", "root");
        define("PASSWORD", "");
        define("BD", "sueñosdc");
        $servidor = "mysql:dbname=" . BD . ";host=" . SERVIDOR;
        try {
            $pdo = new PDO(
                $servidor,
                USUARIO,
                PASSWORD,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
            //echo "<script>alert('Conectado')</script>";
        } catch (PDOException $e) {
            //echo "<script>alert('Error')</script>";
        }
        session_start();
        $mensaje = "";

        if (isset($_POST['btnAccion'])) {
            switch ($_POST['btnAccion']) {
                case 'Agregar':
                    if (is_string(openssl_decrypt($_POST['id'], COD, KEY))) {
                        $id = openssl_decrypt($_POST['id'], COD, KEY);
                        $mensaje = "OK nombre" . $id . "<br/>";
                    } else {
                        $id = openssl_decrypt($_POST['id'], COD, KEY);
                        $mensaje = "Error Id incorrecto" . $id . "<br/>";
                        break;
                    }
                    if (is_string(openssl_decrypt($_POST['nombre'], COD, KEY))) {
                        $NOMBRE = openssl_decrypt($_POST['nombre'], COD, KEY);
                        $mensaje = "OK nombre" . $NOMBRE . "<br/>";
                    } else {
                        $mensaje = "Error algo pasa con el nombre" . "<br/>";
                        break;
                    }
                    if (is_numeric((openssl_decrypt($_POST['cantidad'], COD, KEY)))) {
                        $CANTIDAD = openssl_decrypt($_POST['cantidad'], COD, KEY);
                        $mensaje = "OK CANTIDAD" . $CANTIDAD . "<br/>";
                    } else {
                        $mensaje = "Error algo pasa con la cantidad" . "<br/>";
                        break;
                    }
                    if (is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))) {
                        $PRECIO = openssl_decrypt($_POST['precio'], COD, KEY);
                        $mensaje = "OK precio" . $PRECIO . "<br/>";
                    } else {
                        $mensaje = "Error algo pasa con el precio" . "<br/>";
                        break;
                    }
                    if (!isset($_SESSION['CARRITO'])) {
                        $producto = array(
                            'id' => $id,
                            'nombre' => $NOMBRE,
                            'cantidad' => $CANTIDAD,
                            'precio' => $PRECIO
                        );
                        $_SESSION['CARRITO'][0] = $producto;
                        $mensaje = "Producto agregado al carrito";
                    } else {
                        $idProductos = array_column($_SESSION['CARRITO'], "id");
                        if (in_array($id, $idProductos)) {
                            echo "<script>alert('El producto ya ha sido seleccionado');</script>";
                            $mensaje = "";
                        } else {
                            $NumeroProductos = count($_SESSION['CARRITO']);
                            $producto = array(
                                'id' => $id,
                                'nombre' => $NOMBRE,
                                'cantidad' => $CANTIDAD,
                                'precio' => $PRECIO
                            );
                            $_SESSION['CARRITO'][$NumeroProductos] = $producto;
                            $mensaje = "Producto agregado al carrito";
                        }
                    }
                    //$mensaje=print_r($_SESSION,true);
                    break;
                case "Eliminar":
                    if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                        $id = openssl_decrypt($_POST['id'], COD, KEY);
                        foreach ($_SESSION['CARRITO'] as $indice => $producto) {
                            if ($producto['id'] == $id) {
                                unset($_SESSION['CARRITO'][$indice]);
                                echo "<script>alert('Elemento borrado');</script>";
                            }
                        }
                    } else {
                        $id = openssl_decrypt($_POST['id'], COD, KEY);
                        $mensaje = "Error Id incorrecto" . $id . "<br/>";
                    }
                    break;
            }
        }
    return view('mostrarCarrito\inicio');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mostrarCarrito\inicio');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

}