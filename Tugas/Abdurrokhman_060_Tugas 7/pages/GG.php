<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="angka">Angka:</label>
        <input type="text" name="angka" id="angka"><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>

<?php
    echo "";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $angka = $_POST['angka'];

        $ganjil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
        echo $ganjil;
    }
?>