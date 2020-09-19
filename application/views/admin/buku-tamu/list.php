<?php
// Form buka utk delete multiple
echo form_open(base_url('admin/galeri/proses'));
?>

<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800"><?php echo $title ?></h1>

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
							<th>Nama </th>
							<th>Email</th>
							<th>Pesan</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tbody>
						<?php
						// Looping data user dg foreach
						$i = 1;
						foreach ($buku_tamu as $bk) {
						?>

							<tr>
								<td class="text-center">
									<input type="checkbox" name="id_kategori[]" value="<?php echo $bk->id_buku_tamu ?>">
								</td>

								<td><?php echo $bk->nama  ?></td>
								<td><?php echo $bk->email  ?></td>
								<td><?php echo $bk->pesan  ?></td>
								<td>
									<div class="btn-group">
										<a href="<?php echo base_url('admin/buku_tamu/delete/' . $bk->id_buku_tamu) ?>" class="btn btn-danger btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i> Hapus</a>
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
