
<!-- SWEETALERT -->
<?php if ($this->session->flashdata('sukses')) { ?>
	<script>
		swal("Berhasil", "<?php echo $this->session->flashdata('sukses'); ?>", "success")
	</script>
<?php } ?>

<?php if (isset($error)) { ?>
	<script>
		swal("Oops...", "<?php echo strip_tags($error); ?>", "warning")
	</script>
<?php } ?>

<?php if ($this->session->flashdata('warning')) { ?>
	<script>
		swal("Oops...", "<?php echo $this->session->flashdata('warning'); ?>", "warning")
	</script>
<?php } ?>
<?php
$sek  = date('Y');
$awal = $sek - 100;
?>
<script>
	$(".datepicker").datepicker({
		inline: true,
		changeYear: true,
		changeMonth: true,
		dateFormat: "yy-mm-dd",
		yearRange: "<?php echo $awal ?>:<?php echo date('Y') ?>"
	});

	$(".tanggal").datepicker({
		inline: true,
		changeYear: true,
		changeMonth: true,
		dateFormat: "dd-mm-yy",
		yearRange: "<?php echo $awal ?>:<?php echo date('Y') ?>"
	});
</script>
<script>
	// Sweet alert
	function confirmation(ev) {
		ev.preventDefault();
		var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
		console.log(urlToRedirect); // verify if this is the right URL
		swal({
				title: "Yakin ingin menghapus data ini?",
				text: "Data yang sudah dihapus tidak dapat dikembalikan",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				// redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
				if (willDelete) {
					// Proses ke URL
					window.location.href = urlToRedirect;
				}
			});
	}

</script>


<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Your Website 2019</span>
		</div>
	</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="login.html">Logout</a>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets/admin/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>assets/admin/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url() ?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url() ?>assets/admin/js/demo/datatables-demo.js"></script>

</body>

</html>
