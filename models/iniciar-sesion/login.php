<!DOCTYPE html>
<html lang="en">
<head>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../assets/csslogin/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
 
  <title>Iniciar sesión</title>

</head>
<body>
  <header class="header">
  
    </header>
    
    <section class="login">
        <section class="login__container">
            <h2 tabindex="0" >Inicia sesión</h2>

            <form action="../../controller/loginusuarioverificar.php" method="post" class="register__container--form">
 
              <input  name="Correo" class="input" type="text" placeholder="correo">
              <input  name="Contrasena"class="input" type="password" placeholder="contraseña">
              <button type="submit" class="button">Registrar Usuario</button>  
              </form>
                <!-- <section class="login__container--social-media">
                    
                    <div> <img  class="login__container--social-media--img" src="../assets/google.png" alt="Google">Iniciar seción con Google</div>
                    <div> <img class="login__container--social-media--img"src="../assets/twitter.png" alt="Twitter">Iniciar seción con Twitter</div>
               
                </section> -->
                <p class="login__container--register">No tienes ninguna cuenta <a href="user_register.php">Registrarse</a></p>
        </section>
        <footer class="footer">
            <a href="/">Términos de uso</a>
            <a href="/">Declaración de privacidad</a>
        </footer>
    </section>
</body>
</html>