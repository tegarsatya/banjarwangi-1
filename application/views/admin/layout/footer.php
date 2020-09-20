<script>
	tinymce.init({
		selector: '#isi',
		height: 300,
		plugins: 'print preview paste searchreplace autolink directionality visualblocks visualchars code fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern help',
		toolbar: 'formatselect | fontsizeselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | image | table | removeformat',
		visual_table_class: 'tiny-table',
		fontsize_formats: "8px 10px 12px 14px 18px 24px 36px"
	});
</script>

<script>
	tinymce.init({
		selector: '.textarea',
		height: 300,
		plugins: 'print preview paste searchreplace autolink directionality visualblocks visualchars code fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern help',
		toolbar: 'formatselect | fontsizeselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | image | table | removeformat',
		visual_table_class: 'tiny-table',
		fontsize_formats: "8px 10px 12px 14px 18px 24px 36px"
	});
</script>
<script>
	tinymce.init({
		selector: '.textareatengah',
		height: 500,
		plugins: 'print preview paste searchreplace autolink directionality visualblocks visualchars code fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern help',
		toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | image | table | removeformat',
		visual_table_class: 'tiny-table'
	});
</script>
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

	// Kirim ulang
	function kirim(ev) {
		ev.preventDefault();
		var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
		console.log(urlToRedirect); // verify if this is the right URL
		swal({
				title: "Yakin Ingin Mengirim Surat Ini?",
				text: "Pengiriman Surat Sebaiknya Kurang dari 200 Kali/jam agar tidak terkena Blokir Server. Klik CANCEL untuk membatalkan. Klik OK untuk mengirim surat.",
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
	// Akses
	// Sweet alert
	function akses(ev) {
		ev.preventDefault();
		var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
		console.log(urlToRedirect); // verify if this is the right URL
		swal({
				title: "Yakin ingin memberi akses?",
				text: "Data yang diberi akses akan bisa login",
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

</div>
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
<!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
				<a class="btn btn-primary" href="<?= base_url('logout') ?>">Logout</a>
			</div>
		</div>
	</div>
</div> -->

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

<script>
	$(function() {
		$("#example1").DataTable();
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});
	});
</script>

<!-- Page Script -->
<script>
	$(function() {
		//Initialize Select2 Elements
		$('.select2').select2()
		//Enable iCheck plugin for checkboxes
		//iCheck for checkbox and radio inputs
		$('.mailbox-messages input[type="checkbox"]').iCheck({
			checkboxClass: 'icheckbox_flat-blue',
			radioClass: 'iradio_flat-blue'
		})

		//Enable check and uncheck all functionality
		$('.checkbox-toggle').click(function() {
			var clicks = $(this).data('clicks')
			if (clicks) {
				//Uncheck all checkboxes
				$('.mailbox-messages input[type=\'checkbox\']').iCheck('uncheck')
				$('.fa', this).removeClass('fa-check-square-o').addClass('fa-square-o')
			} else {
				//Check all checkboxes
				$('.mailbox-messages input[type=\'checkbox\']').iCheck('check')
				$('.fa', this).removeClass('fa-square-o').addClass('fa-check-square-o')
			}
			$(this).data('clicks', !clicks)
		})

		//Handle starring for glyphicon and font awesome
		$('.mailbox-star').click(function(e) {
			e.preventDefault()
			//detect type
			var $this = $(this).find('a > i')
			var glyph = $this.hasClass('glyphicon')
			var fa = $this.hasClass('fa')

			//Switch states
			if (glyph) {
				$this.toggleClass('glyphicon-star')
				$this.toggleClass('glyphicon-star-empty')
			}

			if (fa) {
				$this.toggleClass('fa-star')
				$this.toggleClass('fa-star-o')
			}
		})
	})
</script>

<script>
	$(function() {
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.
		ClassicEditor
			.create(document.querySelector('#editor1'))
			.then(function(editor) {
				// The editor instance
			})
			.catch(function(error) {
				console.error(error)
			})

		// bootstrap WYSIHTML5 - text editor

		$('.textareaku').wysihtml5({
			toolbar: {
				fa: true
			}
		})
	})
</script>

</body>

</html>
