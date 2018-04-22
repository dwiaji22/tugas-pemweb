<?php

include "connect.php";

$id = $_POST['id'];
$nama  = $_POST['nama'];
$email = $_POST['email'];
$tel   = $_POST['phone'];
$umur   = $_POST['umur'];

$sql="UPDATE bukutelepon SET nama = '$nama', email = '$email', tel = '$tel', umur = '$umur' WHERE id = $id";
 $res = mysqli_query( $link, $sql );

header('location: select.php');
exit;