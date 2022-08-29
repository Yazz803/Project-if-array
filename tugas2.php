<?php

if(isset($_POST['kirim'])){
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $quis = $_POST['quis'];

    $hasil = ($uts + $uas + $tugas + $quis) / 4;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rata rata</title>
</head>
<body>
    <form action="" method="POST">
        Nilai UTS : <input type="number" name="uts"><br>
        Nilai UAS : <input type="number" name="uas"><br>
        Nilai Tugas : <input type="number" name="tugas"><br>
        Nilai Quis : <input type="number" name="quis"><br>
        <button type="submit" name="kirim">Kirim</button>
    </form>

    <h3><?= isset($_POST['kirim']) ? "Nilai rata rata kamu adalah $hasil" : '' ;?></h3>
</body>
</html>