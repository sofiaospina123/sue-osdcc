
<form action="{{url('/ventas')}}" method="post">
    @csrf
    @include('ventas.form',['modo'=>'Crear']);

</form>