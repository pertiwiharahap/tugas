<?php
    include "koneksi.php";
    $Lapor = "SELECT NIM,jurusan,id_nilai,nilai_ujian,taggal_ujian,ukm,keterangan FROM laporan_nilai ORDER by NIM";
    $Hasil = mysql_query($Lapor);
    $Data = array();
    while($row mysqli_fetch_array($Hasil)){
        array_push($Data, $row);
    }
    $Judul = "Data Siswa";
    $tgl= "Time : ".date("l, d F Y");
    $Header= array(
        array("label"=>"NIM", "length"=>20, "align"=>"L"),
        array("label"=>"jurusan", "length"=>60, "align"=>"L"),
        array("label"=>"id_nilai", "length"=>40, "align"=>"L"),
        array("label"=>"nilai_ujian", "length"=>33, "align"=>"L"),
        array("label"=>"taggal_ujian", "length"=>30, "align"=>"L"),
		array("label"=>"ukm", "length"=>32, "align"=>"L"),
		array("label"=>"keterangan", "length"=>36, "align"=>"L"),
    );
   
    $pdf = new FPDF();
    $pdf->AddPage('P','A4','C');
    $pdf->SetFont('arial','B','15');
    $pdf->Cell(0, 15, $Judul, '0', 1, 'C');
    $pdf->SetFont('arial','i','9');
    $pdf->Cell(0, 10, $tgl, '0', 1, 'P');
    $pdf->SetFont('arial','','12');
    $pdf->SetFillColor(190,190,0);
    $pdf->SetTextColor(255);
    $pdf->setDrawColor(128,0,0);
    foreach ($Header as $Kolom){
        $pdf->Cell($Kolom['length'], 8, $Kolom['label'], 1, '0', $Kolom['align'], true);
    }
    $pdf->Ln();
    $pdf->SetFillColor(244,235,255);
    $pdf->SettextColor(0);
    $pdf->SetFont('arial','','10');
    $fill =false;
    foreach ($Data as $Baris){
        $i= 0;
        foreach ($Baris as $Cell){
            $pdf->Cell ($Header[$i]['length'], 7, $Cell, 2, '0', $Kolom['align'], $fill);
            $i++;
        }
        $fill = !$fill;
        $pdf->Ln();
    }
    $pdf->Output();
?>