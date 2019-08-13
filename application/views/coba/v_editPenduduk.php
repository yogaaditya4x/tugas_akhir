<!--   Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
	<!-- Content Header (Page header) -->
	<!DOCTYPE html>
	<html lang="en"> 

	<body id="page-top">

		

		<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success" role="alert">
				<?php echo $this->session->flashdata('success'); ?>
			</div>
		<?php endif; ?>

		<div class="card mb-3">
			<div class="card-header">
				<a href="<?php echo site_url('coba/penduduk') ?>"><i class="fa fa-arrow-left"></i> Back</a>
			</div>
			<div class="card-body">

				<form action="<?php base_url('admin/penduduk/edit') ?>" method="post" enctype="multipart/form-data">

					<input type="hidden" name="id_penduduk" value="<?php echo $penduduk->id_penduduk?>" />

					<div class="form-group">
						<label for="nama">Name*</label>
						<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
						type="text" name="nama" placeholder="nama" value="<?php echo $penduduk->nama ?>" />
						<div class="invalid-feedback">
							<?php echo form_error('nama') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="jenis_kelamin">jenis kelamin</label>
						<input class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>"
						type="text" name="jenis_kelamin" min="0" placeholder="jenis_kelamin" value="<?php echo $penduduk->jenis_kelamin ?>" />
						<div class="invalid-feedback">
							<?php echo form_error('jenis_kelamin') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="nik">NIK</label>
						<input class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
						type="text" name="nik" min="0" placeholder="nik" value="<?php echo $penduduk->nik ?>" />
						<div class="invalid-feedback">
							<?php echo form_error('nik') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="kk">KK</label>
						<input class="form-control <?php echo form_error('kk') ? 'is-invalid':'' ?>"
						type="text" name="kk" min="0" placeholder="kk" value="<?php echo $penduduk->kk ?>" />
						<div class="invalid-feedback">
							<?php echo form_error('kk') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="alamat">Alamat*</label>
						<textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
							name="alamat" placeholder="alamat"><?php echo $penduduk->alamat ?></textarea>
							<div class="invalid-feedback">
								<?php echo form_error('alamat') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="rt">RT</label>
							<input class="form-control <?php echo form_error('rt') ? 'is-invalid':'' ?>"
							type="text" name="rt" min="0" placeholder="rt" value="<?php echo $penduduk->rt ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('rt') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="rw">RW</label>
							<input class="form-control <?php echo form_error('rw') ? 'is-invalid':'' ?>"
							type="text" name="rw" min="0" placeholder="rw" value="<?php echo $penduduk->rw ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('rw') ?>
							</div>
						</div>

						<input class="btn btn-success" type="submit" name="btn" value="Save" />
					</form>
				</div>

				<div class="card-footer small text-muted">
					* required fields
				</div>


			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->



</body>

</html>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



