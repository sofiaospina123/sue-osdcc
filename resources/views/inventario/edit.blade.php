
<form action="{{ url('/inventario/'.$inventario->id)}}" method="POST">
    @csrf
    {{method_field('PATCH')}}
    @include('inventario.form',['modo'=>'Editar']);
</form>