<?php

//1.contectarse al servidor mysql
        require 'conexion.php';

		//2.prepara una consulta sql
		echo $sql = "UPDATE `infoestudiante` SET nombre = '".$_POST["nombre"]."', nacimiento = '".$_POST["nacimiento"]."', contacto = '".$_POST["contacto"]."', direccion = '".$_POST["direccion"]."'
        , ciudad = '".$_POST["ciudad"]."', correo = '".$_POST["correo"]."'
                            WHERE cedula=".$_POST["cedula"];
                            

		$conn->query($sql);

        echo '<script language="javascript">alert("Registro Correcto");
        window.location.href="../models/formulario/forms.php?id='.'id'.'"</script>';


?>