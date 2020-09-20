   <section class="blog-area blog-page section-padding-100">
   	<div class="row">
   		<div class="col-12">
   			<div class="section-heading">
   				<h3>From Our Blog</h3>
   			</div>
   		</div>
   	</div>
   	<div class="container-fluid">
   		<div class="row">
   			<?php foreach ($berita as $berita) { ?>
   				<!-- Single Blog Area -->
   				<div class="col-12 col-lg-6">
   					<div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
   						<img src="<?php echo base_url('assets/upload/berita/' . $berita->gambar) ?>" alt="">
   						<!-- Blog Content -->

   						<div class="blog-content">
   							<a href="<?php echo base_url('berita/read/' . $berita->slug_berita) ?>" class="blog-headline">
   								<h4><?php echo $berita->nama_berita ?></h4>
   							</a>
   							<div class="meta d-flex align-items-center">
   								<a href="#"><?php echo $berita->nama ?></a>
   								<span><i class="fa fa-circle" aria-hidden="true"></i></span>
   								<a href="#"><?php echo date('d M Y', strtotime($berita->tanggal)); ?></a>
   							</div>
   							<p><?php echo $berita->isi ?></p>
   						</div>
   					</div>
   				</div>
   			<?php } ?>
   		</div>

   		<!-- <div class="row">
   			<div class="col-12">
   				<div class="load-more text-center mt-100 wow fadeInUp" data-wow-delay="1000ms">
   					<a href="#" class="btn clever-btn btn-2">Load More</a>
   				</div>
   			</div>
   		</div> -->
   	</div>
   </section>
