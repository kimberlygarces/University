<?php
require 'conexion.php';
session_start();
if (isset($_SESSION['usuario'])) {
   // header("Location: ../iniciar-sesion/user_register.php");

}
if (!isset($_POST['Correo']) || !isset($_POST['Contrasena'])) {
    header("Location: ../iniciar-sesion/user_register.php");
   echo "rayos";
}

$correo = $_POST['Correo'];

// var_dump($_REQUEST);
// var_dump($_SESSION);

$pass = $_POST['Contrasena'];
// echo $pass;
// echo $correo;

// echo $id."<br>";
// echo $pass."<br>";
$pass=md5($pass);
// echo $pass."<br><br>";
$resultado = $conn->query('SELECT * FROM usuario WHERE ( correo = "'.$correo.'" AND contrasena = "'.$pass.'")');
$filas = $resultado->num_rows;

$registro = $resultado->fetch_assoc();



if ($filas == !0) {
    
    // echo "num filas:  ".$filas."<br>";
    $_SESSION['usuario'] = $correo;
    
    $user = $registro['Id_Usuario'];
    // echo "here";
    // echo "Sesion:  ".$_SESSION."<br>";
    
    echo '<script language="javascript">alert("Usuario Correcto");
    window.location.href="../models/formulario/forms.php"</script>';  
                      
//    echo '<script language="javascript">alert("Usuario Correcto");
//    window.location.href="../models/formulario/forms.php?id='.$registro['Id_Usuario'].'"</script>';
    
} else {
    // header('location:index.php?ci');

    echo '<script language="javascript">alert("Error de autentificacion");
    window.location.href="../index.html"</script>';

    
}

$conn->close();

?>

