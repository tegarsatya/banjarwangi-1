<?php
// Form buka utk delete multiple
echo form_open(base_url('admin/berita/proses'));
?>

<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800"><?php echo $title ?></h1>
	<p>
		<div class="btn-group">
			<a href="<?php echo base_url('admin/berita/tambah') ?>" class="btn btn-success btn-lg">
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
							<th>Nama Berita</th>
							<th>Slug Berita</th>
							<th>Gambar</th>
							<th>Status Berita</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tbody>
						<?php
						// Looping data user dg foreach
						$i = 1;
						foreach ($berita as $berita) {
						?>

							<tr>
								<td class="text-center">
									<input type="checkbox" name="id_kategori[]" value="<?php echo $berita->id_berita ?>">
								</td>

								<td><?php echo $berita->nama_berita ?></td>
								<td><?php echo $berita->slug_berita ?></td>
								<td>
									<img src="<?php echo base_url('assets/upload/berita/' . $berita->gambar) ?>" class="img img-responsive" width="60">
								</td>
								<td><?php echo $berita->status_berita ?></td>
								<td>
									<div class="btn-group">
										<a href="<?php echo base_url('admin/berita/edit/' . $berita->id_berita) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
										<a href="<?php echo base_url('admin/berita/delete/' . $berita->id_berita) ?>" class="btn btn-danger btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i> Hapus</a>
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
