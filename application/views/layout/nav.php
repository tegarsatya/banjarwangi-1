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
						<li><a href="<?= base_url('profil') ?>">Profil</a></li>
						<li><a href="<?= base_url('visi_misi') ?>">Visi & Misi</a></li>
						<li><a href="<?= base_url('berita') ?>">Berita</a></li>
						<li><a href="<?= base_url('pengajar') ?>">Guru</a></li>
						<li><a href="<?= base_url('penerimaan') ?>">Syarat Penerimaan Siswa </a></li>
						<li><a href="<?= base_url('galeri') ?>">galeri</a></li>
						<li><a href="<?= base_url('kontak') ?>">Contact</a></li>

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
