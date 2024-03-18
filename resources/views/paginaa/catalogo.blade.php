<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header>

        <h1 style="font-size: 57px;">𝐁𝐢𝐞𝐧𝐯𝐞𝐧𝐢𝐝@ al carrito, {{ session('nombre_usuario') }}
        </h1>
        <img class="logo"
            src="https://i.pinimg.com/200x150/e5/fd/04/e5fd043638ecf0185100dcae3ada1ec0.jpg"
            width="60" align='right' height="60" right="60px" alt="Mi Logo">
            <br>
          

              </a><br>
              
              <nav class="navigation">
            <br>
            <ul>
                <li><a href="{{url('paginaa/')}}">Inicio</a></li>
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
  <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
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
.button {
  width: 180px;
  height: 40px;
  background-image: linear-gradient(rgb(214, 202, 254), rgb(158, 129, 254));
  border: none;
  border-radius: 50px;
  color: rgb(255, 255, 255);
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 5px;
  cursor: pointer;
  box-shadow: 1px 3px 0px rgb(139, 113, 255);
  transition-duration: .3s;
}

.cartIcon {
  width: 14px;
  height: fit-content;
}

.cartIcon path {
  fill: white;
}

.button:active {
  transform: translate(2px ,0px);
  box-shadow: 0px 1px 0px rgb(139, 113, 255);
  padding-bottom: 1px;
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
        .loader {
  width: fit-content;
  height: fit-content;
  display: flex;
  align-items: center;
  justify-content: center;
}

.truckWrapper {
  width: 200px;
  height: 100px;
  display: flex;
  flex-direction: column;
  position: relative;
  align-items: center;
  justify-content: flex-end;
  overflow-x: hidden;
}
/* truck upper body */
.truckBody {
  width: 130px;
  height: fit-content;
  margin-bottom: 6px;
  animation: motion 1s linear infinite;
}
/* truck suspension animation*/
@keyframes motion {
  0% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(3px);
  }
  100% {
    transform: translateY(0px);
  }
}
/* truck's tires */
.truckTires {
  width: 130px;
  height: fit-content;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0px 10px 0px 15px;
  position: absolute;
  bottom: 0;
}
.truckTires svg {
  width: 24px;
}

.road {
  width: 100%;
  height: 1.5px;
  background-color: #282828;
  position: relative;
  bottom: 0;
  align-self: flex-end;
  border-radius: 3px;
}
.road::before {
  content: "";
  position: absolute;
  width: 20px;
  height: 100%;
  background-color: #282828;
  right: -50%;
  border-radius: 3px;
  animation: roadAnimation 1.4s linear infinite;
  border-left: 10px solid white;
}
.road::after {
  content: "";
  position: absolute;
  width: 10px;
  height: 100%;
  background-color: #282828;
  right: -65%;
  border-radius: 3px;
  animation: roadAnimation 1.4s linear infinite;
  border-left: 4px solid white;
}

.lampPost {
  position: absolute;
  bottom: 0;
  right: -90%;
  height: 90px;
  animation: roadAnimation 1.4s linear infinite;
}

@keyframes roadAnimation {
  0% {
    transform: translateX(0px);
  }
  100% {
    transform: translateX(-350px);
  }
}

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .producto {
            display: flex;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .producto img {
            width: 150px;
            height: auto;
            margin-right: 20px;
        }
        .producto h3 {
            margin: 0;
            font-size: 1.2rem;
        }
        .producto p {
            margin: 5px 0;
        }
        .producto button {
            margin-top: 10px;
        }
        #pago {
            display: none;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'sueñosdc'
);
define("KEY", "Sueñosdc");
define("COD", "AES-128-ECB");

