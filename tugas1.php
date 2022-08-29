<?php

if(isset($_POST['kirim'])){
    $angka = $_POST['angka'];
    $angka = $_POST['angka2'];

    if($angka > 10 || $angka > 10){
        $hasil = "Bilangan kamu harus kurang dari 10";
    }else{
        $hasil = $angka + $angka1;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<body>
    <form action="" method="POST">
        Angka kamu : <input type="number" name="angka">
        Angka kamu2 : <input type="number" name="angka2">
        <button type="submit" name="kirim">Kirim</button>
    </form>

    <h3><?= isset($_POST['kirim']) ? $hasil : '' ;?></h3>
</body>
</html>