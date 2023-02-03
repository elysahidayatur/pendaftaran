<?php
include ("koneksi.php");
if (isset($_GET['id'])){
	$title ="Edit";
	$url ="proses_edit.php";
	$id = $_GET['id'];
    //buat query untuk ambil data dari database
    $sql ="SELECT * FROM peserta WHERE id= $id";
	$query = mysqli_query ($koneksi,$sql);
	$peserta = mysqli_fetch_assoc ($query);
	//jika data yang diedit tidak ditemukan
	if (mysqli_num_rows($query) <1){
		die("data tidak ditemukan...");}
		//url jika edit data
	}else{
		$title ="Add";
		//url jika tambah data
		$url='proses_pendaftaran.php';
	}
	?>
	<html>
	<head><title> Formulir Peserta</title></head>
	<link rel ="stylesheet" type = "text/css" href= "style.css">
	<body>
	<header><h3> Formulir Peserta </h3></header>
	<form action ="proses_edit.php" method = "POST">
	<fieldset>
	<legend><h2>Form Peserta </h2></legend>
	<div>
	<label for ='id'>ID: </label><br>
	<input type ="text" name ="id" value ="<?php if (isset($_GET['id']))
	{echo $peserta['id'];}?>"/>
	</div>
	<div>
	<label for ='nama'>Nama: </label><br>
	<input type ="text" name ="nama" value ="<?php if (isset($_GET['id'])) 
	{echo $peserta['nama'];}?>"/>
	</div><div>
	<label for ='email'>Email: </label><br>
	<input type="text"name ="email" value="<?php if (isset($_GET['id']))
	{echo $peserta['email'];}?>"/> 
	</div>
	<div>
	<label for ='tgl_lahir'>Tanggal Lahir: </label><br>
	<input type ="date" name ="tgl_lahir" value ="<?php if (isset($_GET['id'])) 
	{echo $peserta['tgl_lahir'];}?>"/>
	<div>
	<label for ="alamat">Alamat: </label><br>
	<input type = "text" name ="alamat" value ="<?php if (isset($_GET['id']))
		{echo $peserta['alamat'];}?>"/>
	</div>
	<hr>
	<div>
	<input type ="submit" value ="simpan" name = "simpan" name ="simpan"/>
	</div>
	</fieldset>
	</form></body></html>
