<?php
include ("koneksi.php");
//cek apakah tombol simpan sudah diklik atau belum
if ($_SERVER['REQUEST_METHOD']=="POST") {
	//ambil data dari form
	$id =$_POST['id'];
	$nama =$_POST['nama'];
	$email =$_POST['email'];
	$tgl_lahir =$_POST['tgl_lahir'];
	$alamat =$_POST['alamat'];
	//buat query
	$sql ="UPDATE peserta SET id='$id', nama='$nama', email='$email', tgl_lahir='$tgl_lahir', alamat='$alamat' WHERE ID= $id";
	 $query =mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
	 //apakah query update berhasil
	 if ($query) {
	 //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
	 header ('location:pendaftaran.php?status=sukses');
	 }else{
	 	//kalau gagal, alihkan  ke halaman index.php dengan status=gagal
	 header ('location:pendaftaran.php?status=gagal');
	 }
	 }else{ 
	     die("akses dilarang...");
	}
	?>