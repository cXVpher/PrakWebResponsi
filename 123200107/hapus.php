<?php
if (!isset($_SESSION['nama_lengkap'])) {
    header("Location: index.php");
}
require 'functions.php';
// menyimpan data id kedalam variabel
$kode_barang   = $_GET['kode_barang'];
// query SQL untuk delete data
$query="DELETE from inventaris where kode_barang='$kode_barang'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman inventaris.php
header("location:inventaris.php");
?>