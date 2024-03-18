<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto Detalle</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 20px;
        }
        p {
            margin-bottom: 10px;
        }
        strong {
            font-weight: bold;
        }
        .img-container {
            text-align: center;
        }
        img {
            width: 200px;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .button {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px 15px;
  gap: 15px;
  background-color: #181717;
  outline: 3px #181717 solid;
  outline-offset: -3px;
  border-radius: 5px;
  border: none;
  cursor: pointer;
  transition: 400ms;
}

.button .text {
  color: white;
  font-weight: 700;
  font-size: 1em;
  transition: 400ms;
}

.button svg path {
  transition: 400ms;
}

.button:hover {
  background-color: transparent;
}

.button:hover .text {
  color: #181717;
}

.button:hover svg path {
  fill: #181717;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="img-container">
                            <img src="https://i.pinimg.com/200x150/e5/fd/04/e5fd043638ecf0185100dcae3ada1ec0.jpg" alt="Logo de la aplicación">
                        </div>
                        <p><strong>Descripción:</strong> {{ $producto->Inventario }}</p>
                        <p><strong>Precio:</strong> {{ $producto->Precio }}</p>
                        <p><strong>Cantidad seleccionada:</strong> {{ $cantidadDeseada }}</p>
                        <p><strong>Total a pagar:</strong> ${{ $cantidadDeseada * $producto->Precio }}</p>
                        <a href="{{ url('pago/') }}" class="button">
                            <svg viewBox="0 0 16 16" class="bi bi-cart-check" height="24" width="24" xmlns="http://www.w3.org/2000/svg" fill="#fff">
                                <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"></path>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                            </svg>
                            <p class="text">Pagar</p>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//code.tidio.co/oi7b3rcoripoyo2wqre6diuyksfkl4fh.js" async></script>
</body>
</html>
