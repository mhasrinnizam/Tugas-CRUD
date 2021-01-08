<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Update Data</div>
		<?php 
		require '../koneksi.php';
		if (isset($_GET['url-nim'])) {
			$input_nim = $_GET['url-nim'];
			$query = "SELECT * FROM mahasiswa WHERE nim='$input_nim'";
			$result = mysqli_query($link, $query);
			$isi = mysqli_fetch_object($result);
		}
		if (isset($_POST['savedata'])){
			$input_nim = $_POST[txtni];
			$input_nama = $_POST[txtnama];
			$input_prodi = $_POST[txtprodi];

			$query = "UPDATE mahasiswa SET nama_mahasiswa='$input_nama', prodi='$input_prodi'
			WHERE nim='$input_nim'";

			$result = mysqli_query($link, $query);
			if ($result){
				header('location: index.php');
			} else{
				echo 'Gagal disimpan :' . mysqli_error($link);
			}
		}
		?>
		<form action="" method="post">
			<div class="form-group">
				<label for="">Nim</label>
				<input type="text" class="form-control" name="txtnim" value="<?= $isi->nim; ?>" readonly>
			</div>
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="txtnama" value="<?= $isi->nama_mahasiswa; ?>">
			</div>
			<div class="form-group">
				<label for="">Prodi</label>
				<input type="text" class="form-control" name="txtprodi" value="<?= $isi->prodi; ?>">
			</div>
			<br>
			<input type="submit" class="btn btn-primary" name="simpan" value="Simpan data">
			<a href="index.php" class="btn btn-warning">Batal</a>
		</form>
	</body>

	</html>