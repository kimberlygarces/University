<?php
    require 'controller/conexion.php';

require('pdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage('PORTRAIL','letter');

class PDF extends FPDF
{
   //Cabecera de página
   function Header()
   {

       $this->Image('assets/img/6.jpg',10,8,30);

      $this->SetFont('Arial','B',12);

      $this->Cell(190,20,'Programming university',1,0,'C');

   }

   function Footer()
        {

        $this->SetY(-10);

        $this->SetFont('Arial','I',8);

        $this->Cell(0,10,'Bogota Colombia ',0,0,'C');
        }

}

//Creación del objeto de la clase heredada
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Ln(25);
$pdf->Cell(0,10,'Fecha: '.date('d-m-Y').'',0);
$pdf->Ln(10);
$pdf->Cell(48,48,'',0);
$pdf->SetFont('Times','B',15);
$pdf->Cell(100,10,utf8_decode("COMPROBANTE DE INSCRIPCIÓN"),0,0,'C');
$pdf->Ln(15);
$pdf->SetFont('Times','B',12);
$pdf->Cell(100,8,'DATOS BASICOS DEL ALUMNO',0);

 $sql = "SELECT * FROM infoestudiante WHERE infoestudiante.correo = '" . $_GET["id"] . "'";
 
        $resultado = $conn->query($sql);
        while ($registro = $resultado->fetch_assoc()) {
    $pdf->SetFont('Times','',12);
      $pdf->Ln(12);
   
      $pdf->Cell(60,8,"Cedula",1);
      $pdf->Cell(120,8,$registro['cedula'],1);
      $pdf->Ln();
      $pdf->Cell(60,8,"Nombres ",1);
      $pdf->Cell(120,8,$registro['nombre'],1);
      $pdf->Ln();
      $pdf->Cell(60,8,"Fecha de Nacimiento ",1);
      $pdf->Cell(120,8,$registro['nacimiento'],1);
      $pdf->Ln();
      $pdf->Cell(60,8,"Numero de telefono ",1);
      $pdf->Cell(120,8,$registro['contacto'],1);
      $pdf->Ln();
      $pdf->Cell(60,8,"Correo Electronico",1);
      $pdf->Cell(120,8,$registro['correo'],1);
      $pdf->Ln();
      $pdf->Cell(60,8,utf8_decode("Dirección de residencia "),1);
      $pdf->Cell(120,8,$registro['direccion'],1);
      $pdf->Ln();
      $pdf->Cell(60,8,utf8_decode("Ciudad de residencia "),1);
      $pdf->Cell(120,8,$registro['ciudad'],1); 
       $pdf->Ln(12);
    }
    $pdf->SetFont('Times','B',12);
    $pdf->Cell(100,8,'DATOS FAMILIARES',0);
    $sql = "SELECT * FROM formfamiliar WHERE formfamiliar.user = '" . $_GET["id"] . "'";
 
        $resultado = $conn->query($sql);
        while ($registro = $resultado->fetch_assoc()) {
      $pdf->SetFont('Times','',12);
      $pdf->Ln(12);
      $pdf->Cell(60,8,"Nombre del Padre",1);
      $pdf->Cell(120,8,$registro['nompadre'],1);
      $pdf->Ln();
      $pdf->Cell(60,8,"Nombre de la Madre ",1);
      $pdf->Cell(120,8,$registro['nomMadre'],1);
      $pdf->Ln();
      $pdf->Cell(60,8,"Telefono Familiar ",1);
      $pdf->Cell(120,8,$registro['telFamiliar'],1);
      $pdf->Ln();
      $pdf->Cell(60,8,utf8_decode("Ocupación del Padre "),1);
      $pdf->Cell(120,8,$registro['ocupacionMadre'],1);
      $pdf->Ln();
      $pdf->Cell(60,8,utf8_decode("Ocupación de la Madre "),1);
      $pdf->Cell(120,8,$registro['ocupacionPadre'],1);
        $pdf->Ln();
        }


        $pdf->Ln(35);
        $pdf->Image('assets/img/c.png',150,250,50);
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(100,8,'______________________________',0);
        $pdf->Ln();
        $pdf->Cell(100,8,'Firma',0);

$pdf->Output(); ?>
