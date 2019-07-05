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
echo "<head><title>DATA BAYAR</title></head>";
$fp = fopen("databayar.txt","r");
echo "<table border=0>";
while ($isi = fgets($fp,80))
{
$pisah = explode("|",$isi);
echo "<tr><td>Nama Pelanggan</td><td>: $pisah[0]</td></tr>";
echo "<tr><td>Nama Barang </td><td>: $pisah[1]</td></tr>";
echo "<tr><td>Jumlah </td><td>: $pisah[2]</td></tr>";
echo "<tr><td>Harga </td><td>: $pisah[3]</td></tr>";
echo "<tr><td>Total </td><td>: $pisah[4]</td></tr>";
echo "<tr><td>Bukti </td><td>: <img src=img/$pisah[5] width=100 height=150 ></td></tr>
<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
}
echo "</table>";
echo "<a class=btn href=form.php> Isi Buku tamu </a>";
echo "<a class=btn href=biodata.html> Profile </a>";
?>

</div>

</body>
</html>