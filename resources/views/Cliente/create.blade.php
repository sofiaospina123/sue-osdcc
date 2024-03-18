<form action="{{url('/cliente')}}" method="POST">
   @csrf
@include('cliente.form',['modo'=>'Crear']);

</form>