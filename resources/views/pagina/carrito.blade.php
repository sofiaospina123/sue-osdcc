<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Carrito de Compras</title>
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="container">
    <h1>Carrito de Compras</h1>
    <div class="productos-container">
        <!-- Mostrar los productos del carrito -->
        @foreach ($productos as $producto)
            <div class="producto">
                <h2>{{ $producto->nombre }}</h2>
                <p>Cantidad: {{ $producto->cantidad }}</p>
                <p>Precio: ${{ $producto->precio }}</p>
                <form action="{{ route('carrito.eliminar', $producto->id) }}" method="POST">
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
            </div>
        @endforeach
    </div>
    <div class="total-container">
        <h2>Total: ${{ $total }}</h2>
        <form action="{{ route('carrito.checkout') }}" method="POST">
            @csrf
            <button type="submit">Realizar Checkout</button>
        </form>
    </div>
</div>

<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
