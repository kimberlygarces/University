
<div class="col-sm-12">    
        <div class="table2 text-center">
        <table class="table  table-striped table-hover">
        <thead>
        <tr>
        <th >Cedula</th>
        <th> Nombre </th>
        <th> Nacimiento</th>
        <th>telefono </th>
        <th>Direccion </th>
        <th>Ciudad </th>
        <th>correo </th>
        </tr>      
    </thead>

    <tbody id="tbody">
        <?php

        $sql = "SELECT * FROM infoestudiante WHERE correo = '$user'";
        $resultado = $conn->query($sql);
          $ia = 0;
          while ($registro = $resultado->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $registro["cedula"] . '</td>';
            echo '<td>' . $registro["nombre"] . '</td>';
            echo '<td>' . $registro["nacimiento"] . '</td>';   
            echo '<td>' . $registro["contacto"] . '</td>';   
            echo '<td>' . $registro["direccion"] . '</td>'; 
            echo '<td>' . $registro["ciudad"] . '</td>';
            echo '<td>' . $registro["correo"] . '</td>';   
   

            echo '<td>
            <a href="forms.php?id='.$registro["cedula"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>';
            echo '<td>
            <a onclick="javascript: return confirm(\'Desea eliminar el registro actual?\')" href="../../controller/eliminarEstudiante.php?id='.$registro["cedula"].'">
            <i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>';
            echo '</tr>';

             echo '<td>
                    <a onclick="javascript: return confirm(\'Desea ver registro?\')" href="../../pdf.php?id='.$registro["cedula"].'"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>';
            echo '</tr>';
                }
              ?>

              </tbody>
                </table>
                      </div>