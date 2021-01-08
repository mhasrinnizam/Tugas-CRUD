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
		<br><br>

		<table class="table table-bordered">
			<thead>
				<tr>
					
					<th>No</th>
					<th>Nip</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Aksi</th>

				</tr>
			</thead>

			<tbody>
				<?php 

				require'../koneksi.php';
				$query = "SELECT * FROM dosen";
				$result = mysqli_query($link, $query);

				$no = 1;

				//Jalankan query diatas
				while ($isi = mysqli_fetch_object($result)) {
				 ?>
				
				<tr>
					<td><?= $no++; ?></td>
					<td><?php echo $isi->nip; ?></td>
					<td><?= $isi->nama_dosen; ?></td>
					<td><?= $isi->alamat; ?></td>
					<td>
						<a href="delete.php?nip=<?php echo $isi->nip; ?>"
							class="btn btn-danger">Del</a>

						<a href="update.php?url-nip=<?php echo $isi->nip; ?>"
							class="btn btn-warning">Edit</a>
					</td>
					
				</tr>

			<?php } ?>
			</tbody>
		</table>
		
	</div>

</body>
</html>