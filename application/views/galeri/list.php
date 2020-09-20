 <!-- ##### Upcoming Events Start ##### -->
 <section class="upcoming-events section-padding-100-0">
 	<div class="container">
 		<div class="row">
 			<div class="col-12">
 				<div class="section-heading">
 					<h3>Galeri Sekolahan</h3>
 				</div>
 			</div>
 		</div>

 		<div class="row">
 			<?php foreach ($galeri as $galeri) { ?>
 				<!-- Single Upcoming Events -->
 				<div class="col-12 col-md-6 col-lg-4">
 					<div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
 						<!-- Events Thumb -->
 						<div class="events-thumb">
 							<img src="<?php echo base_url('assets/upload/galeri/' . $galeri->gambar) ?>" alt="">
 							<h6 class="event-date"></h6>
 							<h4 class="event-title"></h4>
 						</div>
 						<!-- Date & Fee -->
 						<div class="date-fee d-flex justify-content-between">
 							<div class="date">
 								<p><i class="fa fa-clock"></i> <?php echo date('d M Y', strtotime($galeri->tanggal)); ?></p>
 							</div>
 							<div class="events-fee">
 								<!-- <a href="#"><?php echo $galeri->isi ?></a> -->
 							</div>
 						</div>
 					</div>
 				</div>
 			<?php } ?>
 		</div>
 	</div>
 </section>
