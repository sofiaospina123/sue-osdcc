<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <section class="bg-dark text-light p-5 text-center text-sm-start" id="home">
        <div class="container py-5">
        </div>
            <div class="d-sm-flex align-item-center">
                <a href="">
                
                <div class="container" style="height: 70%; width:70%">
    
                    <h1>{{$modo}} Producto</h1>
                    
                    <label for="Nombre">Nombre</label>
                    <br>
                    <input type= "text"  id="Nombre" name="Nombre" value="{{ isset($carrito->Nombre) ? $carrito->Nombre : '' }}">
                    <br>
                    <label for="Nombre">Producto</label>
                    <br>
                    <input type= "text"  id="Producto" name="Producto" value="{{ isset($carrito->Producto) ? $carrito->Producto : '' }}">
                    <label for="Nombre">Cantidad</label>
                    <br>
                    <input type= "text"  id="Cantidad" name="Cantidad" value="{{ isset($carrito->Cantidad) ? $carrito->Cantidad : '' }}">
                    <br>
                    <a href="{{url('empleado/')}}" class="btn btn-primary">Regresar</a>
                    <input type="submit"class="btn btn-primary" value="{{$modo}}">
                    </div>
            </div>
    </section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>