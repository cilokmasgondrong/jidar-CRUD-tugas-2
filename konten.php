<?php
//session_start(); // Anda perlu memulai sesi sebelum mengakses $_SESSION

if (!isset($_GET['page'])){
    if (isset($_SESSION['username'])) {
        echo "Selamat, anda berhasil login " . $_SESSION['username'] . "!";
        echo "<br>";
        echo "<a href='logout.php'>Logout</a>";
    } else {
        echo "Anda belum login!";
    }
} elseif ($_GET['page'] == 'siswa'){
    include "siswa.php";
} else {
    echo "Maaf, halaman tidak ditemukan!";
}
?>
