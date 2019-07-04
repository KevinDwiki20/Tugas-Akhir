<!DOCTYPE html>
<html>
<head>
	<title>Tugas Proyek PWEB</title>
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
		<?php
$kevin = fopen("datatiket.txt","a+"); //Fopen berfungsi untuk membuka data txx ('datatiket.txt') dan dalam fungsi fopen kita menggunakan metode a+ dimana untuk menambahkan data dalam txt.
$nama = $_POST['nama']; //proses untuk menampung data $_POST['nama'] dalam form inputan nama sebelumnya ke dalam variabel $nama
$nohp = $_POST['nohp']; //proses untuk menampung data $_POST['nohp'] dalam form inputan nama sebelumnya ke dalam variabel $nohp
$tanggal = $_POST['tanggal']; //proses untuk menampung data $_POST['tanggal'] dalam form inputan nama sebelumnya ke dalam variabel $tanggal
$jumlah = $_POST['jumlah']; //proses untuk menampung data $_POST['jumlah'] dalam form inputan nama sebelumnya ke dalam variabel $jumlah
$film = $_POST['film']; //proses untuk menampung data $_POST['film'] dalam form inputan nama sebelumnya ke dalam variabel $film
$harga = $_POST['harga']; //proses untuk menampung data $_POST['harga'] dalam form inputan nama sebelumnya ke dalam variabel $harga
$total = $jumlah*$harga; //dalam variabel total menampung proses data harga satuan dikalikan dengan data jumlah penjumlahan

fputs($kevin,"$nama|$nohp|$tanggal|$jumlah|$film|$harga|$total|\n"); //fputs berfungsi untuk menuliskan semua data-data dalam variabel (dari nama sampai dengan total kedalam notepad)
fclose($kevin); //Fclose berfungsi untuk menutup data txx ('datatiket.txt')
echo " Terima Kasih Atas Partisipasi Anda Mengisi Pembayaran<br>";
echo "<a class=btn href=lihat.php> Lihat Data </a><br>";
echo "<a class=btn href=form.php> Isi Data Lagi </a><br> ";

?>
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