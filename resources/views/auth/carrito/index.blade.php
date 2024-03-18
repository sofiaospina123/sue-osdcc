<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>
<form >
<h1 class="text-center text-secondary">Formulario de registros </h1>
@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

 <section class=" text-light p-5 text-center text-sm-start" id="home">
        <div class="container py-5">
            <a href="{{url('empleado/create')}}" class="btn btn-primary" >Registrar nuevo</a>
        </div>
            <div class="d-sm-flex align-item-center">          
                <table class="table table-striped table-dark">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                
                    </thead>
                    <tbody>
                    </form>
                        @foreach($empleados as $empleado )
                        <tr>
                            <td>{{ $empleado->id }}</td>
                            <td>{{ $empleado->Nombre }}</td>
                            <td>{{ $empleado->Apellido }}</td>
                            <td>{{ $empleado->Correo }}</td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <a href="{{ url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-info">
                                                Editar 
                                                </a>
                                        </td>
                                        <td>
                                            <form action="{{ url('/empleado/'.$empleado->id)}}" method="POST">
                                                @csrf
                                                {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres eliminar?')" value="Eliminar">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        @endforeach
            </div>
    </section> 
</body>
</html>