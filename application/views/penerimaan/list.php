 <!-- ##### Regular Page Area Start ##### -->
 <div class="regular-page-area section-padding-100">
 	<div class="container">
 		<div class="row">
 			<div class="col-12">
 				<div class="page-content">
 					<?php foreach ($penerimaan as $pr) { ?>
 						<h2>
 							<center>Syarat Penerimaan Siswa Baru di Sma Banjarwangi 1</center>
 						</h2>
 						<hr>
 						<img src="<?php echo base_url('assets/upload/penerimaan/' . $pr->gambar) ?>" alt="">
 						<p><?php echo $pr->keterangan ?></p>
 					<?php } ?>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
