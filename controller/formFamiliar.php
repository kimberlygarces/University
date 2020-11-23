<?php
require 'conexion.php';

  

   $sql = "INSERT INTO `formFamiliar`(`id`, `nompadre`, `nomMadre`, `telFamiliar`, `ocupacionMadre`, `ocupacionPadre`, `user`) 
   VALUES ('".$_POST['id']."', '".$_POST['nompadre']."', '".$_POST['nomMadre']."','".$_POST['telFamiliar']."','".$_POST['ocupacionMadre']."','".$_POST['ocupacionPadre']."','".$_POST['user']."')";
   $conn->query($sql);

   echo '<script language="javascript">alert("Registro Correcto");
   window.location.href="../models/formulario/inscripcion.php?id='.'id'.'"</script>';



?>