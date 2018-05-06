<?php

/**
* 
*/
class VisualView
{
	
	public function tampilForm()
	{?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>Form Pendaftaran</title>
	<style>
		*{
  	box-sizing:border-box;
  	margin:0 auto;
	}
	body{
  		background: url('/mvc/coverregister.jpg');

  	}
	html,body{
  	font-family:Helvetica;
	}
	.fa-user{
    color: #2c79c0;
    padding: 0 10px;
    position: relative;
    float: left;
	}
	.fa-hand-o-right{
  	float:right;
	}
	form {
  	top:20px;
  	position:relative;
  	width:100%;
  	max-width:500px;
  	background-color:#FFFFFF;
  	border-radius:3px;
  	box-shadow:0px 0px 3px black;
	}
	form h2 {
 	padding:20px;
 	border-bottom:2px solid #60a4e3;
  	text-align:center;
	}
	.form-group{
 	padding:5px 15px;
 	display:block;
	}
	.input-mode{
  	border:1px solid silver;
  	border-radius:3px;
  	font-size:15px;
  	height:50px;
  	padding:0 10px;
  	display:block;
  	width:100%;
	}
	.cek {
  	padding:10px;
  	display:inline-block;
  	height:20px;
  	width:20px;
	}
	.btn-submit{
  	cursor:pointer;
  	padding: 10px;
    height: 50px;
    width: 38%;
    display: block;
    background-color: #2c79c0;
    color: white;
    font-size: 20px;
    border: 2px solid #135592;
    border-radius: 2px;
	}
	.form-cek label{
  	display:inline-block;
 	padding:10px;
  	line-height:10px;
	}
/* Customize the label (the container) */
	.container {
  	display: block;
  	position: relative;
  	padding-left: 35px;
 	margin-bottom: 12px;
  	cursor: pointer;
  	font-size: 15px;
  	-webkit-user-select: none;
 	-moz-user-select: none;
  	-ms-user-select: none;
  	user-select: none;
	}

/* Hide the browser's default checkbox */
	.container input {
  	position: absolute;
  	opacity: 0;
  	cursor: pointer;
	}

/* Create a custom checkbox */
	.checkmark {
  	position: absolute;
  	top: 0;
  	left: 0;
  	height: 20px;
  	width: 20px;
  	background-color: #eee;
	}

/* On mouse-over, add a grey background color */
	.container:hover input ~ .checkmark {
  	background-color: #ccc;
	}

/* When the checkbox is checked, add a blue background */
	.container input:checked ~ .checkmark {
  	background-color: #2196F3;
	}

/* Create the checkmark/indicator (hidden when not checked) */
	.checkmark:after {
  	content: "";
  	position: absolute;
  	display: none;
	}

/* Show the checkmark when checked */
	.container input:checked ~ .checkmark:after {
 	display: block;
	}

/* Style the checkmark/indicator */
	.container .checkmark:after {
  	left: 5px;
  	top: 2px;
  	width: 5px;
  	height: 9px;
  	border: solid white;
  	border-width: 0 3px 3px 0;
  	-webkit-transform: rotate(45deg);
  	-ms-transform: rotate(45deg);
  	transform: rotate(45deg);
	}

/* The container radio */
	.container1 {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 15px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	}

/* Hide the browser's default radio button */
	.container1 input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
	}

/* Create a custom radio button */
	.checkmark1 {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
	}

/* On mouse-over, add a grey background color */
	.container1:hover input ~ .checkmark1 {
    background-color: #ccc;
	}

/* When the radio button is checked, add a blue background */
	.container1 input:checked ~ .checkmark1 {
    background-color: #2196F3;
	}

/* Create the indicator (the dot/circle - hidden when not checked) */
	.checkmark1:after {
    content: "";
    position: absolute;
    display: none;
	}

/* Show the indicator (dot/circle) when checked */
	.container1 input:checked ~ .checkmark1:after {
    display: block;
	}

/* Style the indicator (dot/circle) */
	.container1 .checkmark1:after {
  	top: 9px;
  	left: 9px;
  	width: 8px;
  	height: 8px;
  	border-radius: 50%;
  	background: white;
	}
	</style>

