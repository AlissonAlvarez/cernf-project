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
$pdf->Cell(270, 10, 'LISTA DE MATRICULAS', 1, 1, 'C', 0);
$pdf->Cell(337, 10, "Fecha: " . date("d/m/y"), 0, 1, "C");
$pdf->Ln(5);


//ENCABEZADO DE LA TABLA
$pdf->SetX(34);
$pdf->Cell(20, 5, "Codigo", 1, 0, "C");
$pdf->Cell(30, 5, "Identificacion", 1, 0, "C");
$pdf->Cell(30, 5, "Nombre", 1, 0, "C");
$pdf->Cell(30, 5, "Apellido", 1, 0, "C");
$pdf->Cell(25, 5, "Numero", 1, 0, "C");
$pdf->Cell(25, 5, "Fecha", 1, 0, "C");
$pdf->Cell(25, 5, "Vigencia", 1, 0, "C");
$pdf->Cell(45, 5, "Sede", 1, 0, "C");
$pdf->Cell(25, 5, "Grado", 1, 0, "C");
$pdf->Cell(35, 5, "Curso", 1, 1, "C");

//OBTERNER DATOS DE LA TABLA
$pdf->SetFont("Arial", "", 9);
while ($fila = $datos->fetch_assoc()) {
    $pdf->SetX(34);
    $pdf->Cell(20, 5, $fila ['codmatricula'], 1, 0, "C");
    $pdf->Cell(30, 5, $fila ['estidpersona'], 1, 0, "C");
    $pdf->Cell(30, 5, $fila ['pernombre'], 1, 0, "C");
    $pdf->Cell(30, 5, $fila ['perapellido'], 1, 0, "C");
    $pdf->Cell(25, 5, $fila ['matnumero'], 1, 0, "C");
    $pdf->Cell(25, 5, $fila ['matfecha'], 1, 0, "C");
    $pdf->Cell(25, 5, $fila ['matanovigencia'], 1, 0, "C");
    $pdf->Cell(45, 5, $fila ['sednombre'], 1, 0, "C");
    $pdf->Cell(25, 5, $fila ['granombre'], 1, 0, "C");
    $pdf->Cell(35, 5, $fila ['curnombre'], 1, 1, "C");
}


//VISUALIZAR PDF
$pdf->Output();
