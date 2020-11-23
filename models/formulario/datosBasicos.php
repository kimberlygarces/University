
           <?php
	      	if(!empty($_GET["id"])){

            $sql2 = "SELECT * FROM infoestudiante WHERE cedula = '" . $_GET["id"] . "'";
            $resultado2 = $conn->query($sql2);
              $ia = 0;
              while ($registro = $resultado2->fetch_assoc()) {
                
                echo" <section class='login__container--basi-information'>";
                echo "<form action='../../controller/editarEstuiante.php' method='post'>";
                echo" <div class='container-fluid' id='main-content'>";
                     echo" <div class='container'>";
                     echo"  <div class='row'>";

                echo" <div class='col-xs-12 col-md-4'>";
                echo" <label for='ex2'>Cedula</label>";
                echo "<input class='form-control'  type='text' name='cedula' readonly=»readonly» value='" . $registro['cedula'] ."'  >";
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
                echo "<input class='form-control'  type='text' name='correo' name='correo'readonly=»reado value='" . $registro['correo'] ."' >";
                echo" </div>";

                echo" </div>";
                echo"<br>";
                echo "<input type='submit' class='btn btn-primary' value='Guardar Cambios'>";
                echo '<br>';
                echo '<br>';
                
                echo"<br>";
                echo"<br>";
                echo"</from>";
                echo "</section>";

                    }}
                    else{
                     echo"<form action='../../controller/inscriptionform.php' method='post' class='form-group'>";

                     echo"<br>";

                     echo" <section class='login__container--basi-information'>";
                     echo "<form action='../../controller/editarEstuiante.php' method='post'>";
                    
                     echo" <div class='container-fluid' id='main-content'>";
                     echo" <div class='container'>";
                     echo"  <div class='row'>";

                     echo" <div class='col-xs-12 col-md-4'>";
                     echo" <label for='ex2'>Cedula</label>";
                     echo "<input class='form-control'  type='text' name='cedula' required value='' >";
                     echo" </div>";

                     echo" <div class='col-xs-12 col-md-4'>";
                     echo" <label for='ex2'>Nombre</label>";
                     echo "<input class='form-control'  type='text' name='nombre' required value='' >";
                     echo" </div>";

                     echo" <div class='col-xs-12 col-md-4'>";
                     echo" <label for='ex2'>Fecha de Nacimiento</label>";
                     echo "<input class='form-control'  type='date' name='nacimiento' required value='' >";
                     echo" </div>";

                     echo" <div class='col-xs-12 col-md-4'>";
                     echo" <label for='ex2'>Numero telefonico</label>";
                     echo "<input class='form-control'  type='text' name='contacto' required value='' >";
                     echo" </div>";

                     echo" <div class='col-xs-12 col-md-4'>";
                     echo" <label for='ex2'>Dirección</label>";
                     echo "<input class='form-control'  type='text' name='direccion' required value='' >";
                     echo" </div>";

                     echo" <div class='col-xs-12 col-md-4'>";
                     echo" <label for='ex2'>Ciudad</label>";
                     echo "<input class='form-control'  type='text' name='ciudad' required value='' >";
                     echo" </div>";

                     echo" <div class='col-xs-12 col-md-4'>";
                     echo" <label for='ex2'>Correo</label>";
                     echo "<input class='form-control'  type='text' name='correo'readonly=»reado value='$user' >";
                     echo" </div>";

                    //  echo" <div class='col-xs-12 col-md-4'>";
                    //  echo" <label for='ex2'>Correo</label>";
                    //  echo "<input class='form-control'  type='text' name='userId'readonly=»reado value='$userId'>";
                    //  echo" </div>";

                    echo" </div>";
                    echo"<br>";
                    echo "<input type='submit' class='btn btn-primary' href='forms.php?id='' value='Guardar'>";
                    echo"<br>";
                    echo"<br>";
                    echo"<br>";
                    echo"</div>";
                       echo"</from>";
                      echo "</section>";
             
                   

                    }

                  ?>

        <div class="table2 text-center">

        <?php

        $sql = "SELECT * FROM infoestudiante WHERE correo = '$user'";
        $resultado = $conn->query($sql);
          $ia = 0;
          while ($registro = $resultado->fetch_assoc()) {
            
            echo" <div class='alert alert-warning' role='alert'>";
            echo" Usuario Registrado Correctamente";
            echo" </div>";
            echo' <table class="table table-dark">';
            echo' <thead>';
            echo'  <tr>';
            echo'  <th scope="col">Cedula</th>';
            echo'  <th scope="col">Nombre</th>';
            echo'  <th scope="col">Fecha de Nacimiento</th>';
            echo'  <th scope="col">Dirección</th>';
            echo'  <th scope="col">Celular</th>';
            echo'  <th scope="col">Ciudad de residencia </th>';
            echo'  </tr>';
            echo'</thead>';
            echo' <tbody>';

            echo '<td>' . $registro["cedula"] . '</td>';
            echo '<td>' . $registro["nombre"] . '</td>';
            echo '<td>' . $registro["nacimiento"] . '</td>';   
            echo '<td>' . $registro["contacto"] . '</td>';   
            echo '<td>' . $registro["direccion"] . '</td>'; 
            echo '<td>' . $registro["ciudad"] . '</td>';
            echo '<td>
            <a href="forms.php?id='.$registro["cedula"].'">
            <i class="fas fa-edit"></i></a>
            </td>';

            echo '<td>
            
            <a onclick="javascript: return confirm(\'Desea eliminar el registro actual?\')" href="../../controller/eliminarEstudiante.php?id='.$registro["cedula"].'">
            <i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>';
          

             echo '<td>
             <a onclick="javascript: return confirm(\'Desea ver registro?\')" href="../../pdf.php?id='.$registro["cedula"].'">
            <i class="fas fa-file-alt"></i></a>';
            echo '</td>';
                    
             echo' </div>';
             echo' </div>';
             echo' </div>';
             echo'</tbody>';
             echo' </table>';
             echo '<a class="btn btn-dark" href="inscripcion.php">Continuar Registro</a>';


                }
              ?>



                     