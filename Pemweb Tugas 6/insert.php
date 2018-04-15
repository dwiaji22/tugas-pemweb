<?php

$file = "data.txt";

$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$umur = $_POST['umur'];

$data = $nama  . "|F|" . 
        $email . "|F|" .
        $phone . "|F|".
        $umur . "[R]";

$handle = fopen($file, "a+");
fwrite($handle, $data);
fclose($handle);

echo "Data sudah disimpan!";