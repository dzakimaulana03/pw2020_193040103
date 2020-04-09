<?php 
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if(!isset($_GET['id'])){
	header("location: index.php");
	exit;
}
require 'function.php';
// mengambil id dari url
$id = $_GET ['id'];
// melakukan query dengan parameter id yang diambil dari url
$novel = query ("SELECT * FROM novel WHERE id = $id")[0];
?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>NOVEL</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<div class="container">
 		<div class="gambar">
 			<img src="../assets/img/<?= $novel["gambar"];  ?>" alt="">
 		</div>
 		<div class="keterangan">
 			<p><?= $novel["Judul Buku"];  ?></p>
 			<p><?= $novel["Penerbit"];  ?></p>
 			<p><?= $novel["Jumlah Halaman"];  ?></p>
 			<p><?= $novel["Penulis"];  ?></p>
 			<p><?= $novel["Tahun Terbit"];  ?></p>
 			<p><?= $novel["Sinopsis"];  ?></p>

 		</div>
 		<button class="tombol-kembali"><a href="index.php">Kembali</a></button>
 	</div>
 
 </body>
 </html> 