<!DOCTYPE html>
<html>
<head>
	<title>Post Test 5 PWeb</title>
	<link rel="stylesheet" type="text/css" href="css/contentt.css">
</head>
<body>

<div class="header">
	
</div>

<div class="menubar">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="form.html">Form</a></li>
			<li><a href="cari.php">Cari</a></li>
		</ul>
</div>	


<div class="menu2">
	<center>
		<br><br>
		<table border="1">
			<tr>
				<th>Nama Pemesan</th>
				<th>Nomer Handphone</th>
				<th>Tanggal Pemesanan</th>
				<th>Jumlah Tiket</th>
				<th>List Movie</th>
				<th>Harga Tiket</th>
				<th>Total Harga</th>
			</tr>
		<?php
$fp = fopen("datatiket.txt","r"); //Fopen berfungsi untuk membuka data txx ('datatiket.txt') dan dalam fungsi fopen kita menggunakan metode r dimana untuk membaca data dalam file notepad
while ($isi = fgets($fp,80)) //fgets itu dilakukan perulangan untuk menampilkan data dimana parameter perulangannya kita menggunakan fungsi fgets untuk mengambil data dalam notepad
{
$pisah = explode("|",$isi); //explode berfungsi untuk memisahkan data satu dengan data yang lain dengan tanda |
?>
	<tr>
		<td><?php echo $pisah[0] ?></td> <!-- menampilkan data dalam index 0 -->
		<td><?php echo $pisah[1] ?></td> <!-- menampilkan data dalam index 1 -->
		<td><?php echo $pisah[2] ?></td> <!-- menampilkan data dalam index 2 -->
		<td><?php echo $pisah[3] ?></td> <!-- menampilkan data dalam index 3 -->
		<td><?php echo $pisah[4] ?></td> <!-- menampilkan data dalam index 4 -->
		<td><?php echo $pisah[5] ?></td> <!-- menampilkan data dalam index 5 -->
		<td><?php echo $pisah[6] ?></td> <!-- menampilkan data dalam index 6 -->
	</tr>


<?php
}
?>
	</table>
	</center>
</div>

<div class="menu3">
	<center><p>Profil :</p>
	<a target="_blank" href="img/kevin.jpg">
	<img src="img/kevin.jpg" width="200" height="300">
	</center>
</div>

</body>
</html>