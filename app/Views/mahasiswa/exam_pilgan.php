<?php
$session = \Config\Services::session();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ExamSITE</title>
    <!-- Toastr -->
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="plugins/simplemde/simplemde.min.css">
    <?php if (current_URL() === base_URL('master_semester_dosen') || current_URL() === base_URL('master_jurusan_matakuliah') || current_URL() === base_URL('master_datadosen') || current_URL() === base_URL('master_datamahasiswa')) { ?>
    <!-- select2 -->
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <?php } ?>
</head>

<body class="hold-transition sidebar-collapse layout-top-nav">
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                  <div class="card"><div class="card-body">
                  <div class="row mb-2">
                        <div class="col-6">
                            <h1><b>UAS 12</b></h1>
                        </div>
                        <div class="col-6 text-right">
                            <h1>Embeded System</h1>
                        </div>
                        <!-- /.col -->
                    </div><!-- /.row -->
                  </div></div>
                    
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="#" method="post">
                              <!-- action pilgan = submitpilgan
                              action essay = submitessay
                              action file = submitfile -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6 col-12">
                                                <div class="info-box">
                                                    <span class="info-box-icon bg-orange"><i
                                                            class="fas fa-user"></i></span>

                                                    <div class="info-box-content">
                                                        <span class="info-box-text">Nama</span>
                                                        <span class="info-box-number">Zulfikar</span>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-12">
                                                <div class="info-box">
                                                    <span class="info-box-icon bg-info"><i
                                                            class="fas fa-graduation-cap"></i></span>

                                                    <div class="info-box-content">
                                                        <span class="info-box-text">Jurusan</span>
                                                        <span class="info-box-number">Teknik Informatika</span>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-md-3 col-sm-6 col-12">
                                                <div class="info-box">
                                                    <span class="info-box-icon bg-warning"><i
                                                            class="far fa-calendar"></i></span>

                                                    <div class="info-box-content">
                                                        <span class="info-box-text">Tanggal</span>
                                                        <span class="info-box-number"><?= date("l, d-m-Y"); ?></span>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-md-3 col-sm-6 col-12">
                                                <div class="info-box">
                                                    <span class="info-box-icon bg-red"><i
                                                            class="far fa-clock"></i></span>

                                                    <div class="info-box-content">
                                                        <span class="info-box-text">Waktu Tersisa</span>
                                                        <span class="info-box-number" id="countdown">
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <b>1.</b>
                                            <div class="col-11 text-left">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum
                                                    has
                                                    been the industry's standard dummy text ever since the 1500s,
                                                    when an unknown printer
                                                    took a
                                                    galley of type and scrambled it to make a type specimen book. It
                                                    has survived not only
                                                    five
                                                    centuries, but also the leap into electronic typesetting,
                                                    remaining essentially
                                                    unchanged.
                                                    It was popularised in the 1960s with the release of Letraset
                                                    sheets containing Lorem
                                                    Ipsum
                                                    passages, and more recently with desktop publishing software
                                                    like Aldus PageMaker
                                                    including
                                                    versions of Lorem Ipsum.</p>
                                                <p><b>A. </b>Ini
                                                    A<br><b>B.</b> Ini
                                                    B<br><b>C.</b> Ini
                                                    C<br><b>D.</b> Ini
                                                    D<br><b>E.</b> Ini E</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2"><b>PILIH JAWABAN:</b></div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="A" name="jawaban1">
                                                <label class="form-check-label"><b>A</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="B" name="jawaban1">
                                                <label class="form-check-label"><b>B</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="C" name="jawaban1">
                                                <label class="form-check-label"><b>C</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="D" name="jawaban1">
                                                <label class="form-check-label"><b>D</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="E" name="jawaban1">
                                                <label class="form-check-label"><b>E</b></label>
                                            </div>
                                            <div class="col-3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <b>1.</b>
                                            <div class="col-11 text-left">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum
                                                    has
                                                    been the industry's standard dummy text ever since the 1500s,
                                                    when an unknown printer
                                                    took a
                                                    galley of type and scrambled it to make a type specimen book. It
                                                    has survived not only
                                                    five
                                                    centuries, but also the leap into electronic typesetting,
                                                    remaining essentially
                                                    unchanged.
                                                    It was popularised in the 1960s with the release of Letraset
                                                    sheets containing Lorem
                                                    Ipsum
                                                    passages, and more recently with desktop publishing software
                                                    like Aldus PageMaker
                                                    including
                                                    versions of Lorem Ipsum.</p>
                                                <p><b>A. </b>Ini
                                                    A<br><b>B.</b> Ini
                                                    B<br><b>C.</b> Ini
                                                    C<br><b>D.</b> Ini
                                                    D<br><b>E.</b> Ini E</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2"><b>PILIH JAWABAN:</b></div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="A" name="jawaban1">
                                                <label class="form-check-label"><b>A</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="B" name="jawaban1">
                                                <label class="form-check-label"><b>B</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="C" name="jawaban1">
                                                <label class="form-check-label"><b>C</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="D" name="jawaban1">
                                                <label class="form-check-label"><b>D</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="E" name="jawaban1">
                                                <label class="form-check-label"><b>E</b></label>
                                            </div>
                                            <div class="col-3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <b>1.</b>
                                            <div class="col-11 text-left">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum
                                                    has
                                                    been the industry's standard dummy text ever since the 1500s,
                                                    when an unknown printer
                                                    took a
                                                    galley of type and scrambled it to make a type specimen book. It
                                                    has survived not only
                                                    five
                                                    centuries, but also the leap into electronic typesetting,
                                                    remaining essentially
                                                    unchanged.
                                                    It was popularised in the 1960s with the release of Letraset
                                                    sheets containing Lorem
                                                    Ipsum
                                                    passages, and more recently with desktop publishing software
                                                    like Aldus PageMaker
                                                    including
                                                    versions of Lorem Ipsum.</p>
                                                <p><b>A. </b>Ini
                                                    A<br><b>B.</b> Ini
                                                    B<br><b>C.</b> Ini
                                                    C<br><b>D.</b> Ini
                                                    D<br><b>E.</b> Ini E</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2"><b>PILIH JAWABAN:</b></div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="A" name="jawaban1">
                                                <label class="form-check-label"><b>A</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="B" name="jawaban1">
                                                <label class="form-check-label"><b>B</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="C" name="jawaban1">
                                                <label class="form-check-label"><b>C</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="D" name="jawaban1">
                                                <label class="form-check-label"><b>D</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="E" name="jawaban1">
                                                <label class="form-check-label"><b>E</b></label>
                                            </div>
                                            <div class="col-3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <b>1.</b>
                                            <div class="col-11 text-left">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum
                                                    has
                                                    been the industry's standard dummy text ever since the 1500s,
                                                    when an unknown printer
                                                    took a
                                                    galley of type and scrambled it to make a type specimen book. It
                                                    has survived not only
                                                    five
                                                    centuries, but also the leap into electronic typesetting,
                                                    remaining essentially
                                                    unchanged.
                                                    It was popularised in the 1960s with the release of Letraset
                                                    sheets containing Lorem
                                                    Ipsum
                                                    passages, and more recently with desktop publishing software
                                                    like Aldus PageMaker
                                                    including
                                                    versions of Lorem Ipsum.</p>
                                                <p><b>A. </b>Ini
                                                    A<br><b>B.</b> Ini
                                                    B<br><b>C.</b> Ini
                                                    C<br><b>D.</b> Ini
                                                    D<br><b>E.</b> Ini E</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2"><b>PILIH JAWABAN:</b></div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="A" name="jawaban1">
                                                <label class="form-check-label"><b>A</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="B" name="jawaban1">
                                                <label class="form-check-label"><b>B</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="C" name="jawaban1">
                                                <label class="form-check-label"><b>C</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="D" name="jawaban1">
                                                <label class="form-check-label"><b>D</b></label>
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="radio" value="E" name="jawaban1">
                                                <label class="form-check-label"><b>E</b></label>
                                            </div>
                                            <div class="col-3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">TERIMA KASIH SUDAH MENJAWAB DENGAN JUJUR.</div>
                                            <div class="col-5"></div>
                                            <div class="col-2"><button type="submit"
                                                    class="btn form-control bg-blue">SUBMIT</button></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->


        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright <?= date('Y');?> <a href="">Injectech</a>.</strong> All rights reserved.

    </div>



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
    // Set the date we're counting down to (10 minutes from now)
    var countDownDate = new Date();
    countDownDate.setMinutes(countDownDate.getMinutes() + 60);

    // Update the countdown every 1 second
    var x = setInterval(function() {

        // Get the current date and time
        var now = new Date().getTime();

        // Calculate the time remaining
        var distance = countDownDate - now;

        // Calculate minutes and seconds
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="countdown"
        document.getElementById("countdown").innerHTML = minutes + "m " + seconds + "s ";

        // If the countdown is over, display a message
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script>
</body>

</html>