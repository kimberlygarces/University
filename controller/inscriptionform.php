  
<?php
require 'conexion.php';

   
   $sql = "INSERT INTO `infoestudiante`(`cedula`, `nombre`, `nacimiento`, `contacto`, `direccion`, `ciudad`, `correo`) VALUES 
   ('".$_POST['cedula']."', '".$_POST['nombre']."', '".$_POST['nacimiento']."','".$_POST['contacto']."','".$_POST['direccion']."','".$_POST['ciudad']."','".$_POST['correo']."')";
   $conn->query($sql);

   echo '<script language="javascript">alert("Registro Correcto");
   window.location.href="../models/formulario/forms.php?id='.$_POST['cedula'].'"</script>';


?>