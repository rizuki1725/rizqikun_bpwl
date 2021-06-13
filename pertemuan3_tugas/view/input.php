<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css" />
    <title>PMB PCR</title>
</head>
<body background=1.png>
<h1>Panitia Penerimaan Mahasiswa Baru</h1>
<h2>Politeknik Caltex Riau</h2>

<form action="../controller/proses.php?aksi=tambah" method="post">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td><input type="text" name="prodi"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>