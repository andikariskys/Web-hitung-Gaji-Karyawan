	<a href="<?php echo site_url('c_hitung/view_karyawan') ?>">
		<img src="<?php echo base_url('assets/icons/dashboard.png') ?>" class="rounded-circle border border-3 border-dark" style="max-width: 40px;">
	</a>
	<center>
		<h1>Tambah Karyawan</h1>
		<div style="max-width: 30%">
		<form action="<?php echo site_url('c_hitung/simpan_data_karyawan') ?>" method="POST">
			<label class="form-label">Nama Karyawan</label>
				<input type="text" name="namakaryawan" class="form-control">

			<label class="form-label">Jenis Kelamin</label>
			<select class="form-select" name="jeniskelamin">
				<option value="Pria">Pria</option>
				<option value="Wanita">Wanita</option>
			</select>

			<label class="form-label">Alamat</label>
				<input type="text" name="alamat" class="form-control">

			<label class="form-label">Tempat Lahir</label>
				<input type="text" name="tempatlahir" class="form-control">

			<label class="form-label">Tanggal Lahir</label>
				<input type="date" name="tgllahir" class="form-control">

			<label class="form-label">Golongan</label>
				<select class="form-select" name="golongan">
				<?php foreach ($golongan as $gol) : ?>
					<option value="<?php echo $gol->golongan ?>"><?php echo $gol->golongan ?></option>
				<?php endforeach; ?>
				</select>

			<label class="form-label">Status</label>
				<select class="form-select" name="status">
					<option value="Aktif">Aktif</option>
					<option value="Nonaktif">Nonaktif</option>
				</select>
			
			<button type="submit" class="btn btn-info mt-3">Simpan</button>
		</form>
		</div>
	</center>