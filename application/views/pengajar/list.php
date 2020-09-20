<!-- ##### Best Tutors Start ##### -->
<section class="best-tutors-area section-padding-100">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-heading">
					<h3>Guru Aktif Mengajar</h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">
					<?php foreach ($pengajar as $pe) { ?>
						<!-- Single Tutors Slide -->
						<div class="single-tutors-slides">
							<!-- Tutor Thumbnail -->
							<div class="tutor-thumbnail">
								<img src="<?php echo base_url('assets/upload/guru/' . $pe->gambar) ?>" alt="">
							</div>
							<!-- Tutor Information -->
							<div class="tutor-information text-center">
								<h5><?php echo $pe->nama_pengajar ?></h5>
								<span><?php echo $pe->pengampu ?></span>
								<span><?php echo $pe->jabatan_pengajar ?></span>
								<p><span><?php echo $pe->isi ?></span></p>
								<div class="social-info">
									<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ##### Best Tutors End ##### -->
