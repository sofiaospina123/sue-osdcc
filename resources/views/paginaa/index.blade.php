<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{asset('css/estilos.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
<title>Sueños de carton</title>
<style>
    button {
  background: transparent;
  color: #fff;
  border: 3px solid #fff;
  border-radius: 50px;
  padding: 0.8rem 2rem;
  font: 18px "Margarine", sans-serif;
  outline: none;
  cursor: pointer;
  position: relative;
  transition: 0.2s ease-in-out;
  letter-spacing: 2px;
}

.name {
  width: 100%;
  text-align: center;
  padding: 0 0 3rem;
  padding-top: 4rem;
  font: 500 14px "Rubik", sans-serif;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
}

.button-parrot .parrot {
  position: absolute;
  width: 60px;
  text-align: center;
  animation: blink 0.8s infinite;
  color: transparent;
}

.button-parrot .parrot:before {
  content: "Click Me!";
}

.button-parrot .parrot:nth-child(1) {
  top: -30px;
  left: -40px;
  font: 12px/1 "Margarine", sans-serif;
  transform: rotate(-20deg);
  animation-duration: 0.5s;
}

.button-parrot .parrot:nth-child(2) {
  font: 12px/1 "Margarine", sans-serif;
  right: -40px;
  top: -20px;
  transform: rotate(15deg);
  animation-duration: 0.3s;
}

.button-parrot .parrot:nth-child(3) {
  font: 16px/1 "Margarine", sans-serif;
  top: -60px;
  left: 15px;
  transform: rotate(10deg);
  animation-duration: 1s;
}

.button-parrot .parrot:nth-child(4) {
  font: 18px/1 "Margarine", sans-serif;
  top: -70px;
  left: 95px;
  transform: rotate(2deg);
  animation-duration: 0.7s;
}

.button-parrot .parrot:nth-child(5) {
  font: 14px/1 "Margarine", sans-serif;
  top: 80px;
  left: 105px;
  transform: rotate(-20deg);
  animation-duration: 0.8s;
}

.button-parrot .parrot:nth-child(6) {
  font: 12px/1 "Margarine", sans-serif;
  top: 80px;
  left: 5px;
  transform: rotate(10deg);
  animation-duration: 1.2s;
}

.button-parrot button:hover .parrot:before {
  content: "Do it!";
  width: 70px;
}
.unique-button {
  display: flex;
  align-items: center;
  position: relative;
  width: 180px;
  height: 60px;
  padding: 15px 30px;
  font-size: 18px;
  text-decoration: none;
  color: #fff;
  background-color: #a634db;
  border: none;
  border-radius: 10px;
  overflow: hidden;
  cursor: pointer;
  transition: 0.3s all ease-in-out;
}

.unique-button:hover {
  transition: 0.3s all ease-in-out;
  box-shadow: 5px 10px 30px #a634db;
}

.unique-button span {
  display: block;
  margin-left: 0.3em;
  transition: all 0.3s ease-in-out;
}

.unique-button:hover span {
  transform: translateX(7em);
}

.unique-button:hover .svg-wrap {
  animation: fly-1 0.6s ease-in-out infinite alternate;
  z-index: 1;
}

.unique-button svg {
  display: block;
  transform-origin: center center;
  transition: transform 0.3s ease-in-out;
}

.unique-button:hover svg {
  transform: translateX(2.5em) rotate(45deg) scale(1.2);
}

.unique-button:active {
  transform: scale(0.95);
}

@keyframes fly-1 {
  from {
    transform: translateY(0.1em);
  }

  to {
    transform: translateY(-0.1em);
  }
}

.unique-button::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 0;
  height: 80%;
  border-bottom-left-radius: 60px;
  border-top-right-radius: 60px;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
  background-color: #2c3e50;
  transition: all 0.2s ease-in-out;
}

.unique-button:hover::before {
  width: 100%;
}

.unique-button::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80%;
  height: 0;
  border-bottom-left-radius: 20px;
  border-top-right-radius: 20px;
  border-top-left-radius: 60px;
  border-bottom-right-radius: 60px;
  background-color: #2c3e50;
  transition: all 0.3s ease-in-out;
}

.unique-button:hover::after {
  height: 100%;
}

@keyframes blink {
  25%, 75% {
    color: transparent;
  }

  40%, 60% {
    color: #fff;
  }

    .navigation {
        float: right;
    }

    
}
.swipe {
  position: relative;
  background-color: #a85145;
  width: 200px;
  height: 60px;
  color: rgba(255, 255, 204, 1); /* Corregí la coma en rgba */
  border-radius: 60px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
  letter-spacing: 2px;
  border-top: 0.5px solid rgba(0, 0, 0, 0.35);
  border-left: 0.5px solid rgba(0, 0, 0, 0.35);
  padding-left: 40px;
  cursor: pointer;
  transition: 0.35s ease;
}

.swipe:hover {
  padding-left: 0;
  padding-right: 40px;
  color: #324B4C;
}
/* Estilos para el formulario de contacto */
.formulario-contacto {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #131011;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    display: none;
    z-index: 999; /* Asegura que el formulario esté por encima del contenido */
}

/* Estilos para el fondo oscuro que se muestra detrás del formulario */
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Color de fondo semi-transparente */
    display: none;
    z-index: 998; /* Z-index menor que el formulario para que el formulario esté encima */
}

/* Estilos para el cuerpo (para que no se pueda desplazar mientras el formulario está activo) */
body.formulario-activo {
    overflow: hidden;
}

