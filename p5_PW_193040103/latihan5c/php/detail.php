<?php 
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if(!isset($_GET['id'])){
	header("location: ../index.php");
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
		<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!-- MY CSS -->
	<link rel="stylesheet" href="../assets/css/detail.css">
	<style>
		body{
			background-image: url(../assets/img/4.JPG);
			background-size: cover;
		}
	</style>

    </head>


 	<title>NOVEL</title>
 	
 </head>
 <body>
 	<div class="container">
 		<div class="row"   >
 			<div class="col">
 				<div class="gambar materialboxed">
 			
    <!-- Card Content -->
    <img src="../assets/img/<?= $novel["gambar"];  ?>" alt="">
    
  
 			
 		</div>


 			</div>
 		</div>
 		 		<div class="keterangan">
 		 	<h3>Novel <?= $novel["Judul Buku"];  ?></h3>
 		 	<p>Judul Novel :</p>
 			<h5><?= $novel["Judul Buku"];  ?></h5>
 			<p>Penerbit :</p>
 			<h5><?= $novel["Penerbit"];  ?></h5>
 			<p>Jumlah Halaman :</p>
 			<h5><?= $novel["Jumlah Halaman"];  ?></h5>
 			<p>Penulis :</p>
 			<h5><?= $novel["Penulis"];  ?></h5>
 			<p>Tahun Terbit :</p>
 			<h5><?= $novel["Tahun Terbit"];  ?></h5>
 			<h5 class="sinopsis">Sinopsis :</h5>
 			<p class="sin"><?= $novel["Sinopsis"];  ?></p>
 			<p style="font-weight: bold;">Harga :</p>
 			<h5 style="margin-bottom: 30px">Rp.<?= $novel["Harga"];  ?>,-</h5>

 		</div>
 		<div class="tombol" style="float: left;">
 		<a class="waves-effect waves-light btn" href="../index.php" style="float: left;margin-bottom: 50px; margin-right: 50px">Beli Novel</a>
 		<a class="waves-effect waves-light btn" href="../index.php" style="float: left;margin-bottom: 50px;">Kembali</a>
 		</div>
 	</div>






 	<!-- Java Script -->

 	  <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../assets/js/materialize.min.js">
      	
      </script>
      <script>
      	const materialbox = document.querySelectorAll('.materialboxed');
            M.Materialbox.init(materialbox);
      </script>
    </body>
 
 </body>
 </html> 