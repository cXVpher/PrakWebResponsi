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
	<title>Responsi - Home</title>
</head>
<body>
<!-- NAVBAR -->
<nav class="topnav navbar-dark bg-blue">
  <p class="judul text-light">
    DAFTAR INVENTARIS BARANG<br>
    KANTOR SERBA ADA
  </p>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse nav-link" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-dark" href="home.php">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="inventaris.php">Daftar Inventaris</a>
      </li>
      <li class="dropdown">
        <button class="dropbtn">List per Kategori</button>
        <div class="dropdown-content">
            <a href="inventarisbangunan.php">Bangunan</a>
            <a href="inventariskendaraan.php">Kendaraan</a>
            <a href="inventarisatk.php">Alat Tulis Kantor</a>
            <a href="inventariselektronik.php">Elektronik</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-blue text-light" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<!-- END NAVBAR -->

<div style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"class="container">
  <h1>Selamat Datang</h1>
</div>

<div class="nama">
  <?php echo "<h1>" . $_SESSION['nama_lengkap'] . "</h1>"; ?>
</div>

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