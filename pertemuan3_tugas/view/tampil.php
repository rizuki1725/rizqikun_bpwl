<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css" />
    <title>2021 PMB PCR</title>
</head>
<body background=1.png>
<?php
include '../model/database.php';
$db = new database();
?>
<h1>Panitia Penerimaan Mahasiswa Baru</h1>
<h2>Politeknik Caltex Riau</h2>

<a href="input.php">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Program Studi</th>
		<th>Email</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
		?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['prodi']; ?></td>
		<td><?php echo $x['email']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="../controller/proses.php?id=<?php echo $x['id'];?>&aksi=hapus">Hapus</a>
		</td>
	</tr>
<?php
}
?>
