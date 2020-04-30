<?php 
	// melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal");
// Memilih database
mysqli_select_db($conn, "tubes_193040103") or die("Database Salah!");
// query mengambil objek dari table di dalam database
$result = mysqli_query($conn, "SELECT * FROM  novel")

 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="assets/css/index.css">
	<title>Halaman Admin</title>
</head>
<body>
	<div class="container">
	<h1 >Daftar Novel</h1>
		<table border="1" cellpadding="10" cellspacing="0">
			<tr class="head">
				<th>No.</th>
				
				<th>Gambar</th>
				<th>Judul Buku</th>
				<th>Penerbit</th>
				<th>Jumlah Halaman</th>
				<th>Penulis</th>
				<th>Tahun Terbit</th>
				<th>Sinopsis</th>
				<th>Harga</th>
			</tr>
			<?php $i = 1 ?>
			<?php while($row = mysqli_fetch_assoc($result)) : ?>
			<tr class="body">
				<td><?php echo $i ?></td>
			
				<td><img src="assets/img/<?= $row["gambar"]; ?>" width="100" alt=""></td>
				<td><?= $row["Judul_Buku"];  ?></td>
				<td><?= $row["Penerbit"];  ?></td>
				<td><?= $row["Jumlah_Halaman"];  ?></td>
				<td><?= $row["Penulis"];  ?></td>
				<td><?= $row["Tahun_Terbit"];  ?></td>
				<td><?= $row["Sinopsis"];  ?></td>
				<td>Rp.<?= $row["Harga"];  ?>,-</td>
			</tr>
			<?php $i++ ?>
	<?php endwhile; ?>
			
		</table>

		</div>
</body>
</html> 