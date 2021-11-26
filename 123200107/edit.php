<?php 

session_start();

if (!isset($_SESSION['nama_lengkap'])) {
    header("Location: index.php");
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
	<title>Responsi - Ubah Data</title>
</head>
<body>
	<h1 style="padding-top:0.7cm; padding-bottom:0.7cm" class="bg-blue text-light text-center">Ubah Data Inventaris</h1>
		<?php
			include 'config.php';
              $kode_barang = $_GET['kode_barang'];
              $query = mysqli_query($conn, "SELECT * FROM inventaris WHERE kode_barang='$kode_barang'");
              while($hasil = mysqli_fetch_array($query)){
              echo "<form method='POST' action='prosesedit.php?kode_barang=$kode_barang'>"
		?>
		<table class="table" border="0">
			<form action="" method="post">
			<tr>
                <td><label for="kode_barang">Kode Barang</label></td>
                <td>:</td>
                <td><input class="form-control" type="text" aria-label="default input example" name="kode_barang" value="<?php echo $hasil['kode_barang'];?>" disabled></td>
            </tr>
			<tr>
                <td><label for="nama_barang">Nama Barang</label></td>
                <td>:</td>
                <td><input class="form-control" type="text" aria-label="default input example" name="nama_barang" value="<?php echo $hasil['nama_barang'];?>"></td>
            </tr>
			<tr>
                <td><label for="jumlah">Jumlah</label></td>
                <td>:</td>
                <td><input class="form-control" type="text" aria-label="default input example" name="jumlah" value="<?php echo $hasil['jumlah'];?>"></td>
            </tr>
			<tr>
                <td><label for="satuan">Satuan</label></td>
                <td>:</td>
                <td><input class="form-control" type="text" aria-label="default input example" name="satuan" value="<?php echo $hasil['satuan'];?>"></td>
            </tr>
			<tr>
                <td><label for="tgl_datang">Tanggal datang</label></td>
                <td>:</td>
                <td><input class="form-control" type="date" name="tgl_datang" value="<?php echo $hasil['tgl_datang'];?>"></td>
            </tr>
			<tr>
                <td><label for="kategori">Kategori</label></td>
                <td>:</td>
				<td>
					<select class="form-select" aria-label="Default select example" name="kategori" value="<?php echo $hasil['kategori'];?>">
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
									<?php if($hasil['status_barang']=='Baik'){ ?>
									<input class="form-check-input" type="radio" name="status_barang" id="inlineRadio1" value="Baik" checked>
			  						<label class="form-check-label" for="inlineRadio1">Baik</label>
			  						<input class="form-check-input" type="radio" name="status_barang" id="inlineRadio1" value="Perawatan">
			  						<label class="form-check-label" for="inlineRadio1">Perawatan</label>
			  						<input class="form-check-input" type="radio" name="status_barang" id="inlineRadio1" value="Rusak">
			  						<label class="form-check-label" for="inlineRadio1">Rusak</label>
			  					<?php }?>
			  						<?php if($hasil['status_barang']=='Perawatan'){ ?>
									<input class="form-check-input" type="radio" name="status_barang" id="inlineRadio1" value="Baik" >
			  						<label class="form-check-label" for="inlineRadio1">Baik</label>
			  						<input class="form-check-input" type="radio" name="status_barang" id="inlineRadio1" value="Perawatan" checked>
			  						<label class="form-check-label" for="inlineRadio1">Perawatan</label>
			  						<input class="form-check-input" type="radio" name="status_barang" id="inlineRadio1" value="Rusak">
			  						<label class="form-check-label" for="inlineRadio1">Rusak</label>
			  					<?php }?>
			  						<?php if($hasil['status_barang']=='Rusak'){ ?>
									<input class="form-check-input" type="radio" name="status_barang" id="inlineRadio1" value="Baik" >
			  						<label class="form-check-label" for="inlineRadio1">Baik</label>
			  						<input class="form-check-input" type="radio" name="status_barang" id="inlineRadio1" value="Perawatan" >
			  						<label class="form-check-label" for="inlineRadio1">Perawatan</label>
			  						<input class="form-check-input" type="radio" name="status_barang" id="inlineRadio1" value="Rusak"checked>
			  						<label class="form-check-label" for="inlineRadio1">Rusak</label>
			  					<?php }?> <br>
			  					</td>
            </tr>
			<tr>
                <td><label for="harga">Harga</label></td>
                <td>:</td>
                <td><input class="form-control" type="text" placeholder="Harga Satuan" aria-label="default input example" name="harga" value="<?php echo $hasil['harga'];?>"></td>
            </tr>
			</table>
				<center><button type="submit" class="btn btn-success">Ubah</button> <a href="inventaris.php"><button type="button" class="btn btn-danger">Batal</button></a></center>
			<br>
        </form>
<!--  --><?php } ?>
<footer class="bg-blue text-white fixed-bottom">
    <div class="container">
 		<div class="row pt-3">
    		<div class="col text-center">
      			<p>INVENTARIS 2021</p>
    		</div>
  		</div>
	</div>
</footer>
</body>
</html>