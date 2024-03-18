<?php


if (isset($_POST['btnAccion'])) {
    switch ($_POST['btnAccion']) {
        case 'Agregar':
            $id = openssl_decrypt($_POST['id'], COD, KEY);
            $Inventario = openssl_decrypt($_POST['Inventario'], COD, KEY);
            $Cantidad = openssl_decrypt($_POST['Cantidad'], COD, KEY);
            $Precio = openssl_decrypt($_POST['Precio'], COD, KEY);

            // Verificar si el carrito existe
            if (!isset($_SESSION['CARRITO'])) {
                // Crear el carrito si no existe
                $_SESSION['CARRITO'] = array();
            }

            // Verificar si el producto ya está en el carrito
            $idProductos = array_column($_SESSION['CARRITO'], "id");
            if (in_array($id, $idProductos)) {
                $mensaje = "El producto ya ha sido seleccionado";
            } else {
                // Aquí realizas el descuento del stock en la base de datos
                // Suponiendo que tienes una conexión a la base de datos establecida en $conn
                // y que la tabla de inventario se llama 'Inventarios'
                $query = "UPDATE inventarios SET Cantidad = Cantidad - $Cantidad WHERE id = $id";
                if ($conn->query($query) === TRUE) {
                    // Agregar el producto al carrito
                    $producto = array(
                        'id' => $id,
                        'Inventario' => $Inventario,
                        'Cantidad' => $Cantidad,
                        'Precio' => $Precio
                    );
                    array_push($_SESSION['CARRITO'], $producto);
                    $mensaje = "Producto agregado al carrito";
                } else {
                    $mensaje = "Error al actualizar el inventario: " . $conn->error;
                }
            }
            break;

        case 'Eliminar':
            if (is_numeric($_POST['id'])) {
                $id = $_POST['id'];
                foreach ($_SESSION['CARRITO'] as $indice => $producto) {
                    if ($producto['id'] == $id) {
                        unset($_SESSION['CARRITO'][$indice]);
                        $mensaje = "Producto eliminado del carrito";

                        // Aquí puedes devolver la cantidad eliminada al inventario si lo deseas
                    }
                }
            } else {
                $mensaje = "Error Id incorrecto";
            }
            break;
    }
}
?>
