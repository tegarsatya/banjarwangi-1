 <!-- ##### Regular Page Area Start ##### -->
 <div class="regular-page-area section-padding-100">
 	<div class="container">
 		<div class="row">
 			<div class="col-12">
 				<div class="page-content">
 					<?php foreach ($profil as $pr) { ?>
 						<h2>
 							<center>Halaman Profil Sma Banjarwangi 1</center>
 						</h2>
 						<hr>
 						<img src="<?php echo base_url('assets/upload/profil/' . $pr->gambar) ?>" alt="">
 						<p><?php echo $pr->isi ?></p>
 					<?php } ?>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
