<!DOCTYPE html>
<html>
<head>
    <title>Navigasi</title>
</head>
<body>
    <h1>Navigasi Halaman</h1>
    <h3>Tugas 7</h3>
    <p>Pilih Mau ke mana</p>
    <nav>
        <a href="?page=kendaraan">Kendaraan</a> |
        <a href="?page=genap">Genap</a> |
        <a href="?page=hewan">Hewan</a> |
        <a href="?page=GG">Ganjil Genap</a> |
        <a href="?page=latihan_nilai">Latihan Nilai</a> |
        <a href="?UKT">Diskon UKT</a>
    </nav>

    <hr>

    <div>
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $allowed_pages = ['kendaraan', 'genap', 'hewan', 'GG'];
            $Tugas7 = ['latihan_nilai', 'UKT'];

            if (in_array($page, $allowed_pages)) {
                include "pages/$page.php";
            } elseif (in_array($page, $Tugas7)) {
                include "Tugas 8/$page.php";
            } else {
                echo "Halaman tidak ditemukan.";
            }
        } else {
            echo "Silakan pilih menu di atas.";
        }
        ?>
    </div>
</body>
</html>
