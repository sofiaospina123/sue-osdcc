
<form action="{{ url('/empleado/'.$empleado->id)}}" method="POST">
    @csrf
    {{method_field('PATCH')}}
    @include('empleado.form',['modo'=>'Editar']);
</form>