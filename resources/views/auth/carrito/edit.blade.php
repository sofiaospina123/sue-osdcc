
<form action="{{ url('/carrito/'.$carrito->id)}}" method="POST">
    @csrf
    {{method_field('PATCH')}}
    @include('carrito.form',['modo'=>'Editar']);
</form>