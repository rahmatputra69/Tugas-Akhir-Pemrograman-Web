<!DOCTYPE html>
<html>
<head>
	<title>Tugas Akhir Web</title>
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
			<li><a href="lihat.php">Pembeli</a></li>
		</ul>
</div>	

<div class="menu2">
	<center>
	<form action="proses.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nama" ><font color="black">Nama Pelanggan:</font></label>
    <input type="text" name="nama" class="form-control" id="nama">
  </div>
  <div class="form-group">
    <label for="alamat"><font color="green">Nama Barang :</font></label>
    <select name="nama_barang">
    	<option value="Jaket">Jaket</option>
    	<option value="Sepatu">Sepatu</option>
    	<option value="Switter">Switter</option>
    	<option value="Sandal">Sandal</option>
    </select>
  </div>
  <div class="form-group">
    <label for="alamat"><font color="black">Jumlah :</font></label>
    <input type="text" name="jumlah" class="form-control" id="alamat">
  </div>
  <div class="form-group">
    <label for="alamat"><font color="black">Harga Satuan :</font></label>
    <input type="text" name="harga" class="form-control" id="alamat">
  </div>
  <div class="form-group">
    <label for="alamat"><font color="black">Bukti Transaksi :</font></label>
    <input type="file" name="file">
  </div>
  <br>
    <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
    <button type="reset" name="Submit2" class="btn btn-danger">Reset</button>
</form>
   </div>
	</center>
</div>

</body>
</html>