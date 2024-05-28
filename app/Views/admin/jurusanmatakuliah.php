<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>RELASI JURUSAN-MATA KULIAH</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div> -->

                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="mt-2 mb-4">
                                <button type="button" data-toggle="modal" data-target="#add_data"
                                    class="btn btn-sm bg-green"><i class="fa fa-plus"></i> Add Data</button>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">No.</th>
                                        <th>Jurusan</th>
                                        <th>Mata Kuliah</th>
                                        <th style="width: 200px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Teknik Informatika</td>
                                        <td>
                                            <span class="badge rounded-pill bg-success">Embeded System</span>
                                            <span class="badge rounded-pill bg-success">Bisnis Analisis</span>
                                            <span class="badge rounded-pill bg-success">Algoritma 1</span>
                                        </td>
                                        <td><button data-toggle="modal" data-target="#edit_data"
                                                class="btn btn-xs bg-blue" type="button"><i class="fa fa-edit"></i>
                                                Edit</button>
                                            <button class="btn btn-xs bg-red hapus" type="button"><i
                                                    class="fa fa-trash"></i>
                                                Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Teknik Informatika</td>
                                        <td>
                                            <span class="badge rounded-pill bg-success">Embeded System</span>
                                            <span class="badge rounded-pill bg-success">Bisnis Analisis</span>
                                            <span class="badge rounded-pill bg-success">Algoritma 1</span>
                                        </td>
                                        <td><button data-toggle="modal" data-target="#edit_data"
                                                class="btn btn-xs bg-blue" type="button"><i class="fa fa-edit"></i>
                                                Edit</button>
                                            <button class="btn btn-xs bg-red hapus" type="button"><i
                                                    class="fa fa-trash"></i>
                                                Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Teknik Informatika</td>
                                        <td>
                                            <span class="badge rounded-pill bg-success">Embeded System</span>
                                            <span class="badge rounded-pill bg-success">Bisnis Analisis</span>
                                            <span class="badge rounded-pill bg-success">Algoritma 1</span>
                                        </td>
                                        <td><button data-toggle="modal" data-target="#edit_data"
                                                class="btn btn-xs bg-blue" type="button"><i class="fa fa-edit"></i>
                                                Edit</button>
                                            <button class="btn btn-xs bg-red hapus" type="button"><i
                                                    class="fa fa-trash"></i>
                                                Delete</button>
                                        </td>
                                    </tr>
                                    
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-wrapper -->

<!-- Modal Add Data -->
<div class="modal fade" id="add_data">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">TAMBAH SEMESTER</h5>
                </button>
            </div>
            <div class="modal-body">
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="dosen" class="col-sm-2 col-form-label">DOSEN</label>
                            <div class="col-sm-10">
                            <select class="form-control select2bs4" name="dosen" style="width: 100%;">
                                <option selected="selected" disabled>DOSEN</option>
                                <option value="#">Jubaidah</option>
                                <option value="#">Indra</option>
                                <option value="#">Lutfi</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-10">
                            <select class="form-control select2bs4" multiple="multiple" name="semester" style="width: 100%;">
                                <!-- <option selected="selected" disabled>SEMESTER</option> -->
                                <option value="#">I (SATU)</option>
                                <option value="#">II (DUA)</option>
                                <option value="#">III (TIGA)</option>
                                <option value="#">IV (EMPAT)</option>
                                <option value="#">V (LIMA)</option>
                                <option value="#">VI (ENAM)</option>
                                <option value="#">VII (TUJUH)</option>
                                <option value="#">VIII (DELAPAN)</option>
                                <option value="#">IX (SEMBILAN)</option>
                                <option value="#">X (SEPULUH)</option>
                                <option value="#">XI (SEBELAS)</option>
                                <option value="#">XII (DUA BELAS)</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
            <div class="card-footer modal-footer justify-content-right">
                <button type="button" class="btn btn-sm bg-red" data-dismiss="modal">BATAL</button>
                <button type="submit" class="btn btn-sm bg-green tambah">TAMBAH</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal Edit Data -->
<div class="modal fade" id="edit_data">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT SEMESTER</h5>
                </button>
            </div>
            <div class="modal-body">
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                            <label for="dosen" class="col-sm-2 col-form-label">DOSEN</label>
                            <div class="col-sm-10">
                            <select class="form-control select2bs4" name="dosen" style="width: 100%;">
                                <option selected="selected" disabled>DOSEN</option>
                                <option value="#">Jubaidah</option>
                                <option value="#">Indra</option>
                                <option value="#">Lutfi</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-10">
                            <select class="form-control select2bs4" multiple="multiple" name="semester" style="width: 100%;">
                                <!-- <option selected="selected" disabled>SEMESTER</option> -->
                                <option value="#">I (SATU)</option>
                                <option value="#">II (DUA)</option>
                                <option value="#">III (TIGA)</option>
                                <option value="#">IV (EMPAT)</option>
                                <option value="#">V (LIMA)</option>
                                <option value="#">VI (ENAM)</option>
                                <option value="#">VII (TUJUH)</option>
                                <option value="#">VIII (DELAPAN)</option>
                                <option value="#">IX (SEMBILAN)</option>
                                <option value="#">X (SEPULUH)</option>
                                <option value="#">XI (SEBELAS)</option>
                                <option value="#">XII (DUA BELAS)</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
            <div class="card-footer modal-footer justify-content-right">
                <button type="button" class="btn btn-sm bg-red" data-dismiss="modal">BATAL</button>
                <button type="button" class="btn btn-sm bg-blue edit">SIMPAN</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->