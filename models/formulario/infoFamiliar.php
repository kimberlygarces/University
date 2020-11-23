
            <?php

if(!empty($_GET["id"])){

  $sql2 = "SELECT * FROM formfamiliar WHERE id = '" . $_GET["id"] . "'";;
  $resultado2 = $conn->query($sql2);
    $ia = 0;

    while ($registro = $resultado2->fetch_assoc()) {
      
      echo" <section class='inscripcion__container--basi-information'>";
      
      echo "<form action='../../controller/editarFamilia.php' method='post'>";
      echo" <div class='container-fluid' id='main-content'>";
      echo" <div class='container'>";
      echo"  <div class='row'>";
  
      echo "<input class='form-control'  type='hidden' name='id' value='" . $registro['id'] ."'' >";

      echo" <div class='col-xs-12 col-md-4'>";
      echo" <label for='ex2'>Nombre del padre</label>";
      echo "<input class='form-control'  type='text' name='nompadre' value='" . $registro['nompadre'] ."' >";
      echo" </div>";

      echo" <div class='col-xs-12 col-md-4'>";
      echo" <label for='ex2'>Nombre de la madre</label>";
      echo "<input class='form-control'  type='data' name='nomMadre' value='" . $registro['nomMadre'] ."' >";
      echo" </div>";

      echo" <div class='col-xs-12 col-md-4'>";
      echo" <label for='ex2'>Numero de telefonoFamiliar</label>";
      echo "<input class='form-control'  type='text' name='telFamiliar' value='" . $registro['telFamiliar'] ."' >";
      echo" </div>";

      echo" <div class='col-xs-12 col-md-4'>";
      echo" <label for='ex2'>ocupacionMadre</label>";
      echo "<input class='form-control'  type='text' name='ocupacionMadre' value='" . $registro['ocupacionMadre'] ."' >";
      echo" </div>";

      echo" <div class='col-xs-12 col-md-4'>";
      echo" <label for='ex2'>ocupacionPadre</label>";
      echo "<input class='form-control'  type='text' name='ocupacionPadre' value='" . $registro['ocupacionPadre'] ."' >";
      echo" </div>";

    

      echo" </div>";
      echo"<br>";
      echo "<input type='submit' class='btn btn-primary' value='Guardar Cambios'>";
      
    
      echo"<br>";
      echo"<br>";
      echo"<br>";
      echo"<br>";
      echo"</from>";
      echo "</section>";



          }}else{

              echo"<form action='../../controller/formFamiliar.php' method='post' class='form-group'>";
              echo"<br>";

              echo" <section class='login__container--basi-information'>";
              echo "<form action='../../controller/editarEstuiante.php' method='post'>";
              
              echo" <div class='container-fluid' id='main-content'>";
              echo" <div class='container'>";
              echo"  <div class='row'>";
              echo "<input class='form-control'  type='hidden' name='id' value='' >";

              echo" <div class='col-xs-12 col-md-4'>";
              echo" <label for='ex2'>Nombre del Padre</label>";
              echo "<input class='form-control'  type='text' name='nompadre' value='' >";
              echo" </div>";

              echo" <div class='col-xs-12 col-md-4'>";
              echo" <label for='ex2'>Nombre de la madre</label>";
              echo "<input class='form-control'  type='data' name='nomMadre' value='' >";
              echo" </div>";

              echo" <div class='col-xs-12 col-md-4'>";
              echo" <label for='ex2'>Telefono Familiar</label>";
              echo "<input class='form-control'  type='text' name='telFamiliar' value='' >";
              echo" </div>";

              echo" <div class='col-xs-12 col-md-4'>";
              echo" <label for='ex2'>Ocupación de la Madre</label>";
              echo "<input class='form-control'  type='text' name='ocupacionMadre' value='' >";
              echo" </div>";

              echo" <div class='col-xs-12 col-md-4'>";
              echo" <label for='ex2'>Ocupacion del Padre</label>";
              echo "<input class='form-control'  type='text' name='ocupacionPadre' value='' >";
              echo" </div>";

              echo" <div class='col-xs-12 col-md-4'>";
              echo "<input class='form-control'  type='hidden' name='user' value='$user' >";
              echo" </div>";

              echo" </div>";
              echo"<br>";
              echo "<input type='submit' class='btn btn-primary' value='Guardar'>";
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

$sql = "SELECT * FROM formfamiliar  WHERE user = '$user'";
$resultado = $conn->query($sql);
$ia = 0;
while ($registro = $resultado->fetch_assoc()) {

  echo" <div class='alert alert-warning' role='alert'>";
  echo" Usuario Registrado Correctamente";
  echo" </div>";
  echo' <table class="table table-dark">';
  echo' <thead>';
  echo'  <tr>';
  echo'  <th scope="col">Nombre del Padre</th>';
  echo'  <th scope="col">Nombre de la Madre</th>';
  echo'  <th scope="col">Telefono Familiar</th>';
  echo'  <th scope="col">Ocupación de la Madre</th>';
  echo'  <th scope="col">Ocupación del Padre</th>';
  echo'  </tr>';
  echo'</thead>';
  echo' <tbody>';
  // echo '<td>' . $registro["id"] . '</td>';
  echo '<td>' . $registro["nompadre"] . '</td>';
  echo '<td>' . $registro["nomMadre"] . '</td>';
  echo '<td>' . $registro["telFamiliar"] . '</td>';   
  echo '<td>' . $registro["ocupacionMadre"] . '</td>'; 
  echo '<td>' . $registro["ocupacionPadre"] . '</td>';
  // echo '<td>' . $registro["user"] . '</td>';


  echo '<td>
  <a href="inscripcion.php?id='.$registro["id"].'">
  <i class="fas fa-edit"></i></a>
  </td>';

  echo '<td>
  
  <a onclick="javascript: return confirm(\'Desea eliminar el registro actual?\')" href="../../controller/eliminarFamila.php?id='.$registro["id"].'">
  <i class="fa fa-trash" aria-hidden="true"></i></a>
  </td>';


  echo '<td>
   <a onclick="javascript: return confirm(\'Desea ver registro?\')" href="../../pdf.php?id='.$registro["id"].'">
  <i class="fas fa-file-alt"></i></a>';
  echo '</td>';
          
  echo' </div>';
  echo' </div>';
  echo'</tbody>';
  echo' </table>';
  echo '<a class="btn btn-danger" href="inscripcion.php">Finalizar Registro</a>';
   
      }
    ?>

    </tbody>
      </table>
            </div>


