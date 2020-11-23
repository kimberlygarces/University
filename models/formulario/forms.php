<?php
require '../../controller/conexion.php';

session_start();
$user=$_SESSION['usuario'];


if (!isset($_SESSION['usuario'])) {
    header("location:../../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Inscripción</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../assets/cssform/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js  "></script>

</head>


<div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Programming university </h3>
            </div>

            <ul class="list-unstyled components">
                <p>Bienvenido</p>
                <li class="active">
                <a  href="inscripcion.php"  onclick="quienesSomos() ">Quienes somos</a>

                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Inscripcion</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="forms.php">Datos basicos</a>
                        </li>
                        <li>
                            <a href="inscripcion.php">Información familiar</a>
                        </li>
                        <li>
                        <a href="#" onclick="error()">Información técnica</a>
                        </li>
                    </ul>
                </li>
                <li>
                <?php
                        require('documento.php')
                    ?>
                 </li>

                <li>
                    <a href="#" onclick="error()">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <!-- <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a> -->
                </li>
                <li>
                    <a href="www.linkedin.com/in/kimberlygarcésperéz-0b4b775b" class="article">linkedin</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <i class="fas fa-user " style='font-size:48px' ></i>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo '<p>'."  ".$user. '</p>';?>
                                </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="../iniciar-sesion/login.php">Salir</p></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="formulario" id="formulario">
            <?php
                require('../../view/quienesSomos.php')
            ?>    
             </section>

            <section class="formulario" id="formulario" >
            <div class="alert alert-warning" role="alert">
            Información Basica Del Estudiante            
            </div>
            <?php
                require('datosBasicos.php')
            ?>
             </section>
           
            <footer class="footer">
            <a href="/">Términos de uso</a>
            <a href="/">Declaración de privacidad</a>
        </footer>

        
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });    
        
        function error(){
            
        swal(':( Lo sentimos!!', `Estamos en mantenimiento`, 'error')

            }


    </script>
</body>
</html>
