<style>
    /* Estilos para la barra */
    .navbar {
        overflow: hidden;
        background-color: #333;
    }

    .navbar a {
        float: right;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }

    .container {
        padding-top: 60px; /* Para dejar espacio para la barra */
    }

    /* Estilos para el botón de cerrar sesión */
    .swipe {
        text-decoration: none;
        color: #f2f2f2;
        display: block;
    }

    .swipe:hover {
        background-color: #ddd;
        color: black;
    }

    .container1 {
        display: inline-block;
        vertical-align: middle;
        width: 1em;
        height: 1em;
    }

    .container1 svg {
        width: 100%;
        height: 100%;
        fill: currentColor;
    }

    /* Estilos para el formulario */
    form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    /* Estilos para las imágenes */
    img {
        display: block;
        margin: 0 auto 20px;
    }

    /* Estilos para los campos de entrada */
    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* Estilos para el botón de enviar */
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    /* Estilos para la cantidad y producto */
    #cantidadventa {
        background-color: lightblue; /* Color de fondo */
    }

    #GestionInventario {
        background-color: lightgreen; /* Color de fondo */
    }
    
</style>

<!-- Barra de navegación -->
<div class="navbar">
    <a href="{{ url('/login') }}" class="swipe">
        Cerrar Sesión
        <span class="container1">
            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
            </svg>
        </span> 
    </a>
</div>

<!-- Formulario de pago -->
<div class="container">
    <form action="{{ route('pago.procesar') }}" method="post">
        @csrf
        <div class="col-md-6">
            <img src="https://www.carrusel.edu.co/wp-content/uploads/pse-1.png" alt="Imagen PSE" class="img-fluid" width="100">
        </div>  
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" id="correo" name="correo" class="form-control" required>
                </div>
                <label for="correo">Confirmar Correo electrónico:</label>
                <input type="email" id="correo" name="correo" class="form-control" required>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipo_documento">Tipo de Documento:</label>
                    <select name="tipo_documento" id="tipo_documento" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="cedula">Cédula</option>
                        <option value="ti">Tarjeta de Identidad</option>
                        <option value="cedula_extranjero">Cédula de Extranjería</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="vencimiento">Número de Documento:</label>
                    <input type="text" id="documento" name="documento" class="form-control" placeholder="" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre">Nombres y apellidos:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="numero">Número de celular:</label>
                    <input type="text" id="numero" name="numero" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="Direccionventa">Direccion:</label>
                    <input type="text" id="Direccionventa" name="Direccionventa" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <input type="submit" value="Pagar" class="btn btn-success">
            </div>
        </div>
        
    </form>
    <script src="//code.tidio.co/oi7b3rcoripoyo2wqre6diuyksfkl4fh.js" async></script>
</div>
