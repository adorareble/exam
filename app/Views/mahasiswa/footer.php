<footer class="main-footer text-sm">
    <strong>Copyright <?= date('Y');?> <a href="">Injectech</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
$(function() {
    // Summernote
    $('#add_soal_pilgan').summernote()
    $('#add_soal_essay').summernote()
    $('#add_jawaban_essay').summernote()
    $('#edit_soal_pilgan').summernote()
    $('#edit_soal_essay').summernote()
    $('#edit_jawaban_essay').summernote()


    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
    });
})
</script>
<script>
$(function() {
    bsCustomFileInput.init();
});
</script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $("#example3").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "paging": true,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
    $("#listujian").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<script>
$(function() {
    var Toast = Swal.mixin({
        toast: true,
        position: 'center',
        showConfirmButton: false,
        timer: 3000
    });

    $('.hapus').click(function() {
        Toast.fire({
            icon: 'success',
            title: '"Tenik Informatika" berhasil dihapus. Silahkan lanjutkan'
        })
    });
    $('.tambah').click(function() {
        Toast.fire({
            icon: 'success',
            title: '"Tenik Informatika" berhasil ditambah. Silahkan lanjutkan'
        })
    });
    $('.edit').click(function() {
        Toast.fire({
            icon: 'success',
            title: '"Tenik Informatika" berhasil diedit. Silahkan lanjutkan'
        })
    });
    $('.aktifakun').click(function() {
        Toast.fire({
            icon: 'success',
            title: 'Akun berhasil diaktifkan. Silahkan lanjutkan'
        })
    });
    $('.deaktif').click(function() {
        Toast.fire({
            icon: 'success',
            title: 'Akun berhasil di non-aktifkan. Silahkan lanjutkan'
        })
    });
    $('.aktif').click(function() {
        Toast.fire({
            icon: 'success',
            title: 'Akun berhasil diaktifkan. Silahkan lanjutkan'
        })
    });
});
</script>
<?php if (current_URL() === base_URL('master_semester_dosen')
|| current_URL() === base_URL('master_jurusan_matakuliah')
|| current_URL() === base_URL('master_datadosen')
|| current_URL() === base_URL('master_datamahasiswa')) { ?>
<!-- select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })
});
</script>
<?php } ?>

<script>
    $(document).ready(function() {
		setInterval(function() {
			var date = new Date();
			var h = date.getHours(),
				m = date.getMinutes(),
				s = date.getSeconds();
			h = ("0" + h).slice(-2);
			m = ("0" + m).slice(-2);
			s = ("0" + s).slice(-2);

			var time = h + ":" + m + ":" + s;
			$('.live-clock').html(time);
		}, 1000);
	});
</script>
</body>

</html>