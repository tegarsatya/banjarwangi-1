<?php
// Form buka utk delete multiple
echo form_open(base_url('admin/user/proses'));
?>

<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800"><?php echo $title ?></h1>
	<p>
		<div class="btn-group">
			<a href="<?php echo base_url('admin/user/tambah') ?>" class="btn btn-success btn-lg">
				<i class="fa fa-plus"></i> Tambah Baru</a>

			<button class="btn btn-danger btn-lg" name="hapus" type="submit">
				<i class="fa fa-trash"></i> Hapus
			</button>
		</div>
	</p>


	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary"><?php echo $title ?></h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>NO</th>
							<th>NAMA</th>
							<th>USERNAME</th>
							<th>AKSES LEVEL</th>
							<th>EMAIL</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tbody>
						<?php
						// Looping data user dg foreach
						$i = 1;
						foreach ($user as $user) {
						?>

							<tr>
								<td class="text-center">
									<input type="checkbox" name="id_user[]" value="<?php echo $user->id_user ?>">
								</td>
								<td><?php echo $user->nama ?></td>
								<td><?php echo $user->username ?></td>
								<td><?php echo $user->akses_level ?></td>
								<td><?php echo $user->email ?></td>
								<td>
									<div class="btn-group">
										<a href="<?php echo base_url('admin/user/edit/' .$user->id_user) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
										<a href="<?php echo base_url('admin/user/delete/' .$user->id_user) ?>" class="btn btn-danger btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i> Hapus</a>
									</div>
								</td>
							</tr>

						<?php $i++;
						} //End looping 
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

<?php
// Form tutup
echo form_close();
?>
