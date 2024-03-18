<form action="{{url('/carrito')}}" method="post">
    @csrf
    @include('carrito.form',['modo'=>'Crear']);

</form>