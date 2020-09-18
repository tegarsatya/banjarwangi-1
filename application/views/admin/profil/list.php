<?php
// Notifikasi error
echo validation_errors('<p class="alert alert-warning">', '</p>');

// Form open
echo form_open(base_url('admin/profil/index'));
?>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary"><?php echo $title ?></h6>
	</div>
	<div class="card-body">
		<div class="row">
			<?php echo form_open_multipart(base_url('admin/profil'), 'id="tambah"') ?>

			<div class="col-md-6">
				<label>Nama User <span class="text-danger">*</span></label>
				<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Pengguna" value="<?php echo $user->nama ?>">
			</div>

			<div class="col-md-6">
				<label>Email <span class="text-danger">*</span></label>
				<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $user->email ?>">
			</div>

			<div class="col-md-6">
				<label>Username <span class="text-danger">*</span></label>
				<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $user->username ?>" readonly disabled>
			</div>

			<div class="col-md-6">
				<label>Akses Level <span class="text-danger">*</span></label>
				<input type="text" name="akses_level" class="form-control" placeholder="Akses level" value="<?php echo $user->akses_level ?>" readonly disabled>
			</div>

			<div class="col-md-6">
				<label>Upload Foto <span class="text-danger">*</span></label>
				<input type="file" name="gambar" id="gambar" class="form-control" placeholder="gambar" value="<?php echo $user->gambar ?>">
			</div>

			<div class="col-md-6">
				<label class="col-sm-3 control-label text-right"></label>
				<div class="col-sm-9">
					<div class="form-group btn-group text-right">
						<button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Simpan Data</button>
						<button type="reset" name="reset" class="btn btn-info btn-lg"><i class="fa fa-cut"></i> Reset</button>
						<a href="<?php echo base_url('admin/dasbor') ?>" class="btn btn-secondary btn-lg" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</a>
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
