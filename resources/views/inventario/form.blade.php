<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 50px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{$modo}} Inventario</h1>
        <form>
            
            <div class="row">
                <div class="col-md-6">
                    
                    <div class="form-group">
                        <label for="Producto">Producto</label>
                        <select name="id_Producto" class="form-control">
                            <option value="0">Seleccione</option>
                            <?php
                            $conn = mysqli_connect(
                                'localhost',
                                'root',
                                '',
                                'sueñosdc'
                            );
                            $datos = "SELECT * FROM  productos";
                    
                            $result = mysqli_query($conn, $datos);
                            while ($trae = mysqli_fetch_array($result)) {
                                echo '<option value ="' . $trae['id'] . '">' . $trae['NombreProducto'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Cantidad">Cantidad</label>
                        <input type="number" id="Cantidad" name="Cantidad" class="form-control" value="{{ isset($inventario->Cantidad) ? $inventario->Cantidad : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" id="Precio" name="Precio" class="form-control" value="{{ isset($inventario->Precio) ? $inventario->Precio : '' }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Producto">Descripción</label>
                        <select name="Id_TipoProducto" class="form-control">
                            <option value="0">Seleccione</option>
                            <?php
                            $conn = mysqli_connect(
                                'localhost',
                                'root',
                                '',
                                'sueñosdc'
                            );
                            $datos = "SELECT * FROM tipo_productos";
                    
                            $result = mysqli_query($conn, $datos);
                            while ($trae = mysqli_fetch_array($result)) {
                                echo '<option value ="' . $trae['id'] . '">' . $trae['Descripcion'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Marca">Marca</label>
                        <input type="text" id="Marca" name="Marca" class="form-control" value="{{ isset($inventario->Marca) ? $inventario->Marca : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="Inventario">Inventario</label>
                        <input type="text" id="Inventario" name="Inventario" class="form-control" value="{{ isset($inventario->Marca) ? $inventario->Marca : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="Provedor">Proveedor</label>
                        <input type="text" id="Provedor" name="Provedor" class="form-control" value="{{ isset($inventario->Provedor) ? $inventario->Provedor : '' }}">
                    </div>
                  
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <a href="{{ url('inventario/') }}" class="btn btn-primary btn-block">Regresar</a>
                </div>
                <div class="col-md-6">
                    <input type="submit" class="btn btn-primary btn-block" value="{{$modo}}">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
