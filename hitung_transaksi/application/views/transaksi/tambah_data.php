	<a href="<?php echo site_url('c_hitung/view_transaksi') ?>">
		<img src="<?php echo base_url('assets/icons/dashboard.png') ?>" class="rounded-circle border border-3 border-dark" style="max-width: 40px;">
	</a>
	<center>
		<h1>Tambah Transaksi</h1>
		<div style="max-width: 30%">
		<form action="<?php echo site_url('c_hitung/simpan_data_transaksi') ?>" method="POST">
			<label class="form-label mt-3">Bulan</label>
				<select name="bulan" class="form-select">
					<option value="1">Januari</option>
					<option value="2">Februari</option>
					<option value="3">Maret</option>
					<option value="4">April</option>
					<option value="5">Mei</option>
					<option value="6">juni</option>
					<option value="7">Juli</option>
					<option value="8">Agustus</option>
					<option value="9">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">Desember</option>
				</select>
			<label class="form-label mt-3">Tahun</label>
				<select name="tahun" class="form-select">
					<option value="2019">2019</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
				</select>
			<label class="form-label mt-3">Nama Karyawan</label>
				<select name="idkaryawan" class="form-select">
					<?php foreach ($karyawan as $kry) : ?>
						<option value="<?php echo $kry->idkaryawan ?>"><?php echo $kry->namakaryawan ?></option>
					<?php endforeach; ?>
				</select>
			<label class="form-label mt-3">Gaji Lembur</label>
				<input type="text" name="lembur" class="form-control">
			<label class="form-label mt-3">Tambahan Transport</label>
				<input type="text" name="transport" class="form-control">
			
			<button type="submit" class="btn btn-info mt-3">Simpan</button>
		</form>
		</div>
	</center>