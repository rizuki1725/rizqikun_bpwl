<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css" />
    <title>PMB PCR</title>
</head>
<body background=1.png>
<?php
include '../model/database.php';
$db = new database();
?>

<h1>Panitia Penerimaan Mahasiswa Baru</h1>
<h2>Politeknik Caltex Riau</h2>

<form action="../controller/proses.php?aksi=update" method="post">
	<?php
	foreach($db->edit($_GET['id']) as $d){
	?>
	<table>
		<tr>
			<td>Nama</td>
			<td>
				<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
				<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
			</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>
				<input type="text" name="prodi" value="<?php echo $d['prodi'] ?>">
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="text" name="email" value="<?php echo $d['email'] ?>">
			</td>
		</tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
		</tr>
</table>
<?php 
} 
?>
</form>
</body>
</html>