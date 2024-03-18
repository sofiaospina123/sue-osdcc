<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra exitosa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .recibo {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .detalle {
            margin-top: 20px;
        }
        .detalle h3 {
            margin-bottom: 10px;
            color: #555;
        }
        .producto {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }
        .total {
            margin-top: 20px;
            text-align: right;
            font-weight: bold;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="recibo">
        <h1>Recibo de Pago</h1>
        <img src="https://i.pinimg.com/200x150/e5/fd/04/e5fd043638ecf0185100dcae3ada1ec0.jpg" alt="Logo de la aplicación" style="max-width: 60px;">
     
        <?php
        // Verificar si se ha enviado el formulario de pago
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Capturar los datos del formulario

            $correo = $_POST['correo'];
            $nombre = $_POST['nombre'];
            $tipo_documento = $_POST['tipo_documento'];
            $documento = $_POST['documento'];
            $numero = $_POST['numero'];
       
            $Direccionventa = $_POST['Direccionventa'];

            // Mostrar los datos en el recibo
            echo "<div class='detalle'>";
            echo "<h3>Detalles de la Compra:</h3>";
            echo "<p><strong>Nombres y apellidos:</strong> $nombre</p>";
            echo "<p><strong>Documento:</strong> $tipo_documento</p>";
            echo "<p><strong>Numero:</strong> $documento</p>";
            echo "<p><strong>Correo electrónico:</strong> $correo</p>";
            echo "<p><strong>Celular:</strong> $numero</p>";
            echo "<p><strong>Direcion:</strong> $Direccionventa</p>";
            echo "</div>";

            // Aquí podrías guardar los datos en una base de datos o realizar otras acciones necesarias
        } else {
            echo "<p>No se han recibido datos para generar el recibo.</p>";
        }
        ?>

        <p>Gracias por su compra.</p>
    </div>
</body>
</html>
