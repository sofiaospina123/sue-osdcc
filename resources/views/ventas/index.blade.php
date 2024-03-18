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
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('carritos/')}}">Carritos</a>
                    </li>
               
                    <a href="{{ url('pagina/') }}" class="Btn">
                        <div class="sign">
                            <svg viewBox="0 0 512 512">
                                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                            </svg>
                        </div>
                        <div class="text">Salir</div>
                    </a>
                      
                      
                      
                </ul>
            </div>
        </div>
    </nav>
    
    <section class="text-light p-5 text-center text-sm-start" id="home">
        <div class="container">
            <h1 class="text-center text-secondary">Formulario de Ventas</h1>
         <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gestión de Inventario</th>
                            <th>Cliente</th>
                            <th>Empleado</th>
                            <th>Cantidad</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ventas as $venta)
                        <tr>
                            <td>{{ $venta->id }}</td>
                            <td>{{ $venta->inventario->Inventario }}</td>

                            <td>{{ $venta->tipoCliente->Nombre }}</td>
                            <td>{{ $venta->empleado->Nombre }}</td>
                            <td>{{ $venta->stock }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('/ventas/'.$venta->id.'/edit') }}" class="btn btn-info btn-editar">   <img src="https://cdn-icons-png.flaticon.com/512/2040/2040995.png"style="width: 30px; height: 30px;" alt="Editar">
                                    </a>
                      </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
                <canvas id="ventasChart"></canvas>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('ventasChart').getContext('2d');
    
        var data = {
            labels: {!! json_encode($data['labels']) !!},
            datasets: [{
                label: 'Ventas',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                data: {!! json_encode($data['values']) !!}
            }]
        };
    
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };
    
        var ventasChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>
        