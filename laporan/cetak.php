<?php 

include "fpdf.php";
include "../functions/koneksi.php";

$sheetpdf = new FPDF();
$sheetpdf->AddPage();

$sheetpdf->SetFont('Arial','B',16);
$sheetpdf->cell(0,5,'GLOBAL AUTO SALES','0','1','C', false);
$sheetpdf->SetFont('Arial','i', 8);
$sheetpdf->Cell(0,5,'Chinden Boulevard 5225 W Garden City BSD South Tangerang','0','1','C', false);
$sheetpdf->Cell(0,2,'Created by Rachman Forniandi. Courtesy http://yukcoding.blogspot.com','0','1','C',false);
$sheetpdf->Ln(3);
$sheetpdf->Cell(190,0.6,'','0','1','C',true);
$sheetpdf->Ln(5);

$sheetpdf->SetFont('Arial','B',9);
$sheetpdf->Cell(50,5,'Data Report Car','0','1','L',false);
$sheetpdf->Ln(3);

$sheetpdf->SetFont('Arial','B',7);
$sheetpdf->Cell(8,6,'No.',1,0,'C');
$sheetpdf->Cell(35,6,'Kode Mobil',1,0,'C');
$sheetpdf->Cell(37,6,'Merk Mobil',1,0,'C');
$sheetpdf->Cell(35,6,'Type Mobil',1,0,'C');
$sheetpdf->Cell(35,6,'Warna Mobil',1,0,'C');
$sheetpdf->Cell(40,6,'Harga Mobil',1,0,'C');
$sheetpdf->Ln(2);
$no = 0;
$sql = mysqli_query($koneksi, "SELECT * FROM tbl_mobil ORDER BY kode_mobil ASC");
while ($data =mysqli_fetch_array($sql)) {
	$no++;
	$sheetpdf->Ln(4);
	$sheetpdf->SetFont('Arial','',7);
	$sheetpdf->Cell(8,4,$no.".",1,0,'C');
	$sheetpdf->Cell(35,4,$data['kode_mobil'],1,0,'L');
	$sheetpdf->Cell(37,4,$data['merk'],1,0,'L');
	$sheetpdf->Cell(35,4,$data['type'],1,0,'L');
	$sheetpdf->Cell(35,4,$data['warna'],1,0,'L');
	$sheetpdf->Cell(40,4,$data['harga'],1,0,'R');
}

$sheetpdf->Output();

?>