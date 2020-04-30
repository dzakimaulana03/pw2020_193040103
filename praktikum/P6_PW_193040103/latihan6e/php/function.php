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

function ubah($data)
{
	global $conn;

	$id = $data['id'];
	$gambar = htmlspecialchars($data['gambar']);
	$Judul = htmlspecialchars($data['Judul_Buku']);
	$Penerbit = htmlspecialchars($data['Penerbit']);
	$Jumlah = htmlspecialchars($data['Jumlah_Halaman']);
	$Penulis = htmlspecialchars($data['Penulis']);
	$Tahun = htmlspecialchars($data['Tahun_Terbit']);
	$Sinopsis = htmlspecialchars($data['Sinopsis']);
	$Harga = htmlspecialchars($data['Harga']);

	$queryubah = "UPDATE novel SET
			gambar = '$gambar',
			Judul_Buku = '$Judul',
			Penerbit = '$Penerbit',
			Jumlah_Halaman = '$Jumlah',
			Penulis = '$Penulis',
			Tahun_Terbit = '$Tahun',
			Sinopsis = '$Sinopsis',
			Harga = '$Harga'
			WHERE id = '$id' ";
		mysqli_query($conn, $queryubah);

		return mysqli_affected_rows($conn);

}

// function cari($keyboard) {
// 	$query = "SELECT * FROM novel WHERE
// 			Judul_Buku LIKE '%$keyword' OR 
// 			Penerbit LIKE '%$keyword'OR 
// 			Jumlah_Halaman LIKE '%$keyword' OR 
// 			Penulis LIKE '%$keyword' OR 
// 			Tahun_Terbit LIKE '%$keyword' OR 
// 			Harga LIKE '%$keyword'  ";

// 			return query($query);
// }

 ?>