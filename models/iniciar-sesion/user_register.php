<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../assets/csslogin/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">

</head>

<body>
  <header class="header">

  
  </header>
    
    <section class="register">
        <section class="register__container">
            <h2>Registro de Usuario</h2>
            <form action="../../controller/registroUser.php" method="post" class="register__container--form">
 
                <input name="Nombre_Usuario"  class="input" type="text" placeholder="Nombre">
                <input  name="Correo" class="input" type="text" placeholder="correo">
                <input  name="Contrasena"class="input" type="password" placeholder="contraseña">
                <button type="submit" class="button">Registrar Usuario</button>  
            </form>
               
            <p class="register__container--register">No tienes ninguna cuenta <a href="login.php">Iniciar Sesión</a></p>
          </section>
        <footer class="footer">
            <a href="/">Términos de uso</a>
            <a href="/">Declaración de privacidad</a>
        </footer>
    </section>
</body>
</html>