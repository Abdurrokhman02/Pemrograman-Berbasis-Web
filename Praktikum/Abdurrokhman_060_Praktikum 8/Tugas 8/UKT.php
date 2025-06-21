<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form UKT Mahasiswa</h1>
    <p>Masukkan data diri anda untuk melihat tagihan UKT</p>

    <form method="post" action="">
    NPM: <input type="number" name="NPM"><br>
    Nama: <input type="text" name="nama"><br>
    Prodi: <input type="text" name="prodi"><br>
    Semester: <input type="number" name="semester"><br>
    Biaya UKT: <input type="number" name="biaya"><br>
    <input type="submit" value="Proses">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NPM = $_POST["NPM"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];
    $semester = $_POST["semester"];
    $biaya = $_POST["biaya"];
    $diskon = "";

    if ($biaya >= 5000000){
        $diskon = 10;
        $total = $biaya - (($diskon/100) * $biaya);
    } elseif ($biaya >= 5000000 && $semester > 8) {
        $diskon = 15;
        $total = $biaya - (($diskon/100) * $biaya);
    } else {$diskon = 0;}


    echo "<h3>Hasil:</h3>";
    echo "NPM       : " . htmlspecialchars($NPM) . "<br>";
    echo "Nama      : " . htmlspecialchars($nama) . "<br>";
    echo "Prodi     : " . htmlspecialchars($prodi) . "<br>";
    echo "Semester  : " . htmlspecialchars($semester) . "<br>";
    echo "Biaya UKT : " . htmlspecialchars($biaya) . "<br>";
    echo "Diskon    : " . $diskon . " %<br>";
    echo "Yang Harus Dibayar : " . $total;
    }
    ?>
</body>
</html>