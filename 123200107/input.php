<?php 
if (!isset($_SESSION['nama_lengkap'])) {
    header("Location: index.php");
}
	include "config.php";

	$kode_barang = $_POST['kode_barang'];
	$nama_barang = $_POST['nama_barang'];
	$jumlah = $_POST['jumlah'];
	$satuan = $_POST['satuan'];
	$tgl_datang = $_POST['tgl_datang'];
	$kategori = $_POST['kategori'];
	$status_barang = $_POST['status_barang'];
	$harga = $_POST['harga'];

	$query=mysqli_query($conn, "INSERT INTO inventaris VALUES ('$kode_barang', '$nama_barang', '$jumlah', '$satuan', '$tgl_datang', '$kategori', '$status_barang', '$harga')") or die(mysqli_error($conn));
	if($query){
		header("location:inventaris.php");
	}
	else{
		echo "Proses input gagal";
	}
?>