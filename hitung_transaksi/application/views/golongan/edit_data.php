<a href="<?php echo site_url('c_hitung/view_golongan') ?>">
	<img src="<?php echo base_url('assets/icons/dashboard.png') ?>" class="rounded-circle border border-3 border-dark" style="max-width: 40px;">
</a>
<center><h1>Edit Data Golongan</h1></center>
<div class="col-md-12 offset-md-3" style="max-width: 50%">
	<form action="<?php echo site_url('c_hitung/simpan_edit_golongan') ?>" method="POST">

		<?php foreach ($golongan as $gol) : ?>
			<input type="hidden" name="oldgolongan" value="<?php echo $gol->golongan ?>">

		<label class="form-label">Nama Golongan</label>
			<input type="text" name="golongan" class="form-control" value="<?php echo $gol->golongan ?>">
		<label class="form-label">Gaji Pokok</label>
			<input type="text" name="gajipokok" class="form-control" value="<?php echo $gol->gajipokok ?>">
		<label class="form-label">Tunjangan</label>
			<input type="text" name="tunjangan" class="form-control" value="<?php echo $gol->tunjangan ?>">

		<?php endforeach; ?>

		<button class="btn btn-success mt-3">Simpan</button>
	</form>
</div>