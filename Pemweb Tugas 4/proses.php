<?php
$nama_dpn = $_POST["nama_dpn"];
$nama_blk = $_POST["nama_blk"];
$email = $_POST["email"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$asal_kota = $_POST["asal_kota"];
$jenis_mmbr = $_POST["jenis_mmbr"];
$komentar = $_POST["komentar"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Pendaftaran</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<form action="" method="">
	<h2><i class="fa fa-user"></i>FORM PENDAFTARAN</h2>
	<div class="form-group">
	<h2>Data Diri Anda</h2>
	</div>
	<br/>
	<div class="form-group">
	<?php echo "<strong>Nama Depan : </strong> $nama_dpn"; ?>
	</div>
	<div class="form-group">
	<?php echo "<strong>Nama Belakang : </strong> $nama_blk"; ?>
	</div>
	<div class="form-group">
	<?php echo "<strong>Email : </strong> $email"; ?>
	</div>
	<div class="form-group">
	<?php echo "<strong>Jenis kelamin : </strong> $jenis_kelamin"; ?>
	<br/>
	</div>
	<div class="form-group">
	<?php echo "<strong>Asal Kota : </strong> $asal_kota"; ?>
	<br/>
 	</div>
	<div class="form-group">
	<?php echo "<strong>Jenis Membership : </strong> $jenis_mmbr"; ?>
	<br/>
	</div>
	<div class="form-group">
	<?php echo "<strong>Komentar : </strong> $komentar"; ?>
	<br/>
	</div>
	<div class="form-group">
	<form action="/action_page.php">
  	<strong>Foto Anda:</strong>
  	<br />
	<?php $tmp = $_FILES['img']['tmp_name']; 
move_uploaded_file($tmp, 'profile.jpg');?>
<img src="profile.jpg">
	</div>
	<br />
	<div class="form-group">
		<button class="btn btn-submit">Selesai</button>
	</div>
	<br />
	</form>
</body>
</html>
