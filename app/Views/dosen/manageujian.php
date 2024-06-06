<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>MANAGE UJIAN</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                        <div class="mt-2 mb-4">
                                <button type="button" data-toggle="modal" data-target="#tambah_ujian"
                                    class="btn btn-sm bg-green"><i class="fa fa-plus"></i> Tambah Ujian</button>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="table-header-centerr">
                                    <tr>
                                        <th style="width: 10px">No.</th>
                                        <th>Nama Ujian</th>
                                        <th>Mata Kuliah</th>
                                        <th>Jumlah Soal</th>
                                        <th>Waktu Mulai-Berakhir</th>
                                        <th>Lama Pengerjaan</th>
                                        <th>Token</th>
                                        <th style="width: 200px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>UAS 12</td>
                                        <td>Embeded System</td>
                                        <td>Pilihan Ganda</td>
                                        <td>12-29-2024 - 12-30-2024</td>
                                        <td>45 Menit</td>
                                        <td><span class="badge rounded-pill bg-purple">XASSF4</span></td>
                                        <td><button data-toggle="modal" data-target="#edit_data"
                                                class="btn btn-xs bg-purple" type="button"><i class="fa fa-edit"></i>
                                                Regenerate Token</button>
                                            <button class="btn btn-xs bg-red hapus" type="button"><i
                                                    class="fa fa-trash"></i>
                                                Delete</button></td>
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
<div class="modal fade" id="tambah_ujian">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">TAMBAH UJIAN</h5>
                </button>
            </div>
            <div class="modal-body">
                <!-- form start -->
                <form action="" method="" class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="namaujian" class="col-sm-3 col-form-label">Nama Ujian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="namaujian" placeholder="Nama Ujian">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dosen" class="col-sm-3 col-form-label">Mata Kuliah</label>
                            <div class="col-sm-9">
                                <select name="matakuliah" class="form-control">
                                    <option value="#" disabled>Mata Kuliah</option>
                                    <option value="#">MATA KULIAH</option>
                                    <option value="#">MATA KULIAH</option>
                                    <option value="#">MATA KULIAH</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dosen" class="col-sm-3 col-form-label">Jumlah Soal</label>
                            <div class="col-sm-9">
                            <select name="jumlahsoal" class="form-control">
                                    <option value="#" disabled>Jumlah Soal</option>
                                    <option value="#">1</option>
                                    <option value="#">2</option>
                                    <option value="#">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dosen" class="col-sm-3 col-form-label">Waktu Mulai</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="waktumulai">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dosen" class="col-sm-3 col-form-label">Waktu Berakhir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="waktuakhir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dosen" class="col-sm-3 col-form-label">Lama Pengerjaan</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="lamapengerjaan" placeholder="Dalam Menit">
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
            </div>
            <div class="card-footer modal-footer justify-content-right">
                <button type="button" class="btn btn-sm bg-red" data-dismiss="modal">BATAL</button>
                <button type="submit" class="btn btn-sm bg-green tambah">TAMBAH</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>