.container1 {
  position: absolute;
  left: 5px;
  width: 50px;
  height: 50px;
  background: #cf1313;
  border-radius: 50%;
  transition: 0.35s ease;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #f7f1f1;
}

.swipe:hover .container1 {
  left: calc(100% - 55px);
  color: #324B4C;
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
        <div id="formularioContacto" class="formulario-contacto">
          <h2>Formulario Contacto</h2>
          <form action="{{ route('enviar-correo') }}" method="post">
              <!-- Campos del formulario aquí -->
              <label for="nombre">Nombre:</label>
              <input type="text" id="nombre" name="nombre" required><br><br>
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required><br><br>
              <label for="mensaje">Mensaje:</label><br>
              <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br><br>
              <button type="submit">Enviar</button>
                
              <div class="float-right">
                <a href="{{url('/paginaa')}}" class="swipe">
                    Volver 
                    <span class="container1">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                        </svg>
                    </span> 
                </a>
            </div>
          </form>
      </div>
    </header>
	
	<br>
    <h1 class="text-center">Productos Destacados</h1>
	<br>
	<br>
<div class="img-container">
	<img src="https://www2.claro.com.co/portal/co/noticias/imagenes/1673616681684-6-01-La-lista-de-utiles-escolares-mas-original-y-divertida.jpg" alt="">
	<img src="https://149562642.v2.pressablecdn.com/wp-content/uploads/shutterstock_481616641-1140x800.png" alt="">
	<img src="https://http2.mlstatic.com/D_NQ_NP_617660-MCO69902794144_062023-O.webp" alt="">
	<img src="https://elcomercio.pe/resizer/SJMLbEQW0BGKtNySzkAoJbE6Qq8=/1200x1200/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/LXRHIVSXMZD23KVJRBFQNYJLMA.jpg" alt="">
	<img src="https://http2.mlstatic.com/D_NQ_NP_722233-MCO50440556118_062022-O.webp" alt="">
</div>
<br>
<br>
<br>
	</section>

    <section class="bg-dark text-light p-5" id="learn">
        <div class="container py-5">
            <div class="row align-items-cente justify-content-between">
                <div class="col-md p-5">
                    <h2>Ventajas al utlizar nuestro servicio</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat nobis veritatis consequatur excepturi atque! Vero, deleniti. Iste voluptatum exercitationem, minus ullam odio non ex perferendis sed a rerum repudiandae corporis!</p>
                    <a href="{{url('/ventajas')}}"> Nuestras Ventajas</a>
                </div>
                <div class="img1">
                    <a href=""></a>
                    <img src="https://static.vecteezy.com/system/resources/previews/024/280/044/non_2x/3d-cartoon-design-illustration-of-delivery-truck-shipping-parcel-boxes-shopping-and-delivery-service-online-png.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
		<div class="row">
			<div class="col-sm-6">
			  <div class="card text-white bg-dark mb-3">
				<div class="card-body">
				  <h5 class="card-title">Special title treatment</h5>
				  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				  <a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			  </div>
			</div>
			<div class="col-sm-6">
			  <div class="card text-white bg-dark mb-3">
				<div class="card-body">
				  <h5 class="card-title">Special title treatment</h5>
				  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				  <a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			  </div>
			</div>
    </section>
	<br>
<section id="video">

    <iframe width="853" height="480" src="https://www.youtube.com/embed/erKvWjjFpEs"
        title="MISCELANEA Y VARIEDADES FLORIDA" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>

</section>
	<section class="text-black p-5" id="learn">
        <div class="container py-5">
            <div class="row align-items-cente justify-content-between">
                <div class="col-md p-3">
                    <h2>Contáctanos</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat nobis veritatis consequatur excepturi atque! Vero, deleniti. Iste voluptatum exercitationem, minus ullam odio non ex perferendis sed a rerum repudiandae corporis!</p>
                    <a href="http://">Nuestras Contactos</a>
                </div>
                <div class="img2">
                    <a href=""></a>
                    <img src="https://media.istockphoto.com/id/1398923416/es/foto/retrato-de-cerca-de-la-sonriente-empresaria-ellen-con-los-brazos-cruzados-renderizado-3d-sobre.jpg?b=1&s=612x612&w=0&k=20&c=U6kjf6aPHaQ0zDeax2AXYRVx3YYNqYVLd4KhtMfmGw8=" class="img-fluid" alt="">
                </div>
            </div>
        </div>

		
    </section>
	
    <script>
      // Obtener el enlace de contacto y el formulario de contacto
      const enlaceContacto = document.getElementById('mostrarFormularioContacto');
      const formularioContacto = document.getElementById('formularioContacto');
  
      // Agregar un event listener al enlace de contacto
      enlaceContacto.addEventListener('click', function(event) {
          // Prevenir el comportamiento predeterminado del enlace
          event.preventDefault();
  
          // Mostrar u ocultar el formulario de contacto
          if (formularioContacto.style.display === 'none') {
              formularioContacto.style.display = 'block';
          } else {
              formularioContacto.style.display = 'none';
          }
      });
  </script>
  
	<iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63624.868915912855!2d-74.0974901!3d4.6732491!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f909e88bf0583%3A0xcee402e0b005bc73!2sChapinero%2C+Bogot%C3%A1%2C+Colombia!5e0!3m2!1ses-419!2ses!4v1465346611303"
    width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
	<footer>
		<p>&copy; 2024 SueñosDC</p>
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>

    <script src="//code.tidio.co/oi7b3rcoripoyo2wqre6diuyksfkl4fh.js" async></script>
</body>
</html>
