  
<?php
require 'conexion.php';

// $sql = "SELECT * FROM `usuario` WHERE correo=1 " ;
// $resultado = $conn->query($sql);
// if(mysqli_num_rows($resultado)>0){

//     if(empty($resultado)){
//      }
//      else{
//         $contrasena=md5($_POST['Contrasena']);

//         $sql = "INSERT INTO `usuario`(`Id_Usuario`, `Nombre_Usuario`, `correo`, `Contrasena`) VALUES ('".$_POST['Id_Usuario']."', '".$_POST['Nombre_Usuario']."', '".$_POST['Correo']."','".$contrasena."')";
           
//         $conn->query($sql);

//      }
//    }
   
    $contrasena=md5($_POST['Contrasena']);

   $sql = "SELECT * FROM `usuario` WHERE correo=1 " ;
   $contrasena=md5($_POST['Contrasena']);
   $sql = "INSERT INTO `usuario`(`Id_Usuario`, `Nombre_Usuario`, `correo`, `Contrasena`) VALUES ('".$_POST['Id_Usuario']."', '".$_POST['Nombre_Usuario']."', '".$_POST['Correo']."','".$contrasena."')";
   $conn->query($sql);

   header("Location: ../models/iniciar-sesion/login.php");



?>