<?php foreach ($berita as $berita) { ?>
	<!-- ##### Breadcumb Area Start ##### -->
	<div class="breadcumb-area">
		<!-- Breadcumb -->
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
				<li class="breadcrumb-item"><a href="<?php echo base_url('berita') ?>">Berita</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo $berita->nama ?></li>
			</ol>
		</nav>
	</div>
	<!-- ##### Breadcumb Area End ##### -->
	<!-- ##### Catagory Area Start ##### -->
	<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="<?php echo base_url() ?>assets/frontend/img/blog-img/7.jpg">
		<div class="blog-details-headline">
			<h3><?php echo $berita->nama_berita ?></h3>
			<div class="meta d-flex align-items-center justify-content-center">
				<a href="#"><?php echo $berita->nama ?></a>
				<span><i class="fa fa-circle" aria-hidden="true"></i></span>
				<a href="#"><?php echo date('d M Y', strtotime($berita->tanggal)); ?></a>
			</div>
		</div>
	</div>
	<!-- ##### Catagory Area End ##### -->

	<!-- ##### Blog Details Content ##### -->
	<div class="blog-details-content section-padding-100">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-8">
					<!-- Blog Details Text -->
					<div class="blog-details-text">
						<p><?php echo $berita->isi ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<!-- ##### Blog Details Content ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
	<!-- Top Footer Area -->
	<div class="top-footer-area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Footer Logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
					</div>
					<!-- Copywrite -->
					<p><a href="#">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>

				</div>
			</div>
		</div>
	</div>
