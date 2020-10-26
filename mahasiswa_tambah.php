<!DOCTYPE html>
<html>
<head>
	<title>mahasiswa</title>
</head>
<body>
	<h1>tambah mahasiswa</h1>
	<a href="<?= site_url('mahasiswa') ?>">kembali</a>
	<hr>
	<form>
		<h6>nim</h6>
		<input type="number" name="nim">
		<br>
		<h6>nama</h6>
		<input type="text" name="nama_mahasiswa">
		<br>
		<input type="submit" name="submit" value="simpan">
	</form>

</body>
</html>