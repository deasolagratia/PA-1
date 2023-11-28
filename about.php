<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<!--Mendefinisikan set karakter yang digunakan dalam dokumen sebagai UTF-8, yang merupakan set karakter universal yang mendukung banyak bahasa. -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Mengatur tampilan halaman web agar sesuai dengan lebar perangkat dan skala awal.-->
	<title>Cilpacastra: Batak Toba</title>
	<link rel="stylesheet" href="test.css">

</head>

<body>
	<header>
		<h1>TIM KAMI</h1>
		<h1>ᯖᯪᯔ᯲ ᯃᯔᯪ</h1>
	</header>
	<div class="sidebar">
		<!--Menampilkan logo website sebagai tautan ke halaman "home.php".-->
		<a href="home.php"><img src="image/logo.png" alt="Logo Website"></a>
		<br>
		<p>
			<!--Membuat form dengan metode GET yang akan dikirimkan ke halaman "search_result.php" ketika disubmit.-->
		<form method="GET" action="search_result.php" class="search-form">
			<input type="text" name="keyword" placeholder="Cari...">
			<!--Menambahkan input teks untuk kata kunci pencarian dengan placeholder "Cari...".-->
			<input type="submit" value="Cari">
			<!--Menampilkan tombol "Cari" yang digunakan untuk mengirimkan formulir pencarian.-->
		</form>
		</p>
		<p><a href="home.php">Home</a></p>

		<div class="dropdown">
			<!--Bagian pertama dari menu dropdown, berisi tautan yang mengarah ke halaman terkait.-->
			<section>

				<p><a href="#">Ulos</a></p>
			</section>
			<section class="dropdown-menu"> <!--Bagian kedua dari menu dropdown, berisi daftar tautan submenu.-->
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
		<link rel="stylesheet" href="about.css">
		<ul>
			<li>
				<img src="image/sari pardede.jpg" alt="Sari Pardede">
				<dd>
					<h3>SARI MELATI YOSEPHIN PARDEDE
						<p>13322051</p>
					</h3>
				</dd>

			</li>
			<li>
				<img src="image/dea simamora.jpg" alt="Dea Simamora">
				<dd>
					<h3>DEA SOLAGRATIA SIMAMORA
						<p>13322040</p>
					</h3>
				</dd>
			</li>
			<li>
				<img src="image/maryeyen sirait.jpg" alt="Maryeyen Sirait">
				<dd>
					<h3>MARYEYEN SIRAIT
						<p>13322042</p>
					</h3>
				</dd>
			</li>
		</ul>
		<hr>
		<br>
		<div class="container">
			<div class="article">
				<div class="kiri">
					<div class='slide'>
						<input type='radio' name='radio-set' checked='checked' />
						<img src='ulos/rujat.jpg' />
						<input type='radio' name='radio-set' checked='checked' />
						<img src='rumahbolon/rb2.jpg' />
						<input type='radio' name='radio-set' checked='checked' />
						<img src='sortali/sortali1.jpg' />
						<input type='radio' name='radio-set' checked='checked' />
						<img src='sortali/sortali2.jpg' />
						<input type='radio' name='radio-set' checked='checked' />
						<img src='tandok/t5.png' />
					</div>
					<div style="display: flex; justify-content: center;">
						<div class="logo">
							<a href="https://www.instagram.com/cilpacastra15/">
								<img src="image/insta.jpg" alt="Logo Perusahaan" class="logo">
							</a>
						</div>
						<h3>OFC IG CILPACASTRA</h3>
					</div>
				</div>

				<div class="kanan">
					<h1>Tentang Kami</h1>

					<p>Selamat datang di halaman "About Us" website kami! Kami dengan bangga mempersembahkan kepada Anda
						sebuah platform informasi yang mengangkat peninggalan sejarah Batak Toba yang masih dipakai
						hingga saat ini.</p>

					<h2>Peninggalan Sejarah Batak Toba</h2>

					<p>Di dalam kebudayaan Batak Toba, terdapat beberapa peninggalan sejarah yang hingga saat ini masih
						dipertahankan dan menjadi bagian integral dari kehidupan masyarakat Batak Toba. Berikut adalah
						beberapa di antaranya:</p>

					<h3>1. Ulos</h3>
					<p>Ulos merupakan kain tradisional yang sangat penting dalam budaya Batak Toba. Kain ini memiliki
						makna mendalam dan melambangkan kebanggaan, status sosial, dan hubungan kekerabatan. Ulos juga
						digunakan dalam upacara adat, pernikahan, dan acara penting lainnya. Keindahan dan keunikan
						motif-motif pada ulos mencerminkan keterampilan tinggi para pengrajin tradisional Batak Toba.
					</p>

					<h3>2. Rumah Bolon</h3>
					<p>Rumah Bolon adalah rumah adat tradisional suku Batak Toba. Rumah ini memiliki struktur yang kuat
						dan kaya dengan simbol-simbol kebudayaan. Rumah Bolon digunakan sebagai tempat tinggal, tempat
						berkumpulnya keluarga, dan tempat dilangsungkannya upacara adat. Arsitektur rumah ini juga
						mencerminkan hubungan yang erat dengan alam dan kepercayaan spiritual masyarakat Batak Toba.</p>

					<h3>3. Sortali</h3>
					<p>Sortali adalah sejenis ikat kepala berwarna merah dan dilapisi emas yang digunakan orang batak
						pada acara-acara adat batak (biasanya dipakai pengantin Ketika pesta pernikahan, dan digunakan
						oleh keluarga/pomparan orang yang meninggal). Sortali bermakna sakralnya/sucinya pernikahan
						dalam budaya Batak. Memiliki makna kehormatan, kecantikan bagi pengantin dan kebaikan bagi
						pasangan yang melaksanakan pernikahan dan seluruh keluarga..</p>

					<h3>4. Tandok</h3>
					<p>Tandok beras pada budaya Batak Toba memiliki peran penting dalam kehidupan sehari-hari, terutama
						dalam menyimpan dan mengatur persediaan beras. Tandok juga digunakan dalam acara-acara adat,
						pernikahan, dan upacara lainnya sebagai simbol kemakmuran, keberlimpahan, dan persatuan
						keluarga.</p>

					<p>Kami sangat menghargai dan berkomitmen untuk melestarikan peninggalan sejarah ini. Melalui
						website ini, kami berupaya menggambarkan dengan jelas dan mendetail tentang peninggalan sejarah
						Batak Toba yang masih relevan dalam kehidupan sehari-hari. Kami melakukan penelitian, dan
						mengumpulkan data dari sumber-sumber terpercaya untuk memastikan keaslian dan keakuratan
						informasi yang kami
						sajikan.</p>

					<p>Jika Anda memiliki pertanyaan atau ingin berkontribusi, jangan ragu untuk menghubungi kami.
						Bersama-sama, mari kita jaga dan memperkenalkan peninggalan sejarah Batak Toba kepada dunia agar
						tetap hidup dan berkembang.</p>

				</div>
			</div>
		</div>
	</main>
	<br>
	<br>
	<footer>
		<p>&copy; 2023 PA1 Kel-15. All rights reserved.</p>
	</footer>
</body>

</html>