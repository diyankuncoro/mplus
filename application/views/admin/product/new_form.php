<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/product/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="judul">Judul*</label>
								<input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"
								 type="text" name="judul" placeholder="Judul buku" />
								<div class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="penulis">Penulis*</label>
								<input class="form-control <?php echo form_error('penulis') ? 'is-invalid':'' ?>"
								 type="text" name="penulis" min="0" placeholder="Nama penulis" />
								<div class="invalid-feedback">
									<?php echo form_error('penulis') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal">Tanggal halaman*</label>
								<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal" min="0" placeholder="Tanggal halaman" />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jml_halaman">Jumlah halaman*</label>
								<input class="form-control <?php echo form_error('jml_halaman') ? 'is-invalid':'' ?>"
								 type="number" name="jml_halaman" min="0" placeholder="Jumlah Halaman" />
								<div class="invalid-feedback">
									<?php echo form_error('jml_halaman') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jenis_buku">Jenis buku*</label>
								<input class="form-control <?php echo form_error('jenis_buku') ? 'is-invalid':'' ?>"
								 type="text" name="jenis_buku" min="0" placeholder="Jenis buku" />
								<div class="invalid-feedback">
									<?php echo form_error('jenis_buku') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
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
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>