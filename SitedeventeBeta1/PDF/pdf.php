<?php
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
// Titres des colonnes

// Chargement des données
//$data = $pdf->LoadData('test.txt');
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,'My pdf page', 1);


$pdf->Output();
?>