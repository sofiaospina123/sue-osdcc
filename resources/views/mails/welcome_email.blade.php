<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido al sistema</title>
    <style>
        .Btn {
  position: relative;
  width: 150px;
  height: 55px;
  border-radius: 45px;
  border: none;
  background-color: rgb(151, 95, 255);
  color: white;
  box-shadow: 0px 10px 10px rgb(210, 187, 253) inset,
  0px 5px 10px rgba(5, 5, 5, 0.212),
  0px -10px 10px rgb(124, 54, 255) inset;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

.Btn::before {
  width: 70%;
  height: 2px;
  position: absolute;
  background-color: rgba(250, 250, 250, 0.678);
  content: "";
  filter: blur(1px);
  top: 7px;
  border-radius: 50%;
}

.Btn::after {
  width: 70%;
  height: 2px;
  position: absolute;
  background-color: rgba(250, 250, 250, 0.137);
  content: "";
  filter: blur(1px);
  bottom: 7px;
  border-radius: 50%;
}

.Btn:hover {
  animation: jello-horizontal 0.9s both;
}

@keyframes jello-horizontal {
  0% {
    transform: scale3d(1, 1, 1);
  }

  30% {
    transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    transform: scale3d(0.95, 1.05, 1);
  }

  75% {
    transform: scale3d(1.05, 0.95, 1);
  }

  100% {
    transform: scale3d(1, 1, 1);
  }
}

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(206, 19, 59, 0.1);
        }
        h1 {
            color: #333333;
            text-align: center;
        }
        p {
            color: #666666;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .footer {
            background-color: #ce1351;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            border-radius: 0 0 10px 10px;
        }
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <img src="https://i.pinimg.com/200x150/e5/fd/04/e5fd043638ecf0185100dcae3ada1ec0.jpg" alt="Logo de la aplicación" style="max-width: 60px;">
        <h1>¡Bienvenido al sistema!</h1>
        <img src="https://images.ctfassets.net/y6oq7udscnj8/4wxHPaivVX8IJWzBinto6H/24a37d10d666a66f5e5a5bd9e7cd46f4/Email_Marketing_4_-_Version_4.png?w=2048&h=960&q=50&fm=png" alt="Imagen de bienvenida" style="max-width: 80%;">
        <p>Hola,</p>
        <p>Bienvenido a nuestro sistema  de Papeleria. Esperamos que disfrutes de tu tiempo aquí.</p>
        <a href="{{ url('/login') }}" class="Btn">
           Iniciar sesion
        </a>
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} Sueños de carton
    </div>
</body>
</html>
