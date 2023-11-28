<!-- search_result.php -->
<?php
//memeriksa apakah parameter 'keyword' telah diterima melalui metode GET. 
//Metode GET adalah salah satu cara untuk mengirim data melalui URL

//Jika parameter 'keyword' telah diterima, maka nilai dari parameter tersebut 
//disimpan dalam variabel $keyword menggunakan sintaks $_GET['keyword'].
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    //kode tersebut memeriksa apakah kata "about" terdapat dalam nilai $keyword menggunakan fungsi stripos(). 
    //Fungsi stripos() digunakan untuk mencari kemunculan pertama dari sebuah substring dalam sebuah string, 
    //dan bersifat case-insensitive (tidak memperhatikan huruf besar atau kecil).

    //Jika kata "about" ditemukan dalam nilai $keyword, maka kondisi if (stripos($keyword, 'about') !== false) 
    //akan bernilai true.
    if (stripos($keyword, 'about') !== false) {
        //Jika kondisi tersebut benar, maka skrip akan melakukan pengalihan (redirect) ke halaman "about.php" menggunakan fungsi header(). 
        //Fungsi header() digunakan untuk mengirim header HTTP, dalam hal ini header 'Location' digunakan untuk memberitahu browser 
        //agar mengarahkan pengguna ke halaman yang ditentukan.
        header('Location: about.php');
        //perintah exit digunakan untuk menghentikan eksekusi script secara langsung.
        exit;
    } elseif (stripos($keyword, 'tentang') !== false) {
        header('Location: about.php');
        exit;
    } elseif (stripos($keyword, 'antak') !== false) {
        header('Location: antakantak.php');
        exit;
    } elseif (stripos($keyword, 'bintang') !== false) {
        header('Location: bintangmaratur.php');
        exit;
    } elseif (stripos($keyword, 'bintang maratur') !== false) {
        header('Location: bintangmaratur.php');
        exit;
    } elseif (stripos($keyword, 'bolean') !== false) {
        header('Location: bolean.php');
        exit;
    } elseif (stripos($keyword, 'cicak') !== false) {
        header('Location: cicak.php');
        exit;
    } elseif (stripos($keyword, 'gorga') !== false) {
        header('Location: gorga.php');
        exit;
    } elseif (stripos($keyword, 'harungguan') !== false) {
        header('Location: harungguan.php');
        exit;
    } elseif (stripos($keyword, 'harungguan lobu lobu') !== false) {
        header('Location: harungguanlobu.php');
        exit;
    } elseif (stripos($keyword, 'home') !== false) {
        header('Location: home.php');
        exit;
    } elseif (stripos($keyword, 'jenis') !== false) {
        header('Location: jenis.php');
        exit;
    } elseif (stripos($keyword, 'jenis') !== false) {
        header('Location: jenis.php');
        exit;
    } elseif (stripos($keyword, 'kepala') !== false) {
        header('Location: kerbau.php');
        exit;
    } elseif (stripos($keyword, 'kerbau') !== false) {
        header('Location: kerbau.php');
        exit;
    } elseif (stripos($keyword, 'komentar') !== false) {
        header('Location: comment.php');
        exit;
    } elseif (stripos($keyword, 'comment') !== false) {
        header('Location: comment.php');
        exit;
    } elseif (stripos($keyword, 'pandapot') !== false) {
        header('Location: comment.php');
        exit;
    } elseif (stripos($keyword, 'lobu') !== false) {
        header('Location: lobulobu.php');
        exit;
    } elseif (stripos($keyword, 'lobu lobu') !== false) {
        header('Location: lobulobu.php');
        exit;
    } elseif (stripos($keyword, 'mangiring') !== false) {
        header('Location: mangiring.php');
        exit;
    } elseif (stripos($keyword, 'marinjam') !== false) {
        header('Location: marinjamsisi.php');
        exit;
    } elseif (stripos($keyword, 'marinjam sisi') !== false) {
        header('Location: marinjamsisi.php');
        exit;
    } elseif (stripos($keyword, 'pinarlobu') !== false) {
        header('Location: pinarlobu.php');
        exit;
    } elseif (stripos($keyword, 'pinar lobu lobu') !== false) {
        header('Location: pinarlobu.php');
        exit;
    } elseif (stripos($keyword, 'pinuncaan') !== false) {
        header('Location: pinuncaan.php');
        exit;
    } elseif (stripos($keyword, 'ragi hidup') !== false) {
        header('Location: ragihidup.php');
        exit;
    } elseif (stripos($keyword, 'ragi hotang') !== false) {
        header('Location: ragihotang.php');
        exit;
    } elseif (stripos($keyword, 'ragi pakko') !== false) {
        header('Location: ragipakko.php');
        exit;
    } elseif (stripos($keyword, 'ragi huting') !== false) {
        header('Location: ragihuting.php');
        exit;
    } elseif (stripos($keyword, 'rujat') !== false) {
        header('Location: rujat.php');
        exit;
    } elseif (stripos($keyword, 'rumah') !== false) {
        header('Location: rumahbolon.php');
        exit;
    } elseif (stripos($keyword, 'rumah bolon') !== false) {
        header('Location: rumahbolon.php');
        exit;
    } elseif (stripos($keyword, 'sadum') !== false) {
        header('Location: sadum.php');
        exit;
    } elseif (stripos($keyword, 'ulos') !== false) {
        header('Location: sejarah.php');
        exit;
    } elseif (stripos($keyword, 'sejarah') !== false) {
        header('Location: sejarah.php');
        exit;
    } elseif (stripos($keyword, 'sibolang') !== false) {
        header('Location: sibolang.php');
        exit;
    } elseif (stripos($keyword, 'simarhapisoran') !== false) {
        header('Location: simarhapisoran.php');
        exit;
    } elseif (stripos($keyword, 'simarheter') !== false) {
        header('Location: simarheter.php');
        exit;
    } elseif (stripos($keyword, 'simpar') !== false) {
        header('Location: simpar.php');
        exit;
    } elseif (stripos($keyword, 'singa') !== false) {
        header('Location: singa.php');
        exit;
    } elseif (stripos($keyword, 'sirara') !== false) {
        header('Location: sirara.php');
        exit;
    } elseif (stripos($keyword, 'rujat') !== false) {
        header('Location: rujat.php');
        exit;
    } elseif (stripos($keyword, 'sitolutuho') !== false) {
        header('Location: sitolutuho.php');
        exit;
    } elseif (stripos($keyword, 'sortali') !== false) {
        header('Location: sortali.php');
        exit;
    } elseif (stripos($keyword, 'sumbat') !== false) {
        header('Location: sumbat.php');
        exit;
    } elseif (stripos($keyword, 'suri') !== false) {
        header('Location: surisuri.php');
        exit;
    } elseif (stripos($keyword, 'suri suri') !== false) {
        header('Location: surisuri.php');
        exit;
    } elseif (stripos($keyword, 'tandok') !== false) {
        header('Location: tandok.php');
        exit;
    } elseif (stripos($keyword, 'tumtuman') !== false) {
        header('Location: tumtuman.php');
        exit;
    } elseif (stripos($keyword, 'odap') !== false) {
        header('Location: ukiran.php');
        exit;
    } elseif (stripos($keyword, 'odap odap') !== false) {
        header('Location: ukiran.php');
        exit;
    }
}

?>

<div class="search-results">
    <link rel="stylesheet" href="search.css">
    <div class="result-box">
        <h2>Hasil Pencarian Tidak Ditemukan</h2>
        <p>Silakan coba kata kunci lain.</p>
        <button onclick="window.location.href = 'home.php';">Kembali ke beranda</button>
    </div>
</div>

<footer>
    <p>&copy; 2023 PA1 Kel-15. All rights reserved.</p>
</footer>