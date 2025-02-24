<?php

$pdf = new FPDF("L", "mm", "legal");

$pdf->AliasNbPages();
$pdf->AddPage();


//ENCABEZADO DE LA PLANTILLA PDF
$pdf->Image('../Vista/imagenes/logo_meta.png', 15, 10, 43);
$pdf->Image('../Vista/imagenes/logo.png', 300, 8, 43);
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetX(65);
$pdf->Cell(230, 10, 'DEPARTAMENTO DEL META ', 1, 1, 'C', 0);
$pdf->SetX(65);
$pdf->Cell(230, 10, 'Secretaria de Educacion Departamental - Municipo de Guamal - Meta', 1, 1, 'C', 0);
$pdf->SetX(65);
$pdf->Cell(230, 10, 'CENTRO EDUCATIVO RURAL NICOLAS DE FEDERMAN', 1, 1, 'C', 0);
$pdf->Ln(16);
$pdf->SetX(45);
$pdf->Cell(270, 10, 'LISTA DE ACUDIENTES', 1, 1, 'C', 0);
$pdf->Cell(337, 10, "Fecha: " . date("d/m/y"), 0, 1, "C");
$pdf->Ln(5);


//ENCABEZADO DE LA TABLA
$pdf->SetX(40);
$pdf->Cell(30, 5, "Codigo", 1, 0, "C");
$pdf->Cell(30, 5, "Identificacion", 1, 0, "C");
$pdf->Cell(30, 5, "Nombre", 1, 0, "C");
$pdf->Cell(30, 5, "Apellido", 1, 0, "C");
$pdf->Cell(60, 5, "Direccion", 1, 0, "C");
$pdf->Cell(40, 5, "Telefono", 1, 0, "C");
$pdf->Cell(60, 5, "Correo", 1, 1, "C");


//OBTERNER DATOS DE LA TABLA
$pdf->SetFont("Arial", "", 9);
while ($fila = $datos->fetch_assoc()) {
    $pdf->SetX(40);
    $pdf->Cell(30, 5, $fila ['codacudiente'], 1, 0, "L");
    $pdf->Cell(30, 5, $fila ['idpersona'], 1, 0, "L");
    $pdf->Cell(30, 5, $fila ['pernombre'], 1, 0, "L");
    $pdf->Cell(30, 5, $fila ['perapellido'], 1, 0, "L");
    $pdf->Cell(60, 5, $fila ['perdireccion'], 1, 0, "L");
    $pdf->Cell(40, 5, $fila ['pertelefono'], 1, 0, "L");
    $pdf->Cell(60, 5, $fila ['percorreo'], 1, 1, "L");
}


//VISUALIZAR PDF
$pdf->Output();
