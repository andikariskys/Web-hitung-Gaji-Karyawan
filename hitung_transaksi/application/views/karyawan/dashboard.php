	<a href="<?php echo site_url('c_hitung/tambah_karyawan') ?>">
		<button class="btn btn-success mt-3 mb-3">Tambah Data</button>
	</a>
	<center><h1 class="mb-3">Data Karyawan</h1></center>
	<div class="col-md-12 offset-md-3" style="max-width: 50%;">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Karyawan</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Golongan</th>
					<th>Status</th>
					<th><center>Aksi</center></th>
				</tr>
			</thead>
			<?php 
			$no = 1;
			foreach ($karyawan as $kry) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $kry->namakaryawan ?></td>
				<td><?php echo $kry->jeniskelamin ?></td>
				<td><?php echo $kry->alamat ?></td>
				<td><?php echo $kry->tempatlahir ?></td>
				<td><?php echo $kry->tgllahir ?></td>
				<td><?php echo $kry->golongan ?></td>
				<td><?php echo $kry->status ?></td>
				<td>
					<a href="<?php echo site_url('c_hitung/edit_data_karyawan/'.$kry->idkaryawan) ?>">
						<button class="btn btn-warning">Edit</button>
					</a>
					<a href="<?php echo site_url('c_hitung/hapus_data_karyawan/'.$kry->idkaryawan) ?>">
						<button class="btn btn-danger">Hapus</button>
					</a>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	</div>