	</head>
	<body>
	<form action="gettampilHasil" method="post" enctype="multipart/form-data">
	<h2><i class="fa fa-user"></i>FORM PENDAFTARAN</h2>
	<div class="form-group">
	<h4>Kami ada sesuai kebutuhan anda</h4>
	</div>
	<br/>
	<div class="form-group">
	<input type="text" class="input-mode" placeholder="Nama Depan" name="nama_dpn">
	</div>
	<div class="form-group">
	<input type="text" class="input-mode" placeholder="Nama Belakang" name="nama_blk">
	</div>
	<div class="form-group">
	<input type="email" class="input-mode" placeholder="Email" name="email" >	
	</div>
	<br/>
	<div class="form-group">
	<strong>Jenis Kelamin :</strong> 
	<br/>
	<label class="container1">
	<input type="radio" name="jenis_kelamin" value="laki-laki" /> 
	Pria
	<span class="checkmark1"></span>
	<br/>
	</label>
	<label class="container1">
	<input type="radio" name="jenis_kelamin" value="perempuan" /> 
	Wanita
	<span class="checkmark1"></span>
	</div>
	<br/>
	<div class="form-group">
	<strong>Asal Kota :</strong> 
	<br/>
 	<select name="asal_kota" >
    <option value="Kota Jakarta"> Jakarta</option>
    <option>Bandung</option>
    <option value="Kota Semarang" selected>Semarang</option>
 	</select>
 	</div>
	<br/>
	<div class="form-group">
	<strong>Pilihan Jenis Membership : </strong> 
	<br/>
	<label class="container">
	<input type="checkbox" name="jenis_mmbr" value="Free"> Free<br>
	<span class="checkmark"></span> </label>
	<label class="container">
  	<input type="checkbox" name="jenis_mmbr" value="Premium"> Premium<br>
  	<span class="checkmark"></span> </label>
  	<label class="container">
  	<input type="checkbox" name="jenis_mmbr" value="Exclusive"> Exclusive<br>
  	<span class="checkmark"></span> </label>
	</div>
	<br />
	<div class="form-group">
	<strong>Keterangan : </strong> 
	<br />
	<textarea id="komentar" name="komentar" rows="5" cols="64" placeholder="Masukkan keterangan tambahan jika dibutuhkan">
	</textarea>
	</div>
	<br />
	<div class="form-group">
  	<strong>Upload Foto:</strong>  
  	<br />
  	<input type="file" name="img" multiple>
	<br />
	<div class="form-group">
	<button class="btn btn-submit">Daftar &nbsp; <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>
	</div>
	<br />
	</form>
	</body>
	</html>
	<?php
	}
	public function tampilHasil($hasil)
	{
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
	<style>
		*{
  	box-sizing:border-box;
  	margin:0 auto;
	}
	body{
  		background: url('/mvc/coverregister.jpg');
	}
	html,body{
  	font-family:Helvetica;
	}
	.fa-user{
    color: #2c79c0;
    padding: 0 10px;
    position: relative;
    float: left;
	}
	.fa-hand-o-right{
  	float:right;
	}
	form {
  	top:20px;
  	position:relative;
  	width:100%;
  	max-width:500px;
  	background-color:#FFFFFF;
  	border-radius:3px;
  	box-shadow:0px 0px 3px black;
	}
	form h2 {
 	padding:20px;
 	border-bottom:2px solid #60a4e3;
  	text-align:center;
	}
	.form-group{
 	padding:5px 15px;
 	display:block;
	}
	.input-mode{
  	border:1px solid silver;
  	border-radius:3px;
  	font-size:15px;
  	height:50px;
  	padding:0 10px;
  	display:block;
  	width:100%;
	}
	.cek {
  	padding:10px;
  	display:inline-block;
  	height:20px;
  	width:20px;
	}
	.btn-submit{
  	cursor:pointer;
  	padding: 10px;
    height: 50px;
    width: 38%;
    display: block;
    background-color: #2c79c0;
    color: white;
    font-size: 20px;
    border: 2px solid #135592;
    border-radius: 2px;
	}
	.form-cek label{
  	display:inline-block;
 	padding:10px;
  	line-height:10px;
	}
/* Customize the label (the container) */
	.container {
  	display: block;
  	position: relative;
  	padding-left: 35px;
 	margin-bottom: 12px;
  	cursor: pointer;
  	font-size: 15px;
  	-webkit-user-select: none;
 	-moz-user-select: none;
  	-ms-user-select: none;
  	user-select: none;
	}

/* Hide the browser's default checkbox */
	.container input {
  	position: absolute;
  	opacity: 0;
  	cursor: pointer;
	}

/* Create a custom checkbox */
	.checkmark {
  	position: absolute;
  	top: 0;
  	left: 0;
  	height: 20px;
  	width: 20px;
  	background-color: #eee;
	}

/* On mouse-over, add a grey background color */
	.container:hover input ~ .checkmark {
  	background-color: #ccc;
	}

/* When the checkbox is checked, add a blue background */
	.container input:checked ~ .checkmark {
  	background-color: #2196F3;
	}

/* Create the checkmark/indicator (hidden when not checked) */
	.checkmark:after {
  	content: "";
  	position: absolute;
  	display: none;
	}

/* Show the checkmark when checked */
	.container input:checked ~ .checkmark:after {
 	display: block;
	}

/* Style the checkmark/indicator */
	.container .checkmark:after {
  	left: 5px;
  	top: 2px;
  	width: 5px;
  	height: 9px;
  	border: solid white;
  	border-width: 0 3px 3px 0;
  	-webkit-transform: rotate(45deg);
  	-ms-transform: rotate(45deg);
  	transform: rotate(45deg);
	}

/* The container radio */
	.container1 {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 15px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	}

/* Hide the browser's default radio button */
	.container1 input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
	}

