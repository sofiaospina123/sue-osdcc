<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventajas de la Papelería</title>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
 
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

main {
    padding: 20px;
}

.ventaja {
    margin-bottom: 20px;
}

.ventaja h2 {
    color: #333;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}

    </style>
</head>
<body>
    
    <header>
       
        <h1 style="font-size: 57px;">𝐁𝐢𝐞𝐧𝐯𝐞𝐧𝐢𝐝@ 𝐚 𝐒𝐃𝐂, {{ session('nombre_usuario') }}
        </h1>
        <img class="logo"
            src="https://i.pinimg.com/200x150/e5/fd/04/e5fd043638ecf0185100dcae3ada1ec0.jpg"
            width="60" align='right' height="60" right="60px" alt="Mi Logo">
            <br>
          

              </a><br>
              
              <nav class="navigation">
            <br>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="{{url('cata/')}}" class="">Catalogo</a></li>
                <li><a href="#" id="mostrarFormularioContacto">Contacto</a></li>
          
              <div class="float-right">
    <a href="{{url('/login')}}" class="swipe">
        Cerrar Sesión 
        <span class="container1">
            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
            </svg>
        </span> 
    </a>
</div>
            </ul>
        </nav>
    </header>
    <main>
        <section class="ventaja">
            <h2>Organización</h2>
            <p>La papelería ayuda a mantener tus documentos y objetos en orden, lo que facilita encontrar lo que necesitas cuando lo necesitas.</p>
        </section>
        <section class="ventaja">
            <h2>Creatividad</h2>
            <p>Con la papelería adecuada, puedes expresar tu creatividad en tus proyectos, desde dibujos hasta presentaciones.</p>
        </section>
        <section class="ventaja">
            <h2>Productividad</h2>
            <p>Usar la papelería adecuada puede mejorar tu productividad al tomar notas, planificar y realizar seguimiento de tareas.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Ventajas de la Papelería. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
