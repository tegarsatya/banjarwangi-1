 <!-- ##### Regular Page Area Start ##### -->
 <div class="regular-page-area section-padding-100">
 	<div class="container">
 		<div class="row">
 			<div class="col-12">
 				<div class="page-content">
 					<h2>
 						<center>Profil Sma Banjarwangi 1</center>
					 </h2>
					 <hr>
 					<?php foreach ($profil as $pr) { ?>
 						<img src="<?php echo base_url('assets/upload/profil/' . $pr->gambar) ?>" class="img-responsive">
 						<p><?php echo $pr->isi ?></p>
 					<?php } ?>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
