<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$umur = $_POST['umur'];

$dataedit = $nama  . "|F|" . 
        $email . "|F|" .
        $phone . "|F|".
        $umur . "[R]";
$file = "data.txt";
$data = file_get_contents($file);
$databaru="";
$row=$_POST['row'];
$baris = explode("[R]", $data);
for($i = 0; $i<count($baris)-1; $i++) {
 if($i == $row){
 	$databaru .= $dataedit;
    	continue;} 
 	
$databaru .= $baris[$i] . "[R]";
}

file_put_contents($file, $databaru);

header('location:baca.php');