define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("PASSWORD", "");
define("BD", "sueñosdc");
$servidor = "mysql:dbname=" . BD . ";host=" . SERVIDOR;
try {
    $pdo = new PDO(
        $servidor,
        USUARIO,
        PASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    //echo "<script>alert('Conectado')</script>";
} catch (PDOException $e) {
    //echo "<script>alert('Error')</script>";
}

?>

    <?php
   $query = "SELECT * FROM  inventarios";
    $result = $conn->query($query);
    if(isset($_POST['cantidad']) && isset($_POST['id'])) {
    // Obtener la cantidad deseada y el ID del producto del formulario
    $cantidad_deseada = $_POST['cantidad'];
    $id_producto = $_POST['id'];

    // Consultar el stock actual del producto
    $query_stock_actual = "SELECT stock FROM inventarios WHERE id = $id_producto";
    $result_stock_actual = $conn->query($query_stock_actual);

    if ($result_stock_actual) {
        $fila_stock_actual = $result_stock_actual->fetch_assoc();
        $stock_actual = $fila_stock_actual['stock'];

        // Calcular el nuevo stock restando la cantidad deseada
        $nuevo_stock = $stock_actual - $cantidad_deseada;

        // Actualizar el stock en la base de datos
        $query_actualizar_stock = "UPDATE inventarios SET stock = $nuevo_stock, updated_at = NOW() WHERE id = $id_producto";

        if ($conn->query($query_actualizar_stock)) {
            echo "El stock del producto con ID $id_producto ha sido actualizado correctamente.";
        } else {
            echo "Error al actualizar el stock del producto: " . $conn->error;
        }
    } else {
        echo "Error al obtener el stock actual del producto: " . $conn->error;
    }
} else {
    // Si el campo 'cantidad' no se envió en el formulario, mostrar un mensaje de error
    echo "";
}
    $query = "SELECT * FROM  empleados";
    $resultEmple = $conn->query($query);

    $query = "SELECT * FROM  clientes";
    $resultCli = $conn->query($query);
    ?>
    
   
      <?php while ($row = $result->fetch_assoc()) { ?>
                  
                    <form action="" method="post">
                            @csrf
                            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($row['id'], COD, KEY); ?>">
                            <input type="hidden" name="Inventario" id="Inventario" value="<?php echo openssl_encrypt($row['Inventario'], COD, KEY); ?>">
                            <input type="hidden" name="Precio" id="Precio" value="<?php echo openssl_encrypt($row['Precio'], COD, KEY); ?>">
                      
                        </form>
                    </div>
                </div>
            </div>
  
    </div>


</div>
<body>
    <div class="container">
      
        <div class="producto">
            <div>
              <form action="{{ route('realizar.descuento') }}" method="post">
                @csrf
                <span>{{ $row['Inventario'] }}</span>
                <p class="card-text">{{ $row['stock'] }}</p>
                <h5 class="card-title">{{ $row['Precio'] }}</h5>
                <label for="cantidad_{{ $row['id'] }}">Cantidad:</label>
                <input type="number" id="cantidad_{{ $row['id'] }}" class="form-control" name="cantidad" min="1" value="1">
                <input type="hidden" name="id" value="{{ $row['id'] }}">
                <button type="submit" class="btn btn-outline-danger">Agregar al carrito</button>
</form>
              </div>
  </div>
  <?php } ?>
  
  <div class="carrito" id="carrito">
      <h2>Carrito de Compras</h2>
      <ul id="lista-productos">
          <!-- Aquí se mostrarán los productos agregados -->
      </ul>
      <p>Total: $<span id="total">0.00</span></p>
  </div>

  <div id="pago">
      <h2>Formulario de Pago</h2>
     
            <div class="col-md-6">
              <img src="https://www.carrusel.edu.co/wp-content/uploads/pse-1.png" alt="Imagen PSE" class="img-fluid" width="100">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <a href=""></a>
                  <div class="form-group">
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" id="correo" name="correo" class="form-control" required>
                  </div>
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
                    <label for="cantidadventa">Cantidad:</label>
                    <input type="text" id="cantidadventa" name="cantidadventa" class="form-control" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="GestionInventario">Producto:</label>
                    <input type="text" id="GestionInventario" name="GestionInventario" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="totalPago">Total a pagar:</label>
                    <input type="text" id="totalPago" name="totalPago" class="form-control" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="submit" value="Pagar" class="btn btn-success">
                </div>
              </div>
            </div>
          </form>
  </div>
  
  <button type="button" class="btn btn-success" onclick="mostrarFormularioPago()">Pagar</button>
  
  <button class="btn btn-outline-danger" onclick="vaciarCarrito()">Vaciar Carrito</button>
</div>

<script>
  let carrito = [];
  let total = 0;

  function agregarAlCarrito(nombre, precio, idProducto) {
    // Obtener la cantidad del input
    var cantidad = document.getElementById('cantidad_' + idProducto).value;

    // Buscar si el producto ya está en el carrito
    let productoEnCarrito = carrito.find(producto => producto.nombre === nombre);

    if (productoEnCarrito) {
        // Si ya está, actualizar su cantidad
        productoEnCarrito.cantidad = parseInt(cantidad);
    } else {
        // Si no está, agregarlo al carrito con la cantidad ingresada
        carrito.push({ nombre, precio, cantidad: parseInt(cantidad) });
    }

    actualizarCarrito(); // Actualizar el carrito en la interfaz
}



  function vaciarCarrito() {
      carrito = []; // Vaciar el array del carrito
      actualizarCarrito(); // Actualizar la visualización del carrito
  }
  function actualizarCarrito() {
    let listaProductos = document.getElementById('lista-productos');
    let totalSpan = document.getElementById('total');
    listaProductos.innerHTML = '';
    total = 0;
    let nombres = ''; // Variable para almacenar los nombres de los productos
    let cantidades = ''; // Variable para almacenar las cantidades de los productos

    carrito.forEach(producto => {
        let li = document.createElement('li');
        li.textContent = `${producto.nombre} x ${producto.cantidad} - $${producto.precio * producto.cantidad}`;
        listaProductos.appendChild(li);
        total += producto.precio * producto.cantidad;
        // Concatenar los nombres y las cantidades de los productos
        nombres += producto.nombre + ', ';
        cantidades += producto.cantidad + ', ';
    });

    totalSpan.textContent = total.toFixed(2);

    // Actualizar total en el formulario de pago
    document.getElementById('totalPago').value = total.toFixed(2);
    // Asignar los nombres y las cantidades al campo oculto del formulario
    document.getElementById('GestionInventario').value = nombres.slice(0, -2); // Eliminar la última coma y el espacio
    document.getElementById('cantidadventa').value = cantidades.slice(0, -2); // Eliminar la última coma y el espacio
}


  function mostrarFormularioPago() {
      let formularioPago = document.getElementById('pago');
      formularioPago.style.display = 'block';
      
      // Después de mostrar el formulario de pago, realizar la actualización del stock
    
 
  }
</script>
<script src="//code.tidio.co/oi7b3rcoripoyo2wqre6diuyksfkl4fh.js" async></script>
</body>
</html>