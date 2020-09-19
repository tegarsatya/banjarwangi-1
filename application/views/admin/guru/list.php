<?php
// Form buka utk delete multiple
echo form_open(base_url('admin/pengajar/proses'));
?>

<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800"><?php echo $title ?></h1>
	<p>
		<div class="btn-group">
			<a href="<?php echo base_url('admin/pengajar/tambah') ?>" class="btn btn-success btn-lg">
				<i class="fa fa-plus"></i> Tambah Baru</a>
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
							<th>Nama Guru</th>
							<th>Jabatan Guru</th>
							<th>Keterangan</th>
							<th>Pengampuh Mata Pelajaran</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tbody>
						<?php
						// Looping data user dg foreach
						$i = 1;
						foreach ($pengajar as $pe) {
						?>

							<tr>
								<td class="text-center">
									<input type="checkbox" name="id_kategori[]" value="<?php echo $pe->id_pengajar ?>">
								</td>

								<td><?php echo $pe->nama_pengajar ?></td>
								<td><?php echo $pe->jabatan_pengajar ?></td>
								<td><?php echo $pe->isi ?></td>
								<td><?php echo $pe->pengampu ?></td>

								<td>
									<div class="btn-group">
										<a href="<?php echo base_url('admin/pengajar/edit/' . $pe->id_pengajar) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
										<a href="<?php echo base_url('admin/pengajar/delete/' . $pe->id_pengajar) ?>" class="btn btn-danger btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i> Hapus</a>
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
