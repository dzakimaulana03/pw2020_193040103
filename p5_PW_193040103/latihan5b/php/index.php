<?php 

require 'function.php';

$novel = query("SELECT * FROM novel");
 ?> 


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1 >Daftar Novel</h1>
		<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<th>No.</th>
				<th>Gambar</th>
				<th>Judul Buku</th>
				<th>Penerbit</th>
				<th>Jumlah Halaman</th>
				<th>Penulis</th>
				<th>Tahun Terbit</th>
				<th>Sinopsis</th>
			</tr>
			<?php $i = 1 ?>
			<?php foreach ($novel as $row): ?>
			<tr>
				<td><?php echo $i ?></td>
				<td><img src="../assets/img/<?= $row["gambar"]; ?>" width="100" alt=""></td>
				<td><?= $row["Judul Buku"];  ?></td>
				<td><?= $row["Penerbit"];  ?></td>
				<td><?= $row["Jumlah Halaman"];  ?></td>
				<td><?= $row["Penulis"];  ?></td>
				<td><?= $row["Tahun Terbit"];  ?></td>
				<td><?= $row["Sinopsis"];  ?></td>
			</tr>
			<?php $i++ ?>
	<?php endforeach; ?>
			
		</table>

</body>
</html> 