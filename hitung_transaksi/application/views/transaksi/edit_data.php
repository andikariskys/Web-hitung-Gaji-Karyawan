		<a href="<?php echo site_url('c_hitung/view_transaksi') ?>">
			<img src="<?php echo base_url('assets/icons/dashboard.png') ?>" class="rounded-circle border border-3 border-dark" style="max-width: 40px;">
		</a>
		<center>
			<h1>Edit Transaksi</h1>
			<div style="max-width: 30%">
			<form action="<?php echo site_url('c_hitung/simpan_update_transaksi') ?>" method="POST">

				<?php foreach ($transaksi as $trs) : ?>
				<input type="hidden" name="idtransaksi" value="<?php echo $trs->idtransaksi ?>">
				<label class="form-label mt-3">Bulan</label>
					<select name="bulan" class="form-select">
						<option value="1" <?php if ($trs->bulan == 1) { echo 'selected="0"';} ?> >Januari</option>
						<option value="2" <?php if ($trs->bulan == 2) { echo 'selected="0"';} ?> >Februari</option>
						<option value="3" <?php if ($trs->bulan == 3) { echo 'selected="0"';} ?> >Maret</option>
						<option value="4" <?php if ($trs->bulan == 4) { echo 'selected="0"';} ?> >April</option>
						<option value="5" <?php if ($trs->bulan == 5) { echo 'selected="0"';} ?> >Mei</option>
						<option value="6" <?php if ($trs->bulan == 6) { echo 'selected="0"';} ?> >juni</option>
						<option value="7" <?php if ($trs->bulan == 7) { echo 'selected="0"';} ?> >Juli</option>
						<option value="8" <?php if ($trs->bulan == 8) { echo 'selected="0"';} ?> >Agustus</option>
						<option value="9" <?php if ($trs->bulan == 9) { echo 'selected="0"';} ?> >September</option>
						<option value="10" <?php if ($trs->bulan == 10) { echo 'selected="0"';} ?> >Oktober</option>
						<option value="11" <?php if ($trs->bulan == 11) { echo 'selected="0"';} ?> >November</option>
						<option value="12" <?php if ($trs->bulan == 12) { echo 'selected="0"';} ?> >Desember</option>
					</select>
				<label class="form-label mt-3">Tahun</label>
					<select name="tahun" class="form-select">
						<option value="2019" <?php if ($trs->bulan == 2019) { echo 'selected="0"';} ?> >2019</option>
						<option value="2020" <?php if ($trs->bulan == 2020) { echo 'selected="0"';} ?> >2020</option>
						<option value="2021" <?php if ($trs->bulan == 2021) { echo 'selected="0"';} ?> >2021</option>
						<option value="2022" <?php if ($trs->bulan == 2022) { echo 'selected="0"';} ?> >2022</option>
					</select>
				<label class="form-label mt-3">Nama Karyawan</label>
					<select name="idkaryawan" class="form-select">
						<?php foreach ($karyawan as $kry) : ?>
							<option value="<?php echo $kry->idkaryawan ?>" 
								<?php if ($kry->idkaryawan == $trs->idkaryawan) { echo 'selected="0"';} ?> >
									<?php echo $kry->namakaryawan ?>
							</option>
						<?php endforeach; ?>
					</select>
				<label class="form-label mt-3">Gaji Lembur</label>
					<input type="text" name="lembur" class="form-control" value="<?php echo $trs->lembur ?>">
				<label class="form-label mt-3">Tambahan Transport</label>
					<input type="text" name="transport" class="form-control" value="<?php echo $trs->transport ?>">

				<?php endforeach; ?>
				
				<button type="submit" class="btn btn-info mt-3">Simpan</button>
			</form>
			</div>
		</center>