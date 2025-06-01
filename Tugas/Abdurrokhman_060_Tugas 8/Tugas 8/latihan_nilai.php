<!DOCTYPE html>
<html>
<head>
    <title>Latihan Nilai</title>
</head>
<body>
<h1>Form Latihan Nilai</h1>
<p>Masukkan nama dan nilai mahasiswa di bawah ini!</p>

<form method="post" action="">
    Nama: <input type="text" name="nama"><br>
    Nilai: <input type="number" name="nilai"><br>
    <input type="submit" value="Proses">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nilai = $_POST["nilai"];
    $predikat = "";
    $status = "";

    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
    } elseif ($nilai >= 75 && $nilai <= 84) {
        $predikat = "B";
    } elseif ($nilai >= 65 && $nilai <= 74) {
        $predikat = "C";
    } elseif ($nilai >= 50 && $nilai <= 64) {
        $predikat = "D";
    } elseif ($nilai >= 0 && $nilai <= 49) {
        $predikat = "E";
    } else {
        $predikat = "Tidak valid";
    }

    if ($predikat == "A" || $predikat == "B" || $predikat == "C") {
        $status = "Lulus";
    } elseif ($predikat == "D" || $predikat == "E") {
        $status = "Tidak Lulus";
    } else {
        $status = "-";
    }

    echo "<h3>Hasil:</h3>";
    echo "Nama : " . htmlspecialchars($nama) . "<br>";
    echo "Nilai : " . htmlspecialchars($nilai) . "<br>";
    echo "Predikat : " . $predikat . "<br>";
    echo "Status : " . $status;
}
?>

</body>
</html>
