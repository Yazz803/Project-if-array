<?php

$barang = [
    [
        'produk' => 'televisi',
        'diskon' => 15,
        'harga' => 1600000
    ],
    [
        'produk' => 'kulkas',
        'diskon' => 30,
        'harga' => 3000000
    ],
    [
        'produk' => 'komputer',
        'diskon' => 0,
        'harga' => 2300000
    ]
];

// kalau produk ini jumlahnya segini, maka kalikan harga dengan jumlah produk dan didiskon
if(isset($_POST['kirim'])){
    $produk = $_POST['barang'];
    $jmlProduk = $_POST['totalbarang'];

    foreach($barang as $bar){
        if($bar['produk'] === $produk){
            $produkDiskon = $bar['diskon']; // buat nampilin angka diskon di client

            $totalHarga = ($jmlProduk * $bar['harga']);
            $hasilDiskon = $totalHarga - ($totalHarga * $bar['diskon'] / 100);
        }
    }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek if-array</title>
</head>
<body>
    <form action="" method="POST">
        <table border="1" cellspacing="2" cellpadding="2">
            <tr>
                <td>Barang</td>
                <td>
                    <select name="barang" id="">
                        <?php foreach($barang as $bar) :?>
                            <option value="<?= $bar['produk'] ;?>"><?= $bar['produk'] ;?></option>
                        <?php endforeach ;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Total barang</td>
                <td><input type="number" name="totalbarang"></td>
            </tr>
            <tr><td><button type="submit" name="kirim">Kirim</button></td></tr>
        </table>
    </form>

    <?php if(isset($_POST['kirim'])) :?>
        <h3>
            <?= $_POST['barang'] . " X " . $_POST['totalbarang'] . " = Rp. " . number_format($totalHarga) ;?>
            . Setelah diskon <?= $produkDiskon ;?>%  harganya menjadi Rp. <?= number_format($hasilDiskon) ;?>
        </h3>
    <?php endif ;?>
</body>
</html>