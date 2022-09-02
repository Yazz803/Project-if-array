<?php

$hasilAkhir = 0;

if(isset($_POST['kirim'])){
    $bb = $_POST['bb']; // berat badan
    $tb= $_POST['tb'] / 100;  // tinggi badan (cm) diubah menjadi (m)

    $hasilIMT = $bb / pow($tb, 2); // $tb ini akan dihitung pangkat 2

    $hasilAkhir = number_format($hasilIMT, 1);
}



if($hasilAkhir < 17){
    $kategori = 'kurus1';
}elseif($hasilAkhir >= 17 && $hasilAkhir < 18.4){
    $kategori = 'kurus2';
}elseif($hasilAkhir >= 18.5 && $hasilAkhir < 25){
    $kategori = 'normal';
}elseif($hasilAkhir <= 25.1 && $hasilAkhir <= 27){
    $kategori = 'gemuk1';
}elseif($hasilAkhir > 27 && $hasilAkhir < 60){
    $kategori = 'gemuk2';
}else{
    $kategori = 'gemuk3';
}


switch ($kategori) {
    case 'kurus1':
        $indikasiIMT = "Kekurangan Berat Badan tingkat berat";
        break;
    case 'kurus2':
        $indikasiIMT = "Kekurangan Berat Badan tingkat ringan";
        break;
    case 'normal':
        $indikasiIMT = "Berat Badan Normal";
        break;
    case 'gemuk1':
        $indikasiIMT = "Kelebihan Berat Badan tingkat ringan";
        break;
    case 'gemuk2':
        $indikasiIMT = "Kelebihan Berat Badan tingkat berat";
        break;
    case 'gemuk3':
        $indikasiIMT = "TURUNIN BERAT BADAN LU WOI!";
        break;
    
    default:
        $indikasiIMT = "Bunda Rahma";
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program IMT</title>
</head>
<body>
    <form action="" method="POST">
        Masukan Berat Badan <br>
        <input type="number" name="bb"> <br>
        Masukan Tinggi Badan (cm)<br>
        <input type="number" name="tb"> <br>
        <button type="submit" name="kirim">kirim</button>
    </form>

    <h3><?= isset($_POST['kirim']) ? "IMT kamu : $hasilAkhir" : '' ;?></h3>
    <h3><?= isset($_POST['kirim']) ? "Pesan : $indikasiIMT" : '' ;?></h3>

</body>
</html>