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
		<h1>ULOS SITOLUTUHO</h1>
		<h2>ᯥᯞ᯲oᯘ᯲ ᯘᯪᯖ᯲oᯞᯮᯖᯮᯱo</h2>
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
						<img src='ulos/sitolutuho.jpg' />
					</div>
					<p>
						<dd><b>Sumber Gambar:</b>
							<p>Buku Pesona Kain Ulos Danau Toba (Threes Emir & Samuel Wattimena)</p>
						</dd>
					</p>
					<p>
						<dd><b>Referensi:</b>
							<p><a
									href="https://www.del.ac.id/people/arlinta/files/09a_artepolis_paper.pdf">https://www.del.ac.id/people/arlinta/files/09a_artepolis_paper.pdf</a>
							</p>
						</dd>
					</p>
				</div>
				<div class="kanan">
					<p>Ulos ini sangat mirip dengan Ulos Sibolang yang berwarna biru, hitam, dan putih. Namun, jenis ini
						memiliki pola yang lebih kompak yang membutuhkan lebih banyak tenaga untuk menenun sehingga
						harganya lebih tinggi. Ulos ini telah digunakan secara luas sebagai aksesoris, ikat kepala, dan
						selendang untuk wanita. Dalam upacara adat Batak, itu diberikan sebagai hadiah dari orang tua
						kepada anak perempuannya.</p>
					<p>
						Kain ini sering diberikan sebagai hadiah dari orang tua kepada anak perempuannya dalam upacara
						adat Batak. Pemberian Ulos Sitolutuho melambangkan rasa sayang, kasih sayang, dan kepedulian
						orang tua terhadap anak perempuan mereka. Ulos Sitolutuho juga dianggap sebagai lambang
						keindahan, keanggunan, dan kehormatan bagi pemakainya.
					</p>
					<p>Kain ini tidak hanya memiliki nilai estetika yang tinggi, tetapi juga mencerminkan hubungan
						antara anggota keluarga, nilai-nilai kebersamaan, dan rasa hormat terhadap tradisi dan leluhur.
					</p>
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