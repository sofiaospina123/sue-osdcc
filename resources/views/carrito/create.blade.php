<form action="{{ url('/carritos') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="Producto">Producto</label>
<input type="text" name="Producto"><br>
<label for="Cantidad">Cantidad</label>
<input type="text" name="Cantidad"><br>
<label for="Precio">Precio</label>
<input type="text" name="Precio"><br>
<label for="Foto">Foto</label>
<input type="file" name="foto"><br>
<input type="submit" name="Enviar"><br>


</form>