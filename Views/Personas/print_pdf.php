<?php
$pdf = new \AppData\Config\libs\fpdf\fpdf();
$pdf->AddPage();
//Header
$pdf->SetFont('Arial','B',10);
$pdf->Cell(2);
$pdf->Ln();
$pdf->Cell(190,10,'Personas Registradas',0,0,'C');
$pdf->ln();
$pdf->Cell(100,10,'EDOMEX',0,0,'C');
$pdf->Cell(110,10,date('d/m/y'),0,0,'C');
$pdf->ln();
$pdf->Cell(100,10,'Hora',0,0,'C');
date_default_timezone_set('america/mexico_city');
$pdf->Cell(110,10,date( 'H:i:s'),0,0,'C');


$pdf->ln();
$pdf->Cell(100,10,'Registro de usuarios',0,0,'C');
$pdf->Cell(110,10,$_SESSION["nickname"],0,0,'C');
$pdf->ln();

$pdf->SetFillColor(0, 220, 255);
$pdf->SetX(25);
$pdf->Cell(27,10,utf8_decode('Nombre'),1,0,'C',true);
$pdf->Cell(27,10,utf8_decode('Apellido'),1,0,'C',true);
$pdf->Cell(27,10,utf8_decode('Apellido'),1,0,'C',true);
$pdf->Cell(25,10,utf8_decode('Usario'),1,0,'C',true);
$pdf->Cell(25,10,utf8_decode('Sexo'),1,0,'C',true);
$pdf->Cell(20,10,utf8_decode('Edad'),1,0,'C',true);

$pdf->SetFillColor(255,255, 255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
while($row=mysqli_fetch_row($datos))
{
    $pdf->ln();
    $pdf->SetX(25);
    $pdf->Cell(27,8,utf8_decode($row[1]),1,0,'C',true);
    $pdf->Cell(27,8,utf8_decode($row[2]),1,0,'C',true);
    $pdf->Cell(27,8,utf8_decode($row[3]),1,0,'C',true);
    $pdf->Cell(25,8,utf8_decode($row[4]),1,0,'C',true);
    $pdf->Cell(25,8,utf8_decode($row[5]),1,0,'C',true);
    $pdf->Cell(20,8,utf8_decode($row[6]),1,0,'C',true);


}

//Footer
$pdf->SetY(255);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'Carretera Federal Valle de Bravo Km 30, Ejido San Antonio Laguna,',0,0,'C');
$pdf->SetY(260);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'51200 Valle de Bravo, Méx. Page. '.$pdf->PageNo(),0,0,'C');
$pdf->Output();

