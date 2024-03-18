<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Pago</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container .btn1 {
  position: relative;
  top: 0;
  left: 0;
  width: 160px;
  height: 50px;
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

.container .btn1 a {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background: rgba(255, 255, 255, 0.05);
  box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 30px;
  padding: 10px;
  letter-spacing: 1px;
  text-decoration: none;
  overflow: hidden;
  color: #000;
  font-weight: 400px;
  z-index: 1;
  transition: 0.5s;
  backdrop-filter: blur(15px);
}

.container .btn1:hover a {
  letter-spacing: 3px;
}

.container .btn1 a::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: linear-gradient(to left, rgba(255, 255, 255, 0.15), transparent);
  transform: skewX(45deg) translate(0);
  transition: 0.5s;
  filter: blur(0px);
}

.container .btn1:hover a::before {
  transform: skewX(45deg) translate(200px);
}

.container .btn1::before {
  content: "";
  position: absolute;
  left: 50%;
  transform: translatex(-50%);
  bottom: -5px;
  width: 30px;
  height: 10px;
  background: #f00;
  border-radius: 10px;
  transition: 0.5s;
  transition-delay: 0.5;
}

.container .btn1:hover::before /*lightup button*/ {
  bottom: 0;
  height: 50%;
  width: 80%;
  border-radius: 30px;
}

.container .btn1::after {
  content: "";
  position: absolute;
  left: 50%;
  transform: translatex(-50%);
  top: -5px;
  width: 30px;
  height: 10px;
  background: #f00;
  border-radius: 10px;
  transition: 0.5s;
  transition-delay: 0.5;
}

.container .btn1:hover::after /*lightup button*/ {
  top: 0;
  height: 50%;
  width: 80%;
  border-radius: 30px;
}

.container .btn1:nth-child(1)::before, /*chnage 1*/
.container .btn1:nth-child(1)::after {
  background: #ff1f71;
  box-shadow: 0 0 5px #ff1f71, 0 0 15px #ff1f71, 0 0 30px #ff1f71,
		0 0 60px #ff1f71;
}
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            color: #555;
        }
        /* Estilos adicionales para el área de impresión del recibo */
        #areaImpresion {
            display: none;
            text-align: left;
            padding: 20px;
            border: 1px solid #ccc;
            margin-top: 20px;
            background-color: #f9f9f9;
        }
        #areaImpresion h2 {
            margin-bottom: 10px;
            color: #333;
        }
        #areaImpresion p {
            margin-bottom: 5px;
            color: #555;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pago Procesado con Éxito</h1>
        <p>Se ha enviado un correo electrónico de confirmación.</p>
            <div class="btn1"><a href="{{url('login/')}}"">Salir</a></div>
        
        </div>	
</body>
</html>
