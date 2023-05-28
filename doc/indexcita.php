<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	
    // Arial bold 15
    $this->SetFont('Courier','B',16);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(90,10,'Listado de Clientes ',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(30,10,'Nombre',1,0,'C',0);
	$this->Cell(30,10,utf8_decode('Cédula'),1,0,'C',0);
	$this->Cell(40,10,utf8_decode('Dirección'),1,0,'C',0);
	$this->Cell(60,10,'Correo',1,0,'C',0);
    $this->Cell(30,10,utf8_decode('Teléfono'),1,1,'C',0);

    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
}
}

require ("cn.php");
$consulta = "SELECT * FROM cliente";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Courier','',10);

while ($row=$resultado->fetch_assoc()) {
	$pdf->Cell(30,10,$row['nombre_cli'],1,0,'C',0);
	$pdf->Cell(30,10,$row['cedula_cli'],1,0,'C',0);
	$pdf->Cell(40,10,$row['direccion_cli'],1,0,'C',0);
    $pdf->Cell(60,10,$row['correo_cli'],1,0,'C',0);
	$pdf->Cell(30,10,$row['telefono_cli'],1,1,'C',0);
} 
	$pdf->Output();
?>