<?php
	// Notifikasi error
	echo validation_errors('<p class="alert alert-warning">', '</p>');

	// Form open
	echo form_open(base_url('admin/kategori/tambah'));
?>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary"><?php echo $title ?></h6>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label>Nama Kategori <span class="text-danger">*</span></label>
					<input type="text" name="nama_kategori" class="form-control form-control-lg" value="<?php echo set_value('nama_kategori') ?>" placeholder="Nama Kategori" required>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<div class="btn-group">
						<button class="btn btn-success btn-lg" name="submit" type="submit">
							<i class="fa fa-save"></i> Simpan
						</button>
						<button class="btn btn-info btn-lg" name="reset" type="reset">
							<i class="fa fa-times"></i> Reset
						</button>
						<a href="<?php echo base_url('admin/kategori') ?>" class="btn btn-warning btn-lg">
							<i class="fa fa-backward"></i> Kembali
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	// Form close
	echo form_close();
?>
