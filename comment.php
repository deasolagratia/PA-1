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
        <h1>HALAMAN KOMENTAR</h1>
        <h1>ᯂᯞᯔᯉ᯲ ᯃ᯲oᯔ᯲eᯉ᯲ᯖᯒ᯲</h1>
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
        <link rel="stylesheet" href="comment.css">
        <br>
        <br>
        <!--Ini adalah elemen div dengan kelas "container" yang digunakan untuk mengelompokkan elemen-elemen dalam satu blok.-->
        <div class="container">
            <!--elemen form yang digunakan untuk mengirimkan data komentar ke skrip "process_comment.php" untuk diproses dengan metode POST.-->
            <form action="process_comment.php" method="POST">
                <!-- Ini adalah elemen label yang digunakan untuk memberikan label "Nama" untuk input berikutnya.-->
                <label for="name">Nama:</label>
                <!--elemen input dengan tipe "text" yang digunakan untuk memasukkan nama pengguna. Atribut "id" digunakan untuk menghubungkan label dengan input, sedangkan atribut "name" digunakan untuk mengidentifikasi input ini dalam pengiriman data form. Atribut "required" digunakan untuk membuat input ini menjadi wajib diisi sebelum mengirimkan form.-->
                <input type="text" id="name" name="name" required>
                <!--digunakan untuk memberikan label "Komentar" untuk textarea berikutnya.-->
                <label for="comment">Komentar:</label>
                <!--elemen textarea yang digunakan untuk memasukkan isi komentar. Atribut "id" dan "name" memiliki fungsi yang sama seperti pada elemen input sebelumnya. Atribut "required" digunakan untuk membuat textarea ini menjadi wajib diisi sebelum mengirimkan form.-->
                <textarea id="comment" name="comment" required></textarea>
                <!--elemen button yang digunakan untuk mengirimkan form. Ketika tombol ini ditekan, data dalam form akan dikirimkan ke skrip "process_comment.php" untuk diproses.-->
                <button type="submit">Kirim Komentar</button>
            </form>
            <!--Ini adalah elemen div dengan id "comments" yang digunakan untuk menampilkan daftar komentar. Di dalamnya, kita menggunakan PHP untuk memasukkan konten dari file "display_comments.php", yang akan menampilkan daftar komentar yang telah disimpan dalam database.-->
            <div id="comments">
                <!--menyisipkan konten dari file "display_comments.php"untuk menampilkan daftar komentar pada halaman komentar-->
                <?php include 'display_comments.php'; ?>
            </div>
        </div>
    </main>
</body>

</html>