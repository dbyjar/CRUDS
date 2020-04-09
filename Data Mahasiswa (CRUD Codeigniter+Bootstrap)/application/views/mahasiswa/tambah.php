
<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">Form Tambah Data Mahasiswa</div>
				<div class="card-body">
					<form action="" method="POST">
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" name="nama">
							<?php if ( form_error('nama') ) : ?>
							<small class="form-text text-danger">
								<?= form_error('nama'); ?>
							</small>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>NRP</label>
							<input type="text" class="form-control" name="nrp">
							<?php if ( form_error('nrp') ) : ?>
							<small class="form-text text-danger">
								<?= form_error('nrp'); ?>
							</small>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control" name="email">
							<?php if ( form_error('email') ) : ?>
							<small class="form-text text-danger">
								<?= form_error('email'); ?>
							</small>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Jurusan</label>
							<select class="form-control" name="jurusan">
								<?php foreach ($jurusan as $j) : ?>
								<option name="<?= $j; ?>"><?= $j; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<button class="btn btn-primary float-right" name="tambah" type="submit">Tambah</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>