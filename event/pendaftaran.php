<?php include('koneksi.php');
session_start();?>
<html>
<head><title>Data Peserta Lomba</title></head>
<center><h2>Data Peserta Lomba<h2></center>
	<link rel ="stylesheet" type = "text/css" href= "style.css">
	<body>

<center><nav><a href="v_form.php"><button>Tambah Baru</button>
</a></nav><center>
<br>
<table border ="1" cellpadding ="8" align ="center" bgcolor ="white">
<thread>
<tr>
<th>Id</th>
<th>Nama</th>
<th>Email</th>
<th>Tanggal Lahir</th>
<th>Alamat</th>
<th>Tindakan</th>
</tr>
</thread>
<body>
<?php
$sql ="SELECT * FROM peserta";
$query = mysqli_query($koneksi, $sql);
while($peserta = mysqli_fetch_Array($query)) {
echo "<tr>";
echo "<td>".$peserta['id']."</td>";
echo "<td>".$peserta['nama']."</td>";
echo "<td>".$peserta['email']."</td>";
echo "<td>".$peserta['tgl_lahir']."</td>";
echo "<td>".$peserta['alamat']."</td>";
echo "<td>";
echo "<a href= 'edit.php?id=".$peserta['id']."'>Edit</a> | ";
echo "<a href= 'hapus.php?id=".$peserta['id']."'>Hapus</a> | ";

}
?>
</body>
</table>
<p>Total:
<?php echo mysqli_num_rows($query) ?>
<br>
<center><nav><a href="/tugas1/cek_login.php"><button>Logout</button>
</a></nav><center>
</p>
</body>
</html>
