<form action="{{url('/cliente/'.$cliente->id)}}" method="POST">
@csrf
{{method_field('PATCH')}}
    @include('cliente.form',['modo'=>'Editar']);
</form>

