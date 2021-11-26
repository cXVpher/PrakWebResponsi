<?php 
// koneksi ke database
	$koneksi = mysqli_connect("localhost", "root", "", "responsi");

// fungsi cetak query
	function query($query) {
		global $koneksi;
		$result = mysqli_query($koneksi, $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}

// fungsi utk mengambil data dari tiap element dalam form
	function tambah($data) {
		global $koneksi;

		$kode_barang = htmlspecialchars($data["kode_barang"]);
		$nama_barang = htmlspecialchars($data["nama_barang"]);
		$jumlah = htmlspecialchars($data["jumlah"]);
		$satuan = htmlspecialchars($data["satuan"]);
		$tgl_datang = htmlspecialchars($data["tgl_datang"]);
		$kategori = htmlspecialchars($data["kategori"]);
		$status_barang = htmlspecialchars($data["status_barang"]);
		$harga = htmlspecialchars($data["harga"]);

	// query insert data
		$query = "INSERT INTO inventaris VALUES 
			('$kode_barang', '$nama_barang', '$jumlah', '$satuan', '$tgl_datang', '$kategori', '$status_barang', '$harga')";
		mysqli_query($koneksi, $query);

	// return apakah koneksi berhasil atau tidak
		return mysqli_affected_rows($koneksi);
	}

// fungsi hapus
	function hapus($data) {
		global $koneksi;

		mysqli_query($koneksi, "DELETE FROM inventaris WHERE kode_barang = $kode_barang");
		return mysqli_affected_rows($koneksi);
	}

// fungsi edit
	function ubah($data) {
		global $koneksi;
		
		$kode_barang = htmlspecialchars($data["kode_barang"]);
		$nama_barang = htmlspecialchars($data["nama_barang"]);
		$jumlah = htmlspecialchars($data["jumlah"]);
		$satuan = htmlspecialchars($data["satuan"]);
		$tgl_datang = htmlspecialchars($data["tgl_datang"]);
		$kategori = htmlspecialchars($data["kategori"]);
		$status_barang = htmlspecialchars($data["status_barang"]);
		$harga = htmlspecialchars($data["harga"]);
		
		$query = "UPDATE inventaris SET  
			 kode_barang = '$kode_barang',
			 nama_barang = '$nama_barang',
			 jumlah = '$jumlah',
			 satuan = '$satuan',
			 tgl_datang = '$tgl_datang',
			 kategori = '$kategori',
			 status_barang = '$status_barang',
			 harga = '$harga'
			WHERE kode_barang = $kode_barang;
			";
		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}
?>