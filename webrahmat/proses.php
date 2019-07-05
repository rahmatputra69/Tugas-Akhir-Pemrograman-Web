<!DOCTYPE html>
<html>
<head>
	<title>Tugas Akhir Pemrograman Web</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script language="javascript" src="javascript/javafix.js"></script>
</head>
<body>
<div class="header">
	
</div>

<div class="menubar">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="biodata.html">Biodata</a></li>
			<li><a href="pencarian.html">Search</a></li>
			<li><a href="form.php">Pembayaran</a></li>
			<li><a href="lihat.php">Pengunjung</a></li>
		</ul>
</div>	

<div class="menu2">
	<center>
	<div class="jumbotron">

<?php
echo "<head><title>DATA PEMBAYARAN</head></title>";
$fp = fopen("databayar.txt","a+");
$nama = $_POST['nama'];
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$total = $jumlah*$harga;
$file = $_FILES["file"]["name"];
$tmp_name = $_FILES["file"]["tmp_name"];
move_uploaded_file($tmp_name, "img/".$file);

fputs($fp,"$nama|$nama_barang|$jumlah|$harga|$total|$file\n");
fclose($fp);
echo "<br>";
echo " Terima Kasih Atas Partisipasi Anda dalam mengisi Form Pembayaran<br>";
echo "<a class=btn href=form.php> Isi Buku Tamu </a><br>";
echo "<a class=btn href=biodata.html> Lihat Profile </a><br> ";
?>
</div>
</div>

</body>
</html>