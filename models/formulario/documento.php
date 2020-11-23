



        
        <?php

        $sql = "SELECT * FROM infoestudiante WHERE correo = '$user'";
        $resultado = $conn->query($sql);
          $ia = 0;
          while ($registro = $resultado->fetch_assoc()) {
         
             echo '<td>
             <a onclick="javascript: return confirm(\'Desea ver registro?\')" href="../../pdf.php?id='.$registro["correo"].'">
             Generar Documento 
             <i class="fas fa-file-alt"></i></a>';
          echo '</td>';
    

           

 
             
                }
              ?>

          