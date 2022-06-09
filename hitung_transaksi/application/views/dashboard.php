<html>
	<head>
		<title>Hitung Gaji Karyawan</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	</head>
	<body>
		<div class="container-fluid">
			<center>

				<h1>Dashboard CodeIgniter Hitung Gaji</h1>

				<div class="card text-center mt-3" style="max-width: 50%">
				  <div class="card-header" style="background: #adb5bd;">
				    Featured
				  </div>
				  <div class="card-body">
				    <h5 class="card-title">Data Golongan</h5>
				    <p class="card-text">
				    	<img src="<?php echo base_url('assets/icons/golongan.png') ?>" style="max-width: 15%;">
				    </p>
				    <a href="<?php echo site_url('c_hitung/view_golongan') ?>" class="btn btn-primary">Buka Tabel Golongan</a>
				  </div>
				</div>

				<div class="card text-center mt-3" style="max-width: 50%">
				  <div class="card-header" style="background: #adb5bd;">
				    Featured
				  </div>
				  <div class="card-body">
				    <h5 class="card-title">Data Karyawan</h5>
				    <p class="card-text">
				    	<img src="<?php echo base_url('assets/icons/karyawan.png') ?>" style="max-width: 15%;">
				    </p>
				    <a href="<?php echo site_url('c_hitung/view_karyawan') ?>" class="btn btn-primary">Buka Tabel Karyawan</a>
				  </div>
				</div>

				<div class="card text-center mt-3" style="max-width: 50%">
				  <div class="card-header" style="background: #adb5bd;">
				    Featured
				  </div>
				  <div class="card-body">
				    <h5 class="card-title">Data Transaksi</h5>
				    <p class="card-text">
				    	<img src="<?php echo base_url('assets/icons/gaji.png') ?>" style="max-width: 15%;">
				    </p>
				    <a href="<?php echo site_url('c_hitung/view_transaksi') ?>" class="btn btn-primary">Buka Tabel Transaksi</a>
				  </div>
				</div>

			</center>
		</div>
	</body>
</html>