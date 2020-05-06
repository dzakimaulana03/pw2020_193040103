<?php 
	// Menghubungkan dengan file php lainnya
require 'function.php';


if(isset($_GET['cari'])) {
	$keyword = $_GET['keyword'];
	$novel = query("SELECT * FROM novel WHERE 
			Judul_Buku LIKE '%$keyword%' OR 
			Penerbit LIKE '%$keyword%'OR 
			Jumlah_Halaman LIKE '%$keyword%' OR 
			Penulis LIKE '%$keyword%' OR 
			Tahun_Terbit LIKE '%$keyword%' OR 
			Harga LIKE '%$keyword%' ");
}else {
	$novel = query("SELECT * FROM novel");
}



?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../assets/css/admin.css">
	<title>Admin</title>
</head>
<body>
	<h1 >Daftar Novel</h1>
	<div class="add">
		<button type="submit" class="btnn"><a href="tambah.php" class="aksii">Tambah Data</a></button>

	<form action="" method="get">
		<input type="text" name="keyword" autofucus>
		<button type="submit" name="cari">Cari!</button>
		<button type="submit">
			<a href="../index.php" style="text-decoration: none;color: black">Kembali</a>
		</button>
		<button type="submit">
			<a href="logout.php" style="text-decoration: none;color: black">Logout</a>
		</button>
	</form>

		
	</div>
		<table border="1" cellpadding="10" cellspacing="0">
			<tr class="head">
				<th>No.</th>
				<th>Aksi</th>
				<th>Gambar</th>
				<th>Judul Buku</th>
				<th>Penerbit</th>
				<th>Jumlah Halaman</th>
				<th>Penulis</th>
				<th>Tahun Terbit</th>
				<th>Sinopsis</th>
				<th>Harga</th>

			</tr>
			
			<?php if (empty($novel)) : ?>
				<tr>
					<td colspan="7">
						<h1>Data tidak ditemukan</h1>
					</td>
				</tr>
			<?php else : ?>



			<?php $i = 1 ?>
			<?php foreach ($novel as $row): ?>
			<tr class="body">

				<td><?php echo $i ?></td>
				<td>
					<button class="btn" ><a href="ubah.php?id=<?= $row['id'];  ?>" class="aksii">Ubah</a></button>
					<button class="btn" ><a href="hapus.php?id=<?= $row["id"];  ?>" onclick="return confirm('yakin?');" class="aksii" >Hapus</a></button>
					
				</td>
				<td><img src="../assets/img/<?= $row["gambar"]; ?>" width="100" alt=""></td>
				<td><?= $row["Judul_Buku"];  ?></td>
				<td><?= $row["Penerbit"];  ?></td>
				<td><?= $row["Jumlah_Halaman"];  ?></td>
				<td><?= $row["Penulis"];  ?></td>
				<td><?= $row["Tahun_Terbit"];  ?></td>
				<td><?= $row["Sinopsis"];  ?></td>
				<td>Rp.<?= $row["Harga"];  ?>,-</td>
			</tr>
			<?php $i++ ?>
	<?php endforeach; ?>
<?php endif; ?>
			
		</table>

</body>
</html>
 