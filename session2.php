<?php

session_start();

if(isset($_POST['kirim'])){
	// $nama = $_POST['nama'];
	// $nis = $_POST['nis'];
	// $rombel = $_POST['rombel'];
	// $rayon = $_POST['rayon'];

	$data = [
		[
		'nama' => $_POST['nama'],
		'nis' => $_POST['nis'],
		'rombel' => $_POST['rombel'],
		'rayon' => $_POST['rayon']
		]
	];

	$_SESSION['dataSiswa'] = $data;
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contoh Session Array</title>
</head>
<body>
	<form method="POST" action="">
		Nama : <input type="text" name="nama"> <br>
		nis : <input type="text" name="nis"> <br>
		rombel : <input type="text" name="rombel"> <br>
		rayon : <input type="text" name="rayon"> <br>
		<button type="submit" name="kirim">Kirim</button>
	</form>

<?php if(isset($_POST['kirim']))  : ?>
	<?php foreach($_SESSION['dataSiswa'] as $dataSiswa) : ?>
		<h3>Nama : <?= $dataSiswa['nama'] ;?></h3>
		<h3>nis : <?= $dataSiswa['nis'] ;?></h3>
		<h3>rombel : <?= $dataSiswa['rombel'] ;?></h3>
		<h3>rayon : <?= $dataSiswa['rayon'] ;?></h3>
	<?php endforeach ;?>
<?php endif ;?>
</body>
</html>