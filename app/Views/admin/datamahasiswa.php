<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>MASTER MAHASISWA</h1>
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
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Jurusan</th>
                                        <th>Semester</th>
                                        <th style="width: 200px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>2918983</td>
                                        <td>Indra</td>
                                        <td>indra@gmail.com</td>
                                        <td>indragif</td>
                                        <td>Teknik Informatika</td>
                                        <td>III (TIGA)</td>
                                        <td><button data-toggle="modal" data-target="#edit_data"
                                                class="btn btn-xs bg-blue" type="button"><i class="fa fa-edit"></i>
                                                Edit</button>
                                            <button class="btn btn-xs bg-red hapus" type="button"><i
                                                    class="fa fa-trash"></i>
                                                Delete</button>
                                            <button class="btn btn-xs bg-green aktifakun" type="button"><i
                                                    class="fa fa-plus"></i>
                                                Aktifkan Akun</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>2918983</td>
                                        <td>Indra</td>
                                        <td>indra@gmail.com</td>
                                        <td>indragif</td>
                                        <td>Teknik Informatika</td>
                                        <td>III (TIGA)</td>
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
                                        <td>2918983</td>
                                        <td>Indra</td>
                                        <td>indra@gmail.com</td>
                                        <td>indragif</td>
                                        <td>Teknik Informatika</td>
                                        <td>III (TIGA)</td>
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
                <h5 class="modal-title">TAMBAH MAHASISWA</h5>
                </button>
            </div>
            <div class="modal-body">
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="dosen" class="col-sm-3 col-form-label">NIM</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nim" placeholder="NIM">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dosen" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dosen" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email_mahasiswa" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dosen" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dosen" class="col-sm-3 col-form-label">Jurusan</label>
                            <div class="col-sm-9">
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected" disabled>Jurusan</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Komputer">Sistem Komputer</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="semester" class="col-sm-3 col-form-label">Semester</label>
                            <div class="col-sm-9">
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected" disabled>SEMESTER</option>
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
                <h5 class="modal-title">EDIT MAHASISWA</h5>
                </button>
            </div>
            <div class="modal-body">
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                            <label for="dosen" class="col-sm-3 col-form-label">NIM</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nim" placeholder="NIM">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dosen" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dosen" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email_mahasiswa" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dosen" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dosen" class="col-sm-3 col-form-label">Jurusan</label>
                            <div class="col-sm-9">
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected" disabled>Jurusan</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Komputer">Sistem Komputer</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="semester" class="col-sm-3 col-form-label">Semester</label>
                            <div class="col-sm-9">
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected" disabled>SEMESTER</option>
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