/* Create a custom radio button */
	.checkmark1 {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
	}

/* On mouse-over, add a grey background color */
	.container1:hover input ~ .checkmark1 {
    background-color: #ccc;
	}

/* When the radio button is checked, add a blue background */
	.container1 input:checked ~ .checkmark1 {
    background-color: #2196F3;
	}

/* Create the indicator (the dot/circle - hidden when not checked) */
	.checkmark1:after {
    content: "";
    position: absolute;
    display: none;
	}

/* Show the indicator (dot/circle) when checked */
	.container1 input:checked ~ .checkmark1:after {
    display: block;
	}

/* Style the indicator (dot/circle) */
	.container1 .checkmark1:after {
  	top: 9px;
  	left: 9px;
  	width: 8px;
  	height: 8px;
  	border-radius: 50%;
  	background: white;
	}
	</style>
	</head>
	<body>
	<form action="" method="">
	<h2><i class="fa fa-user"></i>FORM PENDAFTARAN</h2>
	<div class="form-group">
	<h2>Data Diri Anda</h2>
	</div>
	<br/>
	<table>
	<!--<div class="form-group">-->
	<tr>
	<td><strong>Nama Depan</strong></td>
	<td><strong> : </strong></td> 
	<td><?php echo $nama_dpn ?></td></tr>
	<!--</div>-->
	<!--<div class="form-group">-->
	<tr>
	<td><strong>Nama Belakang</strong></td>
	<td><strong> : </strong></td> 
	<td><?php echo $nama_blk ?></td></tr>
	<!--</div>-->
	<!--<div class="form-group">-->
	<tr>
	<td><strong>Email</strong></td>
	<td><strong> : </strong></td> 
	<td><?php echo $email ?></td></tr>
	<!--</div>-->
	<!--<div class="form-group">-->
	<tr>
	<td><strong>Jenis Kelamin</strong></td>
	<td><strong> : </strong></td> 
	<td><?php echo $jenis_kelamin ?></td></tr>
	<!--</div>
	<br/>-->
	<!--<div class="form-group">-->
	<tr>
	<td><strong>Asal Kota</strong></td>
	<td><strong> : </strong></td> 
	<td><?php echo $asal_kota ?></td></tr>
	<!--</div>
	<br/>-->
	<!--<div class="form-group">-->
	<tr>
	<td><strong>Jenis Membership</strong></td>
	<td><strong> : </strong></td> 
	<td><?php echo $jenis_mmbr ?></td></tr>
	<!--</div>
	<br/>-->
	<!--<div class="form-group">-->
	<tr>
	<td><strong>Komentar</strong></td>
	<td><strong> : </strong></td> 
	<td><?php echo $komentar ?></td></tr>
	<!--</div>
	<br/>-->
	<!--<div class="form-group">-->
	<tr>
	<td><strong>Asal Fakultas</strong></td>
	<td><strong> : </strong></td> 
	<td><?php echo $hasil ?></td></tr>
	<!--</div>
	<br/>-->
	<!--<div class="form-group">-->
	<form action="/action_page.php">
  	<tr>
	<td><strong>Foto Anda</strong></td>
	<td><strong> : </strong></td></tr> 
	<tr><td>
  	<!--</div>
	<br/>-->
	<?php $tmp = $_FILES['img']['tmp_name']; 
	move_uploaded_file($tmp, 'profile.jpg');?>
	<img src="/mvc/profile.jpg"></td></tr>
	<!--</div>
	<br/>-->
	</form>
	</table>
	</body>
	</html>
	<?php
	}
}