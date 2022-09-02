

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus Perulangan</title>
</head>
<body>
    <form action="" method="POST">
        Mulai
        <input type="number" name="angka1">
        sampai
        <input type="number" name="angka2">
        <button type="submit" name="kirim">Submit</button>
    </form>

    <?php
    
    if(isset($_POST['kirim'])){
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];

        if($angka1 >= $angka2 && $angka1 < 0){
            echo "Bilangan Pertama tidak boleh lebih kecil dari 0 dan dibawah Bilangan Kedua";
        }else{
            for($angka1;$angka1<=$angka2;$angka1++){
                $hasilPerulangan = $angka1;
                echo "Perulangn ke-$hasilPerulangan <br>";
            }
        }
    }

    ?>

</body>
</html>