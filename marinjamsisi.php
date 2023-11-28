<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cilpacastra: Batak Toba</title>
	<link rel="stylesheet" href="test.css">
</head>

<body>
	<header>
		<h1>ULOS MARINJAM SISI</h1>
		<h2>ᯥᯞ᯲oᯘ᯲ ᯔᯒᯪᯉ᯲ᯐᯔ᯲ ᯘᯪᯘᯪ</h2>
	</header>
	<div class="sidebar">
		<!--Menampilkan logo website sebagai tautan ke halaman "home.php".-->
		<a href="home.php"><img src="image/logo.png" alt="Logo Website"></a>
		<br>
		<p>
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
	<main>
		<div class="container">
			<div class="article">
				<div class="kiri">
					<div class='slide'>
						<input type='radio' name='radio-set' checked='checked' />
						<img src='ulos/marinjamsisi.png' />
					</div>
					<p>
						<dd><b>Sumber Gambar: </b>
							<p>Buku Pesona Kain Ulos Danau Toba (Threes Emir & Samuel Wattimena)</p>
						</dd>
					</p>
					<p>
						<dd><b>Referensi: </b>
							<p>Buku Pesona Kain Ulos Danau Toba (Threes Emir & Samuel Wattimena)</p>
						</dd>
					</p>
				</div>
				<div class="kanan">
					<p>Ulos Marinjam Sisi adalah salah satu jenis kain tradisional yang digunakan oleh suku Batak,
						terutama oleh pihak Hasuhutan. Ulos ini sering digunakan bersamaan dengan ulos pinucaan, yang
						juga merupakan kain tradisional suku Batak. Ulos Marinjam Sisi memiliki makna sukacita dan dapat
						pula menjadi simbol dukacita, tergantung pada acara atau peristiwa yang dihadiri.</p>
					<p>Motif yang terdapat dalam Ulos Marinjam Sisi adalah kombinasi berbagai bentuk geometris yang
						saling terkait, seperti garis-garis melintang, zigzag, dan bentuk-bentuk lainnya. Warna yang
						dominan dalam kain ini adalah merah, hitam, dan putih, dengan tambahan aksen warna cerah seperti
						kuning, hijau, dan biru. </p>
					<p>Kain ini melambangkan keberanian, kekuatan, dan kejantanan. Ulos Marinjam Sisi juga sering
						dianggap sebagai simbol kemakmuran, kesuburan, dan kesejahteraan. Kain ini juga mengandung makna
						spiritual dan kepercayaan yang dalam dalam kehidupan suku Batak.</p>
				</div>
			</div>
		</div>
		<br>
		<hr>

		<div class="kontak">
			<div class="kontak-container">
				<div class="kontak-info">
					<h2>Kontak Penjualan</h2>
					<b>THESA ULOS</b>
					<p>No. Telepon: 0821-7338-7540</p>
					<p>Alamat:
						Jl. Sm Raja No.9,
						Gurgur Aek Raja,
						Kec. Balige, Toba,
						Sumatera Utara 22311
					</p>
					<button>
						<a href="https://api.whatsapp.com/send?phone=082272698831">
							<img src="image/download.jpg" alt="WhastsApp Icon">Hubungi Melalui WhastsApp
						</a>
					</button>
				</div>
				<div class="kontak-button">
				</div>
			</div>
			<div class="map-container" style="margin-left: 10px; margin-right: 10px;">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63784.2804652331!2d99.0039303888254!3d2.3307733651211784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e05c50cefa013%3A0xa3c2104aec28b3b5!2sTHESA%20ULOS!5e0!3m2!1sid!2sid!4v1684937777572!5m2!1sid!2sid"
					width="800" height="430" style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>

	</main>
	<footer>
		<p>&copy; 2023 Cilpacastra</p>
	</footer>
</body>

</html>