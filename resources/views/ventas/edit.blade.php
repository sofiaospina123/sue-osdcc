
<form action="{{ url('/ventas/'.$venta->id)}}" method="POST">
@csrf

{{method_field('PATCH')}}
@include('ventas.form',['modo'=>'editar']);


</form>