<!DOCTYPE html>
<html>
<head>
  
	<title>Data Dosen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="../../bootstraps/css/bootstraps.min.css"> -->
	
</head>
<body>

	<div class="container">
		<div class="alert alert-into">Data Dosen</div>

		<a href="create.php" class="btn btn-info">Tambah Data</a>
	
		<?php
		require '..//koneksi.php';

		if (isset($_POST['simpan'])) {
		$input_nim = $_POST['txtnim'];
		$input_nama = $_POST['txtnama'];
		$input_prodi = $_POST['txtprodi'];

		$query ="INSERT INTO mahasiswa VALUES('$input_nim','$input_nama','$input_prodi')";
			$result = mysqli_query($link, $query);

		if($result) {

			header('location: index.php');
			
		} else {
			echo 'Gagal disimpan : ' . mysqli_error($link);
		}
	}
		?>

		<form action="" method="post">
		<div class="form-group">
			<label for="">Nim</label>
			<input type="text" class="form-control" name="txtnim">
			
		</div> 


		<div class="form-group">
			<label for="">Nama</label>
			<input type="text" class="form-control" name="txtnama">
			
		</div> 

		<div class="form-group">
			<label for="">Prodi</label>
			<input type="text" class="form-control" name="txtprodi">
			
		</div> 
		<br>
		<input type="submit"class="btn btn-primary" name="simpan" value="Simpan Data">

		<a href="index.php" class="btn btn-warning">Batal</a>

			
		</form>
</body>
</html>