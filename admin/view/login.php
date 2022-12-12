<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/landing.css">

    <title>Login</title>
</head>

<body>
<div class="container" id="container">

<div class="form-container crear-container">
    
    
  
    <form action="" method="POST">
        <h1>Crear cuenta</h1>
        <span>Registrare para difrutar de una experiencia unica</span>
        <input type="text" placeholder="Nombre" name="Nombre" />
        <input type="email" placeholder="Email" name="Usuario"  autocomplete="off" />
        <input type="password" placeholder="Contraseña" name="Contraseña"  autocomplete="off"/>
        <input type="password" placeholder="Confirmar" name="Confirmar" />
        <button type="submit">Crear cuenta</button>
    </form>

</div>
<div class="form-container login-container">
  
  
    <form action="" method="post">
        <h1>Iniciar sesion</h1>
        <span>Ingresa tu cuenta</span>
        <input type="email" placeholder="Email" name="Email" autocomplete="off"/>
        <input type="password" placeholder="Contraseña" name="password" autocapitalize="off" />
        <a href="#">has olvidado tu contraseña?</a>
        <button type="submit">Iniciar</button>
    </form>
</div>
<div class="overlay-container">
    <div class="overlay">
        <div class="overlay-panel overlay-left">
            <h1>Unete a nuestra familia</h1>
            <p>“Ahora seras parte de nuestra gran familia”.
                <br>
                Hacienda puerta del cielo
            </p>
            <button class="ghost" id="signIn">Iniciar</button>
        </div>
        <div class="overlay-panel overlay-right">
            <h1>Hola, te damos una bienvenida calurosa!</h1>
            <p>“En algún lugar de un Hotel Hacienda Puerta del cielo, hay una experiencia para darle sentido a la existencia”.
                <br>
                Cervantes
            </p>
            <button class="ghost" id="signUp">crear</button>
        </div>
    </div>
</div>
</div>

    <footer>
        <p>
            Hotel Hacienda Puerta del cielo
        </p>
    </footer>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="../assets/js/login.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</html>