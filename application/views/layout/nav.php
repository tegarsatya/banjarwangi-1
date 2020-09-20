<!-- Navbar Area -->
<div class="clever-main-menu">
	<div class="classy-nav-container breakpoint-off">
		<!-- Menu -->
		<nav class="classy-navbar justify-content-between" id="cleverNav">

			<!-- Logo -->
			<a class="nav-brand" href="<?php echo base_url('home') ?>"><img src="assets/frontend/img/core-img/logo.png" alt=""></a>

			<!-- Navbar Toggler -->
			<div class="classy-navbar-toggler">
				<span class="navbarToggler"><span></span><span></span><span></span></span>
			</div>

			<!-- Menu -->
			<div class="classy-menu">

				<!-- Close Button -->
				<div class="classycloseIcon">
					<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
				</div>

				<!-- Nav Start -->
				<div class="classynav">
					<ul>
						<li><a href="<?= base_url('home') ?>">Home</a></li>
						<li><a href="#">Pages</a>
							<ul class="dropdown">
								<li><a href="index.html">Home</a></li>
								<li><a href="courses.html">Courses</a></li>
								<li><a href="single-course.html">Single Courses</a></li>
								<li><a href="instructors.html">Instructors</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog-details.html">Single Blog</a></li>
								<li><a href="regular-page.html">Regular Page</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</li>

						<li><a href="<?= base_url('profil') ?>">profil</a></li>
						<li><a href="<?= base_url('visi_misi') ?>">Visi & Misi</a></li>
						<li><a href="<?= base_url('berita') ?>">Berita</a></li>
						<li><a href="<?= base_url('pengajar') ?>">Data Pengajar</a></li>
						<li><a href="<?= base_url('galeri') ?>">galeri</a></li>
						<li><a href="<?= base_url('buku_tamu') ?>">Buku Tamu</a></li>

					</ul>

					<!-- Search Button -->
					<div class="search-area">
						<form action="#" method="post">
							<input type="search" name="search" id="search" placeholder="Search">
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
					</div>

					<!-- Register / Login -->
					<div class="register-login-area">
						<a href="<?= base_url('login') ?>" class="btn active">Login</a>
					</div>

				</div>
				<!-- Nav End -->
			</div>
		</nav>
	</div>
</div>
</header>
