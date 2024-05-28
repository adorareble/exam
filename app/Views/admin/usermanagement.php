<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>USER MANAGEMENT</h1>
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
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">No.</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Created on</th>
                                        <th>Status</th>
                                        <th style="width: 200px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Nama YBS</td>
                                        <td>username di sini</td>
                                        <td>iniemail@gmail.com</td>
                                        <td class="text-center"><span class="badge rounded-pill bg-primary">Mahasiswa</span></td>
                                        <td>ex: 2024-05-26 17:03:43</td>
                                        <td class="text-center"><span class="badge rounded-pill bg-success">Active</span></td>
                                        <td><button class="btn btn-xs bg-red deaktif" type="button"><i
                                                    class="fa fa-edit"></i>
                                                Deactive</button>
                                            <button class="btn btn-xs bg-red hapus" type="button"><i
                                                    class="fa fa-trash"></i>
                                                Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Nama YBS</td>
                                        <td>username di sini</td>
                                        <td>iniemail@gmail.com</td>
                                        <td class="text-center"><span class="badge rounded-pill bg-primary">Dosen</span></td>
                                        <td>ex: 2024-05-26 17:03:43</td>
                                        <td class="text-center"><span class="badge rounded-pill bg-success">Active</span></td>
                                        <td><button class="btn btn-xs bg-red deaktif" type="button"><i
                                                    class="fa fa-edit"></i>
                                                Deactive</button>
                                            <button class="btn btn-xs bg-red hapus" type="button"><i
                                                    class="fa fa-trash"></i>
                                                Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Nama YBS</td>
                                        <td>username di sini</td>
                                        <td>iniemail@gmail.com</td>
                                        <td class="text-center"><span class="badge rounded-pill bg-primary">Admin</span></td>
                                        <td>ex: 2024-05-26 17:03:43</td>
                                        <td class="text-center"><span class="badge rounded-pill bg-danger">Not Active</span></td>
                                        <td><button class="btn btn-xs bg-green aktif" type="button"><i
                                                    class="fa fa-edit"></i>
                                                Active</button>
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

<!-- Modal Edit Data -->
<div class="modal fade" id="edit_data">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT USER</h5>
                </button>
            </div>
            <div class="modal-body">
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
                            <div class="col-sm-9">
                                <select class="form-control select2bs4" name="jurusan" style="width: 100%;">
                                    <option selected="selected" disabled>Jurusan</option>
                                    <option value="#">Nama Jurusan</option>
                                    <option value="#">Nama Jurusan</option>
                                    <option value="#">Nama Jurusan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matakuliah" class="col-sm-3 col-form-label">Mata Kuliah</label>
                            <div class="col-sm-9">
                                <select class="form-control select2bs4" multiple="multiple" name="matakuliah"
                                    style="width: 100%;">
                                    <!-- <option selected="selected" disabled>SEMESTER</option> -->
                                    <option value="#">Mata Kuliah - Sesuai Jurusan</option>
                                    <option value="#">Mata Kuliah - Sesuai Jurusan</option>
                                    <option value="#">Mata Kuliah - Sesuai Jurusan</option>
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