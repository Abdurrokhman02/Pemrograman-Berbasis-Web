<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kendaraan</title>
</head>
<body>
    <form method="post">
        <label for="roda">Jumlah Roda:</label>
        <input type="text" name="roda" id="roda"><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $roda = $_POST['roda'];

        switch ($roda){
            case 1:
                echo "Sepeda roda 1";
                break;
            
            case 2:
                echo "Motor";
                break;
                
            case 3:
                echo "Cator";
                break;
            
            case 4:
                echo "Mobil";
                break;
            
            default:
                echo "Kendaraan tidak dikenali";
        }
    }
?>