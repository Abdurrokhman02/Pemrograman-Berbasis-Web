<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Total Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .box {
            width: 400px;
            border: 1px solid black;
            padding: 20px;
            margin: 50px auto;
        }
        .box h2 {
            text-align: center;
        }
        .box hr {
            margin: 10px 0;
        }
        .box b {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Perhitungan Total Pembelian (Dengan Array)</h2>
    <hr>

    <?php
    // Konstanta pajak
    define("PAJAK", 0.10);

    // Data barang
    $barang = array(
        "nama" => "Keyboard",
        "harga" => 150000
    );

    // Jumlah beli
    $jumlah = 2;

    // Hitung total
    $total = $barang["harga"] * $jumlah;
    $pajak = $total * PAJAK;
    $totalBayar = $total + $pajak;

    // Tampilkan hasil
    echo "Nama Barang: " . $barang["nama"] . "<br>";
    echo "Harga Satuan: Rp " . number_format($barang["harga"], 0, ',', '.') . "<br>";
    echo "Jumlah Beli: $jumlah<br>";
    echo "Total Harga (Sebelum Pajak): Rp " . number_format($total, 0, ',', '.') . "<br>";
    echo "Pajak (10%): Rp " . number_format($pajak, 0, ',', '.') . "<br>";
    echo "<b>Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.') . "</b>";
    ?>
</div>

</body>
</html>
