	<a href="<?php echo site_url('c_hitung/tambah_transaksi') ?>">
		<button class="btn btn-success mt-3 mb-3">Tambah Data</button>
	</a>
	<center><h1 class="mb-3">Data Gaji Karyawan</h1></center>
	<div class="col-md-12 offset-md-3" style="max-width: 50%;">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Bulan/Tahun</th>
					<th>Nama Karyawan</th>
					<th>Gaji Pokok</th>
					<th>Lembur+Trans</th>
					<th>Tunjangan</th>
					<th>Total Gaji</th>
					<th><center>Aksi</center></th>
				</tr>
			</thead>
			<?php 
			$no = 1;
			foreach ($transaksi as $trs) :
				$LT = $trs->lembur + $trs->transport;
				?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $trs->bulan ?>/<?php echo $trs->tahun ?></td>
				<td><?php echo $trs->namakaryawan ?></td>
				<td><?php echo $trs->gajipokok ?></td>
				<td><?php echo $LT ?></td>
				<td><?php echo $trs->tunjangan ?></td>
				<td><?php echo $trs->gajitotal ?></td>
				<td>
					<a href="<?php echo site_url('c_hitung/edit_data_transaksi/'.$trs->idtransaksi) ?>">
						<button class="btn btn-warning">Edit</button>
					</a>
					<a href="<?php echo site_url('c_hitung/hapus_data_transaksi/'.$trs->idtransaksi) ?>">
						<button class="btn btn-danger">Hapus</button>
					</a>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	</div>