<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	crossorigin="anonymous">
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
	</style>
	
<title>Catálogo - Tu Tienda SueñosDC</title>
<link rel="stylesheet" href="{{asset('css/estilos.css')}}">
</head>
<body>
	
	<header>
		<h1 style="font-size: 57px;">Catalogo</h1><br>
		<a href="{{ url('login/') }}" class="item button-parrot" style="--bg-color: #2c3e50">
			<button>Inicia Sesion!</button><br>
		<img class="logo"
			src="https://i.pinimg.com/200x150/e5/fd/04/e5fd043638ecf0185100dcae3ada1ec0.jpg"
			width="60" align='right' height="60" right="60px" alt="Mi Logo">
<br>
<nav>

    <ul>
        <li><a href="{{url('pagina/')}}">Inicio</a></li>
    <li><a href="#" class="">Catalogo</a></li>
    
<li><a href="{{url('contacto/')}}">Contacto</a></li>
    </ul>
</nav>
	</header>

	<section class="catalogo">

		<div class="producto" >
			<img
				src="https://munimuni.com.co/cdn/shop/products/image_5ee4a7d2-3b8b-4e55-a08c-b4e130770119.jpg?v=1671470200"
				align='right' alt="Producto 1">
			<h3>Peluches</h3>
			<p>Precio: $50.00</p>

		</div>
		<div class="producto">
			<img
				src="https://flormiel.com/floristeria/wp-content/uploads/2019/04/Peluche-Stich-Az%C3%BAl.jpg"
				align='right' alt="Producto 2">
			<h3>Peluches</h3>
			<p>Precio: $30.00</p>
	
		

		</div>
		<div class="producto">
			<img
				src="https://img.freepik.com/foto-gratis/vista-frontal-lindo-bebe-nino-cupcake-osito-peluche_23-2148415544.jpg?w=2000"
				align='right' alt="Producto 2">
			<h3>Peluches</h3>
			<p>Precio: $30.00</p>
			
		

		</div>
		<div class="producto">
			<img
				src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0WRo_0OB9uBKPVcqJ-hJ12ZBxRgxjRwtGK5cpJqZI_D8XksaQ98gfaN6XFVYUPibHDDw&usqp=CAU"
				height="260" alt="Producto 2">
			<h3>Materiales</h3>
			<p>Precio: $30.00</p>

		
		</div>
		<div class="producto">
			<img
				src="https://caracol.com.co/resizer/VFokVQN3jWofVGLXlVxtIz1Mbnw=/650x488/filters:format(png):quality(70)/cloudfront-us-east-1.images.arcpublishing.com/prisaradioco/MUUVYQPCPRB3XM4PU5YCRXLGCY.png"
				width="" height="300" alt="Producto 2">
			<h3>Materiales</h3>
			<p>Precio: $30.00</p>

		

		</div>
		<div class="producto">
			<img
				src="https://i.pinimg.com/550x/67/28/9f/67289f053c945cfe74da885bae30b95e.jpg"
				height="300" alt="Producto 2">
			<h3>Materiales</h3>
			<p>Precio: $30.00</p>
	
		

		</div>
		<div class="producto">
			<img
				src="https://tumakeup.tv/wp-content/uploads/2017/07/bigstock-196256578.jpg"
				height="300" alt="Producto 2">
			<h3>Maquillaje</h3>
			<p>Precio: $30.00</p>

		

		</div>
		<div class="producto">
			<img
				src="https://tiendaellas.com/cdn/shop/articles/Blog_Maybelline_800x.png?v=1632321223"
				height="300" alt="Producto 2">
			<h3>Maquillaje</h3>
			<p>Precio: $30.00</p>
	
		

		</div>
		<div class="producto">
			<img
				src="https://previews.123rf.com/images/loonara/loonara1607/loonara160700012/60728838-maquillaje-profesional-pinceles-y-herramientas-de-recolecci%C3%B3n-maquillaje-productos-que-figuran-en.jpg"
				height="300" alt="Producto 2">
			<h3>Peluches</h3>
			<p>Precio: $30.00</p>
	
		

		</div>

	</section>

	<footer>
		<p>&copy; 2024 Tu Tienda VM</p>
	</footer>
</body>
</html>