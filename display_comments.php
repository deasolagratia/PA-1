<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "komentar_db";

//melakukan koneksi ke database menggunakan fungsi mysqli_connect()
$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

//menginisialisasi query SQL untuk mengambil semua data dari tabel komentar.
$query = "SELECT * FROM komentar";
//Menjalankan query SQL menggunakan fungsi mysqli_query() untuk mengambil hasil data dari tabel komentar.
$result = mysqli_query($koneksi, $query);

//Kode ini melakukan perulangan while untuk setiap baris data yang ditemukan dari tabel komentar. Variabel $row akan berisi data komentar dalam bentuk array asosiatif.
while ($row = mysqli_fetch_assoc($result)) {
    //mencetak tag div dengan kelas "comment" untuk mengelompokkan komentar.
    echo "<div class='comment'>";
    //Kode ini mencetak nama pengguna dan isi komentar.
    echo "<strong>" . $row['name'] . "</strong>: " . $row['comment'];
    //mencetak label "Reply" yang akan berfungsi sebagai tanda untuk memunculkan/menyembunyikan form balasan.
    echo "<label for='reply-checkbox-" . $row['id'] . "' class='reply-label'>Reply</label>";
    //Kode ini mencetak checkbox yang akan digunakan untuk memunculkan/menyembunyikan form balasan ketika checkbox tersebut dicentang/dilepas.
    echo "<input type='checkbox' id='reply-checkbox-" . $row['id'] . "' class='reply-checkbox'>";

    // menyimpan ID komentar saat ini ke dalam variabel $comment_id untuk digunakan dalam query balasan.
    $comment_id = $row['id'];
    //menginisialisasi query SQL untuk mengambil balasan dari tabel balasan berdasarkan ID komentar.
    $reply_query = "SELECT * FROM balasan WHERE komentar_id = '$comment_id'";
    //menjalankan query SQL untuk mengambil hasil balasan dari tabel balasan.
    $reply_result = mysqli_query($koneksi, $reply_query);

    // melakukan perulangan while untuk setiap baris data yang ditemukan dari tabel balasan. Variabel $reply_row akan berisi data balasan dalam bentuk array asosiatif.
    while ($reply_row = mysqli_fetch_assoc($reply_result)) {
        echo "<div class='reply'>";
        echo "<strong>" . $reply_row['name'] . "</strong>: " . $reply_row['reply'];
        echo "</div>";
    }

    // mencetak tag div dengan kelas "reply-form" untuk mengelompokkan form balasan.
    echo "<div class='reply-form'>";
    //mencetak tag form dengan atribut action yang mengarah ke "process_reply.php". Ini menentukan ke mana data form akan dikirim saat form tersebut disubmit.
    echo "<form action='process_reply.php' method='POST'>";
    //mencetak input dengan tipe "hidden" yang digunakan untuk menyimpan ID komentar dalam sebuah input tersembunyi. Nilai ID komentar diambil dari variabel $comment_id yang diperoleh sebelumnya.
    echo "<input type='hidden' name='komentar_id' value='" . $comment_id . "'>";
    echo "<label for='name'>Nama:</label>";
    echo "<input type='text' id='name' name='name' required>";
    echo "<label for='reply'>Balasan:</label>";
    echo "<textarea id='reply' name='reply' required></textarea>";
    echo "<button type='submit'>Balas</button>";
    echo "</form>";
    echo "</div>";

    echo "</div>";
}
?>