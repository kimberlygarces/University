
            <?php
	      	if(!empty($_GET["id"])){

            $sql2 = "SELECT * FROM infoestudiante WHERE cedula = '" . $_GET["id"] . "'";;
            $resultado2 = $conn->query($sql2);
              $ia = 0;
              while ($registro = $resultado2->fetch_assoc()) {
                
                echo" <section class='inscripcion__container--basi-information'>";

                echo "<form action='../../controller/editarEstuiante.php' method='post'>";
            
                echo" <div class='col-xs-12 col-4'>";
                echo" <label for='ex2'>Cedula</label>";
                echo "<input class='form-control'  type='text' name='cedula' readonly=»readonly» value='" . $registro['cedula'] ."' >";
                echo" </div>";

                echo" <div class='col-xs-12 col-md-4'>";
                echo" <label for='ex2'>Nombre</label>";
                echo "<input class='form-control'  type='text' name='nombre' value='" . $registro['nombre'] ."' >";
                echo" </div>";

                echo" <div class='col-xs-12 col-md-4'>";
                echo" <label for='ex2'>Fecha de nacimiento</label>";
                echo "<input class='form-control'  type='data' name='nacimiento' value='" . $registro['nacimiento'] ."' >";
                echo" </div>";

                echo" <div class='col-xs-12 col-md-4'>";
                echo" <label for='ex2'>Numero de telefonico</label>";
                echo "<input class='form-control'  type='text' name='contacto' value='" . $registro['contacto'] ."' >";
                echo" </div>";

                echo" <div class='col-xs-12 col-md-4'>";
                echo" <label for='ex2'>Dirección</label>";
                echo "<input class='form-control'  type='text' name='direccion' value='" . $registro['direccion'] ."' >";
                echo" </div>";

                echo" <div class='col-xs-12 col-md-4'>";
                echo" <label for='ex2'>Ciudad</label>";
                echo "<input class='form-control'  type='text' name='ciudad' value='" . $registro['ciudad'] ."' >";
                echo" </div>";

                echo" <div class='col-xs-12 col-md-4'>";
                echo" <label for='ex2'>Correo</label>";
                echo "<input class='form-control'  type='text' name='correo' value='" . $registro['correo'] ."' >";
                echo" </div>";   

                echo "<input type='submit' class='btn btn-primary' value='Guardar Cambios'>";
                echo"</from>";
                echo "</section>";



                    }}else{

                        echo"<form action='../../controller/inscriptionform.php' method='post' class='form-group'>";
                        echo"<br>";
                        echo" <section class='login__container--basi-information'>";
                        echo "<form action='../../controller/editarEstuiante.php' method='post'>";
   
                        echo" <div class='container-fluid' id='main-content'>";
                        echo" <div class='container'>";
                        echo"  <div class='row'>";
                        echo" <div class='col-xs-12 col-md-4'>";
                        echo" <label for='ex2'>Cedula</label>";
                        echo "<input class='form-control'  type='text' name='cedula' value='' >";
                        echo" </div>";

                        echo" <div class='col-xs-12 col-md-4'>";
                        echo" <label for='ex2'>Nombre</label>";
                        echo "<input class='form-control'  type='text' name='nombre' value='' >";
                        echo" </div>";

                        echo" <div class='col-xs-12 col-md-4'>";
                        echo" <label for='ex2'>Fecha de Nacimiento</label>";
                        echo "<input class='form-control'  type='data' name='nacimiento' value='' >";
                        echo" </div>";

                        echo" <div class='col-xs-12 col-md-4'>";
                        echo" <label for='ex2'>Numero telefonico</label>";
                        echo "<input class='form-control'  type='text' name='contacto' value='' >";
                        echo" </div>";

                        echo" <div class='col-xs-12 col-md-4'>";
                        echo" <label for='ex2'>Dirección</label>";
                        echo "<input class='form-control'  type='text' name='direccion' value='' >";
                        echo" </div>";

                        echo" <div class='col-xs-12 col-md-4'>";
                        echo" <label for='ex2'>Ciudad</label>";
                        echo "<input class='form-control'  type='text' name='ciudad' value='' >";
                        echo" </div>";

                        echo" <div class='col-xs-12 col-md-4'>";
                        echo" <label for='ex2'>Correo</label>";
                        echo "<input class='form-control'  type='text' name='correo' value='' >";
                        echo" </div>";
                        
                        echo" </div>";
                        echo"</div>";
                        echo"<br>";

                        echo "<input type='submit' class='btn btn-primary' value='Guardar Cambios'>";
                        echo"</from>";
                        echo "</section>";
                        
 
                     }
   
                     ?>