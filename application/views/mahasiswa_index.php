<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa Index</title>
</head>
<body>

	<h1>Mahasiswa</h1>
	<h3>Selamat datang,<?= $nama_lengkap?></h3>
	<p>nim saya <?= $nim?></p>
	<hr>
	<a href="<?= site_url('mahasiswa_tambah') ?>">tambah</a>
	<table border="1">
		<tr>
			<td>nim</td>
			<td>nama mahasiswa</td>
		</tr>
		<?php foreach ($mahasiswa as $key): ?> 
			<tr>
				<td><?= $key['nim'] ?></td>
				<td><?= $key['nama'] ?></td>
			</tr>
		<?php endforeach?>
		
	
	</table>

</body>
</html>