<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Tu Tienda de Ropa</title>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
</head>
<body>
    <header>
        <h1 style="font-size: 57px;">𝐁𝐢𝐞𝐧𝐯𝐞𝐧𝐢𝐝𝐨𝐬 𝐚 𝐒𝐮𝐞ñ𝐨𝐬 𝐝𝐞 𝐜𝐚𝐫𝐭𝐨𝐧</h1>
        <nav>
			<ul>
				<li><a href="{{url('pagina/')}}">Inicio</a></li>
			<li><a href="{{url('catalogo/')}}" class="">Catalogo</a></li>
			
		<li><a href="#">Contacto</a></li>
			</ul>
		</nav>
    </header>

    <section class="contacto">
        <h2>Contacto</h2>
        <p>Estamos aquí para ayudarte. Por favor, completa el formulario a continuación y nos pondremos en contacto contigo lo antes posible.</p>
        <form>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 </p>
    </footer>
</body>
</html>