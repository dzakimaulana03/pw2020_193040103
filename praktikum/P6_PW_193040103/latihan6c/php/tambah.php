<?php 
	require 'function.php';

	if(isset($_POST['tambah'])) {
		if(tambah($_POST) > 0){
			echo"<script>
					alert('Data Berhasil ditambahkan!');
					document.location.href = 'admin.php';
				  </script>";
		}else{
			echo "<script>
					alert('Data Gagal ditambahkan!');
					document.location.href='admin.php';
					</script>";
		}
	}
 ?> 


<!DOCTYPE html>
<html>
<head>
		<!-- CSS Materialize -->
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Akhir CSS Materialize -->

<style>
	body{
		text-align: center;
	}
</style>


	<title>Tambah Data</title>
</head>
<body>
	
	
	<div class="card-panel">
	<div class="row">

<form action="" method="post" class="col s12">
	<h3 style="text-align: center;">Form Tambah Data Novel</h3>
	
		<div class="input-field col s6" style="text-align: center;">
			<label for="gambar">Gambar :</label>
			<input type="text" name="gambar" id="gambar" required><br>
		
		</div>
		<div class="input-field col s6">
			<label for="Judul_Buku">Judul Buku :</label>
			<input type="text" name="Judul_Buku" id="Judul_Buku" required><br>
			</div>
		
		<div class="input-field col s6">
			<label for="Penerbit">Penerbit :</label>
			<input type="text" name="Penerbit" id="Penerbit" required><br>
			</div>
		
		<div class="input-field col s6">
			<label for="Jumlah_Halaman">Jumlah Halaman :</label>
			<input type="text" name="Jumlah_Halaman" id="Jumlah_Halaman" required><br>
			</div>
		
		<div class="input-field col s6">
			<label for="Penulis">Penulis :</label>
			<input type="text" name="Penulis" id="Penulis" required><br>
			</div>
		
		<div class="input-field col s6">
			<label for="Tahun_Terbit">Tahun Terbit :</label>
			<input type="text" name="Tahun_Terbit" id="Tahun_Terbit" required><br>
			</div>
		
		<div class="input-field col s6">
			<label for="Sinopsis">Sinopsis :</label>
			<input type="text" name="Sinopsis" id="Sinopsis" required><br>
			</div>
		
		<div class="input-field col s6">
			<label for="Harga">Harga :</label>
			<input type="text" name="Harga" id="Harga" required><br><br>
		</div>
		</div>
		<br>
<div class="row">
	<div class="col s12 m12">

		<a class="waves-effect waves-light btn" href="../index.php"><i class="material-icons left">keyboard_return</i>Kembali</a>
		
		 <button class="btn waves-effect waves-light" type="submit" name="tambah">Tambah Data!
    <i class="material-icons right">send</i>
  </button>
		

		
	</div>
	</div>
</form>

</div>






<!-- Java Script -->

<!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="../assets/js/materialize.min.js">

   	
   	
   </script>
</body>
</html> 

