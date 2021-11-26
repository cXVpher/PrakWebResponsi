<?php
if (!isset($_SESSION['nama_lengkap'])) {
    header("Location: index.php");
}
	include "config.php";

	$kode_barang = $_GET['kode_barang'];
	$nama_barang = $_POST['nama_barang'];
	$jumlah = $_POST['jumlah'];
	$satuan = $_POST['satuan'];
	$tgl_datang = $_POST['tgl_datang'];
	$kategori = $_POST['kategori'];
	$status_barang = $_POST['status_barang'];
	$harga = $_POST['harga'];

	$query=mysqli_query($conn, "UPDATE inventaris SET nama_barang='$nama_barang', jumlah='$jumlah', satuan='$satuan', tgl_datang='$tgl_datang', kategori='$kategori', status_barang='$status_barang', harga='$harga' WHERE kode_barang='$kode_barang'");
	if($query){
		header("location:inventaris.php");
	}
	else{
		echo "Data gagal diubah";
	}
?>