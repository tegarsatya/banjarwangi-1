 <!-- Page Wrapper -->
 <div id="wrapper">

 	<!-- Sidebar -->
 	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

 		<!-- Sidebar - Brand -->
 		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dasbor') ?>">
 			<div class="sidebar-brand-icon rotate-n-15">
 				<i class="fas fa-laugh-wink"></i>
 			</div>
 			<div class="sidebar-brand-text mx-3">SB Admin <sup>Banjarwangi-1</sup></div>
 		</a>

 		<!-- Divider -->
 		<hr class="sidebar-divider my-0">

 		<!-- Nav Item - Dashboard -->
 		<li class="nav-item">
 			<a class="nav-link" href="<?= base_url('admin/dasbor') ?>">
 				<i class="fas fa-fw fa-tachometer-alt"></i>
 				<span>Dashboard</span></a>
 		</li>


		 <!-- Data pengguna Sistem -->
 		<hr class="sidebar-divider">

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Admin
 		</div>

 		<!-- Nav Item - Pages Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
 				<i class="fas fa-fw fa-cog"></i>
 				<span>Pengguna Sistem</span>
 			</a>
 			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<h6 class="collapse-header">Data Pengguna Sistem :</h6>
 					<a class="collapse-item" href="<?= base_url('admin/user') ?>">Pengguna Sistem </a>
 					<a class="collapse-item" href="<?= base_url('admin/user/tambah') ?>">Tambah Pengguna Sistem</a>
 				</div>
 			</div>
 		</li>

		 <!-- Data Berita dan Kategori Berita -->

 		<hr class="sidebar-divider">

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Berita & Kategori Berita
 		</div>

 		<!-- Nav Item - Utilities Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
 				<i class="fas fa-fw fa-wrench"></i>
 				<span>Berita</span>
 			</a>
 			<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<h6 class="collapse-header">Berita & Kategori Berita:</h6>
 					<a class="collapse-item" href="<?= base_url('admin/berita') ?>">Data Berita</a>
 					<a class="collapse-item" href="<?= base_url('admin/berita/tambah') ?>">Tambah Data Berita</a>
 					<a class="collapse-item" href="<?= base_url('admin/kategori') ?>">Data Kategori</a>
 					<a class="collapse-item" href="<?= base_url('admin/kategori/tambah') ?>">Tambah Data Kategori</a>
 				</div>
 			</div>
 		</li>

 		<!-- DAta Profil sekolah -->
 		<hr class="sidebar-divider">

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Profil Sekolahan
 		</div>

 		<!-- Nav Item - Pages Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
 				<i class="fas fa-fw fa-folder"></i>
 				<span>Profil</span>
 			</a>
 			<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<a class="collapse-item" href="<?= base_url('admin/profile') ?>">Data Profil</a>
 					<a class="collapse-item" href="<?= base_url('admin/profile/tambah') ?>">Tambah Data Profil</a>
 				</div>
 			</div>
 		</li>

 		<!-- Visi Misi -->
 		<hr class="sidebar-divider">

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Visi & Misi Sekolahan
 		</div>

 		<!-- Nav Item - Utilities Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMisi" aria-expanded="true" aria-controls="collapseUtilities">
 				<i class="fas fa-fw fa-wrench"></i>
 				<span>Data Visi & Misi</span>
 			</a>
 			<div id="collapseMisi" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<h6 class="collapse-header">Visi & Misi</h6>
 					<a class="collapse-item" href="<?= base_url('admin/visi_misi') ?>">Data Visi & Misi</a>
 					<a class="collapse-item" href="<?= base_url('admin/visi_misi/tambah') ?>">Tambah Data Visi & Misi</a>
 				</div>
 			</div>
 		</li>

 		<!-- galeri -->
 		<hr class="sidebar-divider">

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Galeri
 		</div>

 		<!-- Nav Item - Utilities Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsega" aria-expanded="true" aria-controls="collapseUtilities">
 				<i class="fas fa-fw fa-wrench"></i>
 				<span>Data Galeri</span>
 			</a>
 			<div id="collapsega" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<h6 class="collapse-header">Galeri</h6>
 					<a class="collapse-item" href="<?= base_url('admin/galeri') ?>">Data galeri</a>
 					<a class="collapse-item" href="<?= base_url('admin/galeri/tambah') ?>">Tambah Data Galeri</a>
 				</div>
 			</div>
 		</li>

 		<!-- pengajar-->
 		<hr class="sidebar-divider">

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Pengajar
 		</div>

 		<!-- Nav Item - Utilities Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepa" aria-expanded="true" aria-controls="collapseUtilities">
 				<i class="fas fa-fw fa-wrench"></i>
 				<span>Data Pengajar</span>
 			</a>
 			<div id="collapsepa" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<h6 class="collapse-header">Galeri</h6>
 					<a class="collapse-item" href="<?= base_url('admin/pengajar') ?>">Data Pengajar</a>
 					<a class="collapse-item" href="<?= base_url('admin/pengajar/tambah') ?>">Tambah Data Pengajar</a>
 				</div>
 			</div>
		 </li>
		 

		 <!-- Penerimaan siswa -->
 		<hr class="sidebar-divider">

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Syarat Penerimaan Siswa Baru
 		</div>

 		<!-- Nav Item - Utilities Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#opps" aria-expanded="true" aria-controls="collapseUtilities">
 				<i class="fas fa-fw fa-wrench"></i>
 				<span>Penerimaan siswa</span>
 			</a>
 			<div id="opps" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<h6 class="collapse-header">Galeri</h6>
 					<a class="collapse-item" href="<?= base_url('admin/penerimaan') ?>">Data Penerimaan</a>
 					<a class="collapse-item" href="<?= base_url('admin/pengajar/tambah') ?>">Tambah Data penerimaan</a>
 				</div>
 			</div>
 		</li>


 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Buku Tamu
 		</div>

 		<!-- Nav Item - Utilities Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsea" aria-expanded="true" aria-controls="collapseUtilities">
 				<i class="fas fa-fw fa-wrench"></i>
 				<span>Data Buku Tamu</span>
 			</a>
 			<div id="collapsea" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<h6 class="collapse-header">Galeri</h6>
 					<a class="collapse-item" href="<?= base_url('admin/buku_tamu') ?>">Data Buku Tamu</a>
 				</div>
 			</div>
 		</li>

 		<!-- Nav Item - Tables -->
 		<li class="nav-item active">
 			<a class="nav-link" href="tables.html">
 				<i class="fas fa-fw fa-table"></i>
 				<span>Tables</span></a>
 		</li>

 		<!-- Divider -->
 		<hr class="sidebar-divider d-none d-md-block">

 		<!-- Sidebar Toggler (Sidebar) -->
 		<div class="text-center d-none d-md-inline">
 			<button class="rounded-circle border-0" id="sidebarToggle"></button>
 		</div>

 	</ul>
 	<!-- End of Sidebar -->
