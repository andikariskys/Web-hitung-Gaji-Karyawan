	<a href="<?php echo site_url('c_hitung/tambah_golongan') ?>">
		<button class="btn btn-success mt-3 mb-3">Tambah Data</button>
	</a>
	<center><h1 class="mb-3">Data Golongan</h1></center>
	<div class="col-md-12 offset-md-3" style="max-width: 50%;">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Golongan</th>
					<th>Gaji Pokok</th>
					<th>Tunjangan</th>
					<th><center>Aksi</center></th>
				</tr>
			</thead>
			<?php 
			$no = 1;
			foreach ($golongan as $gol) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $gol->golongan ?></td>
				<td><?php echo $gol->gajipokok ?></td>
				<td><?php echo $gol->tunjangan ?></td>
				<td>
					<a href="<?php echo site_url('c_hitung/edit_data_golongan/'.$gol->golongan) ?>">
						<button class="btn btn-warning">Edit</button>
					</a>
					<a href="<?php echo site_url('c_hitung/hapus_data_golongan/'.$gol->golongan) ?>">
						<button class="btn btn-danger">Hapus</button>
					</a>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	</div>