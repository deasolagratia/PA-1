<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cilpacastra: Batak Toba</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<header>
		<!-- Memulai elemen <div> dengan atribut id "mainContent", yang digunakan untuk mengelompokkan konten utama di dalam header.-->
		<div id="mainContent">
			<!--Menampilkan judul utama halaman dengan kelas "moving-title".-->
			<h1 class="moving-title">CILPACASTRA BATAK TOBA</h1>
			<b>Hasil ketrampilan tangan yang artisitik dari Batak Toba </b>
		</div>
		<!--Menambahkan elemen <div> dengan kelas "overlay" sebagai lapisan transparan di atas elemen header.-->
		<div class="overlay"></div>
	</header>
	<div class="sidebar">
		<!--Menampilkan logo website sebagai tautan ke halaman "home.php".-->
		<a href="home.php"><img src="image/logo.png" alt="Logo Website"></a>
		<br>
		<p>
		<!--Memulai elemen form untuk pencarian dengan metode GET yang mengarahkan ke "search_result.php" dan kelas "search-form".-->
		<form method="GET" action="search_result.php" class="search-form">
			<input type="text" name="keyword" placeholder="Cari...">
			<input type="submit" value="Cari">
		</form>
		</p>
		<p><a href="home.php">Home</a></p>
		<div class="dropdown">
			<section>
				<p><a href="#">Ulos</a></p>
			</section>
			<section class="dropdown-menu">
				<p><a href="sejarah.php">Sejarah</a></p>
				<p><a href="jenis.php">Jenis</a></p>
			</section>
		</div>
		<br>
		<div class="dropdown">
			<section>
				<p><a href="rumahbolon.php">Rumah Bolon</a></p>
			</section>
			<section class="dropdown-menu">
				<p><a href="cicak.php">Ukiran Cicak</a></p>
				<p><a href="ukiran.php">Ukiran Odap-Odap</a></p>
				<p><a href="gorga.php">Gorga</a></p>
				<p><a href="kerbau.php">Kepala Kerbau</a></p>
				<p><a href="singa.php">Singa-singa</a></p>
			</section>
		</div>
		<br>
		<p><a href="sortali.php">Sortali</a></p>
		<br>
		<p><a href="tandok.php">Tandok</a></p>
		<br>
		<p><a href="about.php">About Us</a></p>
		<br>
		<p><a href="comment.php">Comments</a></p>
	</div>

</body>

</html>