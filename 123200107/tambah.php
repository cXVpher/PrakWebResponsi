<?php 

session_start();

if (!isset($_SESSION['nama_lengkap'])) {
    header("Location: index.php");
}
include "config.php";
require 'functions.php';
	if( isset($_POST["submit"]) ) {

		if( tambah($_POST) > 0){
			echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'inventaris.php';
				</script>
			";
		} else {
			echo "
				<script>
					alert('data gagal ditambahkan!');
					document.location.href = 'inventaris.php';
				</script>
			";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Responsi - Tambah Data</title>
</head>
<body>
	<h1 style="padding-top:0.7cm; padding-bottom:0.7cm" class="bg-blue text-light text-center">Tambah Data Inventaris</h1>	
	<table class="table" border="0">
		<form action="input.php" method="post">
			<tr>
                <td><label for="kode_barang">Kode Barang</label></td>
                <td>:</td>
                <td><input type=text name="kode_barang" id="kode_barang"></td>
            </tr>
			<tr>
                <td><label for="nama_barang">Nama Barang</label></td>
                <td>:</td>
                <td><input type=text name="nama_barang" id="nama_barang"></td>
            </tr>
			<tr>
                <td><label for="jumlah">Jumlah</label></td>
                <td>:</td>
                <td><input type=text name="jumlah" id="jumlah"></td>
            </tr>
			<tr>
                <td><label for="satuan">Satuan</label></td>
                <td>:</td>
                <td><input type=text name="satuan" id="satuan"></td>
            </tr>
			<tr>
                <td><label for="tgl_datang">Tanggal datang</label></td>
                <td>:</td>
                <td><input type=date name="tgl_datang" id="tgl_datang"></td>
            </tr>
			<tr>
                <td><label for="kategori">Kategori</label></td>
                <td>:</td>
				<td>
					<select name="kategori" id="kategori">
						<option name=kategori>Bangunan
						<option name=kategori>Kendaraan
						<option name=kategori>Alat Tulis Kantor
						<option name=kategori>Elektronik
					</select>
				</td>
            </tr>
			<tr>
				<td><label for="status_barang">Status</label></td>
				<td>:</td>
				<td>
					<input type="radio" name="status_barang" id="status_barang" <?php if (isset($status_barang) && $status_barang=="Baik") echo "checked";?> value="Baik">Baik
					<input type="radio" name="status_barang" id="status_barang" <?php if (isset($status_barang) && $status_barang=="Perawatan") echo "checked";?> value="Perawatan">Perawatan
					<input type="radio" name="status_barang" id="status_barang" <?php if (isset($status_barang) && $status_barang=="Rusak") echo "checked";?> value="Rusak">Rusak
				</td>
            </tr>
			<tr>
                <td><label for="harga">Harga</label></td>
                <td>:</td>
                <td><input type=text name="harga" id="harga"></td>
            </tr>
			</table>
			<table class="table" border="0">
				<td> </td>
				<td> </td>
				<td><input class="bg-blue text-light" type="submit" name="submit" value="Simpan"><input class="bg-blue text-light" type="reset" name="reset" value="Batal"></td>
				<td> </td>
				<td> </td>
			</table>
        </form>

		<table class="table" border="0">
			<td> </td>
			<td> </td>
			<td>
			<ul class="navbar-nav ms-auto">
        		<li class="nav-item">
	    		    <a class="nav-blue text-light" href="inventaris.php">Kembali ke Data Inventaris</a>
    		  	</li>
    		</ul>
			</td>
			<td> </td>
			<td> </td>
		</table>
	<!-- FOOTER -->
	<footer class="bg-blue text-white fixed-bottom">
    	<div class="container">
      		<div class="row pt-3">
        		<div class="col text-center">
          			<p>INVENTARIS 2021</p>
        		</div>
      		</div>
    	</div>
  	</footer>
	<!-- END FOOTER -->
	</body>
</html>