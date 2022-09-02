<?php

function cekPrima($angka){ // $angka inputan user
    if($angka == 1){
        return 0; // jika direturn disini, maka code dibawahnya tidak akan dijalankan
        // mengembalikan int 0
    }

    /*
     membuat perulangan untuk mencari bilangan prima

     Bilangan prima adalah bilangan yang habis dibagi dirinya sendiri.
     Contohnya 5, angka 5 hanya bisa habis dibagi oleh dirinya sendiri.
     Contoh lain angka 19, angka itu tidak bisa dibagi habis oleh angka 2, 3, 4, ... , 18 
     sampai dia bisa dibagi habis oleh angka 19 itu sendiri
     Jika angkanya bisa dibagi habis oleh angka lain selain angka tersebut, maka
     itu bukan bilangan prima
    */

    /**
     * var i = 2 karena jika var i-nya 1, maka ini akan selalu menghasilkan nilai true
     * dan program ini akan selalu mengembalikan int 0.
     * Mengapa demikian? karena code dibawah ini kan ada perulangan, jika $i nya 1, maka otomatis
     * inputan angka user akan dibagi habis oleh angka 1 yg dimana akan menghasilkan int 0.
     * Jika percabangannya true, maka code return 0 akan dijalankan dan 0, ini akan digunakan untuk
     * percabangan selanjutnya yaitu jika hasil dari function ini mengembalikan int 0, maka cetak teks 
     * "Bukan bilangan Prima"
     * 
     * Code dari perulangan dibawah ini berfungsi untuk mencari angka sisa bagi untuk angka inputan user
     * Jika user nginput angka 9, maka akan menjalankan code yg $angka/2, $angka-nya kan 9, jadi 9/2
     * dan hasilnya 4 (karena bilangan desimal tidak ditampilkan, 4.1 , 4.2, ..., 4.5 itu tidak ditampilkan diperulangan)
     * Maka percabangan if($angka % $i === 0) ini akan dicetak sebanyak $i <= $angka/2
     * dan dia akan mencari apakah angka yg diinputkan si user ini bisa dibagi habis oleh angka 2,3,4? jika
     * bisa dibagi habis, maka kembalikan int 0, jika tidak maka dia akan bernilai false dan loncat ke return 1
     * 
    */
    
    for($i = 2; $i <= $angka/2; ++$i){
        if($angka % $i === 0){
            return 0;
        }
    }
    return 1;
}

if(isset($_POST['kirim'])){ // kalau button yg name-nya 'kirim' dipencet, maka jalankan cade dibawah ini
    $angka = $_POST['angka']; // inputan user
    $hasil = cekPrima($angka); // output dari function cekPrima akan disimpan di var hasil
    // dan ini akan digunakan untuk ditampilkan di usernya
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Prima</title>
</head>
<body>
    <form action="" method="POST">
        Input angka <input type="number" name="angka">
        <button type="submit" name="kirim">Kirim</button>
    </form>

    <h3>
        <?php
        if(isset($_POST['kirim'])){ // kalau button-nya dipencet, jalankan code didalam sini
            if($hasil === 1){ // jika hasil dari function cekPrima mengembalikan int 1, maka dia akan mencetak teks Bilangan Prima
                // 
                echo "Bilangan Prima";
            }else{
                echo "Bukan Bilangan Prima";
            }
        }

        ?>
    </h3>
</body>
</html>