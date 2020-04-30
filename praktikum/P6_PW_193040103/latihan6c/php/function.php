<?php 	// Koneksi ke database

function koneksi(){
	$conn = mysqli_connect("localhost","root","") or die ("koneksi ke database gagal.");
	mysqli_select_db($conn,"tubes_193040103") or die ("database salah!");
	return $conn;
}
$conn = mysqli_connect("localhost", "root", "","tubes_193040103");


function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

// fungsi untuk menambah data di database
function tambah($data)
{
	$conn = koneksi();

	$gambar = htmlspecialchars($data['gambar']);
	$Judul = htmlspecialchars($data['Judul_Buku']);
	$Penerbit = htmlspecialchars($data['Penerbit']);
	$Jumlah = htmlspecialchars($data['Jumlah_Halaman']);
	$Penulis = htmlspecialchars($data['Penulis']);
	$Tahun = htmlspecialchars($data['Tahun_Terbit']);
	$Sinopsis = htmlspecialchars($data['Sinopsis']);
	$Harga = htmlspecialchars($data['Harga']);

	$query = "INSERT INTO novel
					VALUES
					('','$gambar','$Judul','$Penerbit','$Jumlah','$Penulis','$Tahun','$Sinopsis','$Harga')";
		mysqli_query($conn,$query);

		return mysqli_affected_rows($conn);
}


function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn,"DELETE FROM novel WHERE id = $id");

	return mysqli_affected_rows($conn);
}

 ?>