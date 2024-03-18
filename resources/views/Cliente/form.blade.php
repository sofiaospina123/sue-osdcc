
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

                
                <div class="container" style="height: 70%; width:70%">
    
                    <h1>{{$modo}} Cliente</h1>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Producto">Tipo Cliente</label>
                            <select name="Id_TipoProducto" class="form-control">
                                <option value="0">Seleccione</option>
                                <?php
                                $conn = mysqli_connect(
                                    'localhost',
                                    'root',
                                    '',
                                    'sueñosdc'
                                );
                                $datos = "SELECT * FROM tipo_clientes";
                        
                                $result = mysqli_query($conn, $datos);
                                while ($trae = mysqli_fetch_array($result)) {
                                    echo '<option value ="' . $trae['id'] . '">' . $trae['Nombre'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
<label for="Nombre">Nombre</label>
<input type="text"  value="{{ isset($cliente->Nombre)?$cliente->Nombre:''}}"name="Nombre" id="Nombre">
<br>
<label for="User">User</label>
<input type="text"  name="User" value="{{ isset($cliente->User)?$cliente->User:'' }}" id="User">
<br>
<label for="emial">Correo</label>
<input type="email"  value="{{ isset($cliente->Correo)?$cliente->Correo:''}}"name="Correo" id="Correo">
<br>
<a href="{{url('cliente/')}}" class="btn btn-primary">Regresar</a>
<input type="submit"class="btn btn-primary" value="{{$modo}}">
</div>


</div>
</div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>