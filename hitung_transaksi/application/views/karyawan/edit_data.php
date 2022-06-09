	<a href="<?php echo site_url('c_hitung/view_karyawan') ?>">
		<img src="<?php echo base_url('assets/icons/dashboard.png') ?>" class="rounded-circle border border-3 border-dark" style="max-width: 40px;">
	</a>
	<center>
		<h1>Edit Data Karyawan</h1>
		<div style="max-width: 30%">
		<form action="<?php echo site_url('c_hitung/simpan_edit_karyawan') ?>" method="POST">

			<?php foreach ($karyawan as $kry) : ?>
				<input type="hidden" name="idkaryawan" value="<?php echo $kry->idkaryawan ?>">

			<label class="form-label">Nama Karyawan</label>
				<input type="text" name="namakaryawan" class="form-control" value="<?php echo $kry->namakaryawan ?>">

			<label class="form-label">Jenis Kelamin</label>
			<select class="form-select" name="jeniskelamin">
				<option value="Pria" <?php if ($kry->jeniskelamin == "Pria") {echo 'selected="0"';} ?> >Pria</option>
				<option value="Wanita" <?php if ($kry->jeniskelamin == "Wanita") {echo 'selected="0"';} ?> >Wanita</option>
			</select>

			<label class="form-label">Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $kry->alamat ?>">

			<label class="form-label">Tempat Lahir</label>
				<input type="text" name="tempatlahir" class="form-control" value="<?php echo $kry->tempatlahir ?>">

			<label class="form-label">Tanggal Lahir</label>
				<input type="date" name="tgllahir" class="form-control" value="<?php echo $kry->tgllahir ?>">

			<label class="form-label">Golongan</label>
				<select class="form-select" name="golongan">
					<?php foreach ($golongan as $gol) : ?>
						<option value="<?php echo $gol->golongan ?>" <?php if ($kry->golongan == $gol->golongan) { echo 'selected="0"';} ?> ><?php echo $gol->golongan ?></option>
					<?php endforeach; ?>
				</select>

			<label class="form-label">Status</label>
				<select class="form-select" name="status">
					<option value="Aktif" <?php if ($kry->status == "Aktif") {echo 'selected="0"';} ?> >Aktif</option>
					<option value="Nonaktif" <?php if ($kry->status == "Nonaktif") {echo 'selected="0"';} ?> >Nonaktif</option>
				</select>

			<?php endforeach; ?>
			
			<button type="submit" class="btn btn-info mt-3">Simpan</button>
		</form>
		</div>
	</center>