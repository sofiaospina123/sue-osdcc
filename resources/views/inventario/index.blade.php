<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }

        nav.navbar {
            background-color: #e3f2fd;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .nav-link {
            color: #343a40;
        }

        h1 {
            color: #343a40;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .table-dark {
            background-color: #212529;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        /* Adjustments for responsiveness */
        @media (max-width: 576px) {
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .btn-group {
                display: block;
            }

            .btn-group .btn {
                margin-bottom: 5px;
            }
        }
        .Btn {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 45px;
  height: 45px;
  border: none;
  border-radius: 50%;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition-duration: .3s;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
  background-color: rgb(255, 65, 65);
}

/* plus sign */
.sign {
  width: 100%;
  transition-duration: .3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.sign svg {
  width: 17px;
}

.sign svg path {
  fill: white;
}
/* text */
.text {
  position: absolute;
  right: 0%;
  width: 0%;
  opacity: 0;
  color: white;
  font-size: 1.2em;
  font-weight: 600;
  transition-duration: .3s;
}
/* hover effect on button width */
.Btn:hover {
  width: 125px;
  border-radius: 40px;
  transition-duration: .3s;
}

.Btn:hover .sign {
  width: 30%;
  transition-duration: .3s;
  padding-left: 20px;
}
/* hover effect button's text */
.Btn:hover .text {
  opacity: 1;
  width: 70%;
  transition-duration: .3s;
  padding-right: 10px;
}
/* button click effect*/
.Btn:active {
  transform: translate(2px ,2px);
}
    </style>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">Bienvenido admi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('cliente/')}}">Cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('empleado/')}}">Empleado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('inventario/')}}">Inventario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('ventas/')}}">Ventas</a>
                </li>
            </ul>
            <a href="{{ url('login/') }}" class="Btn">
                <div class="sign">
                    <svg viewBox="0 0 512 512">
                        <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                    </svg>
                </div>
                <div class="text">Salir</div>
            </a>
        </div>
    </div>
</nav>

    <div class="container my-5">
        <h1 class="text-center mb-4">Formulario de inventario</h1>
        @if(Session::has('mensaje'))
            <p>{{Session::get('mensaje')}}</p>
        @endif
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <a href="{{url('inventario/create')}}" class="btn btn-primary mb-3">Registrar nuevo</a>
        <a href="excel.php" download="inventario.xlsx">Descargar Excel</a>


        <div class="table-responsive">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>Id</th>
                  
                        <th>Producto</th>
                        <th>Tipo de Producto</th>
                        <th>Cantidad</th>
                        <th>Marca</th>
                        <th>Precio</th>
                        <th>Proveedor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inventarios as $inventario)
                        <tr>
                            <td>{{ $inventario->id }}</td>
                            <td>{{ $inventario->producto->NombreProducto }}</td>
                            <td>{{ $inventario->tipoProducto->Descripcion }}</td>
                            <td>{{ $inventario->stock }}</td>
                            <td>{{ $inventario->Marca }}</td>
                            <td>{{ $inventario->Precio }}</td>
                            <td>{{ $inventario->Provedor }}</td>
                           <td>
    <div class="btn-group">
        <a href="{{ url('/inventario/'.$inventario->id.'/edit') }}" class="btn btn-info">
            <img src="https://cdn-icons-png.flaticon.com/512/2040/2040995.png"style="width: 20px; height: 20px;" alt="Editar">
    
        </a>
        <form action="{{ route('aumentarStock') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $inventario->id }}">
            <div class="input-group">
                <input type="number" name="cantidad" class="form-control" min="1" value="1">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-success">
                        <img src="https://cdn-icons-png.flaticon.com/512/992/992681.png" style="width: 20px; height: 20px;" alt="Aumentar Stock">
                    </button>
                </div>
            </div>
        </form>
        
        
        
       
    </div>
</td>

                        </tr>
                    @endforeach
                    @foreach($inventarios as $inventario)
                    @if($inventario->stock < 10) <!-- Umbral de cantidad baja -->
                        <div class="alert alert-warning" role="alert">
                            ¡Alerta! La cantidad de {{ $inventario->producto->NombreProducto }} está por debajo de la cantidad (10).
                        </div>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
                <canvas id="inventarioChart"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Obtener los datos del inventario desde el backend (por ejemplo, a través de una solicitud AJAX)
        var inventarioData = <?php echo json_encode($inventarioChartData); ?>;

        // Configurar los datos del gráfico
        var ctx = document.getElementById('inventarioChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: inventarioData.labels,
                datasets: [{
                    label: 'Cantidad en Inventario',
                    data: inventarioData.values,
                    backgroundColor: 'rgba(75, 19, 19, 0.2)',
                    borderColor: 'rgba(18, 19, 19, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   
