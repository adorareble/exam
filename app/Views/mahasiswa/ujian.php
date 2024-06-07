<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>UJIAN</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-info"><i class="fas fa-graduation-cap"></i></span>

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
                                <span class="info-box-icon bg-warning"><i class="far fa-calendar"></i></span>

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
                                <span class="info-box-icon bg-green"><i class="far fa-clock"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Waktu</span>
                                    <span class="info-box-number"><span
                                            class="live-clock"><?=date('H:i:s')?></span></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="card">

                        <div class="card-body">

                            <table id="listujian" class="table table-bordered table-striped">
                                <thead class="table-header-centerr">
                                    <tr>
                                        <th style="width: 10px">No.</th>
                                        <th>Nama Ujian</th>
                                        <th>Mata Kuliah</th>
                                        <th>Dosen Pengajar</th>
                                        <th>Jenis Soal</th>
                                        <th>Jumlah Soal</th>
                                        <th>Waktu Mulai-Berakhir</th>
                                        <th>Lama Pengerjaan</th>
                                        <th style="width: 100px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>UAS 12</td>
                                        <td>Embeded System</td>
                                        <td>Istriku Atiqah</td>
                                        <td>Pilihan Ganda</td>
                                        <td>15</td>
                                        <td>12-29-2024 - 12-30-2024</td>
                                        <td>45 Menit</td>
                                        <td><button data-toggle="modal" data-target="#mulaiujian"
                                                class="btn btn-xs bg-green" type="button"><i class="fa fa-edit"></i>
                                                Mulai Ujian</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>UAS 12</td>
                                        <td>Embeded System</td>
                                        <td>Istriku Atiqah</td>
                                        <td>Pilihan Ganda</td>
                                        <td>15</td>
                                        <td>12-29-2024 - 12-30-2024</td>
                                        <td>45 Menit</td>
                                        <td><button data-toggle="modal" data-target="#hasil"
                                                class="btn btn-xs bg-blue" type="button"><i class="fa fa-edit"></i>
                                                Hasil Ujian</button>
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

<!-- Modal Mulai Ujian -->
<div class="modal fade" id="mulaiujian">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">DETAIL UJIAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- form start -->


                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <table class="table w-100">
                                <tr>
                                    <th>Nama Ujian</th>
                                    <td>UAS 123</td>
                                </tr>
                                <tr>
                                    <th>Jenis Soal</th>
                                    <td>Pilihan Ganda</td>
                                </tr>
                                <tr>
                                    <th>Jurusan</th>
                                    <td>Teknik Informatika</td>
                                </tr>
                                <tr>
                                    <th>Mata Kuliah</th>
                                    <td>Embeded System</td>
                                </tr>
                                <tr>
                                    <th>Dosen Pengajar</th>
                                    <td>Sultan</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-6">
                            <table class="table w-100">
                            <tr>
                                    <th>Waktu Mulai</th>
                                    <td>10/01/2022</td>
                                </tr>
                                <tr>
                                    <th>Waktu Berakhir</th>
                                    <td>10/01/2022</td>
                                </tr>
                                <tr>
                                    <th>Lama Pengerjaan</th>
                                    <td>40 Menit</td>
                                </tr>
                                
                                <tr>
                                    <th>Total Soal</th>
                                    <td>10</td>
                                </tr>
                                
                            </table>
                        </div>
                        <div class="callout callout-info">
                  <h5><b>Aturan Ujian:</b></h5>

                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt vero odio eum sapiente dolores numquam fugit exercitationem, ad reiciendis mollitia possimus ipsum vel corporis et eaque, consectetur laboriosam. Quos, a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, sed ea distinctio, at beatae quidem deserunt quae voluptate error in officiis modi vel dolor nemo fugiat similique veritatis vero? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum incidunt quibusdam voluptas voluptates aliquid deleniti, repudiandae pariatur eligendi asperiores, dolorum necessitatibus explicabo eveniet delectus architecto? Animi quisquam est in aliquam.</p>
                </div>
                        <div class="col-12">
                            <table class="table w-100">
                                <tr class="bg-green">
                                    <form action="">
                                        <th class="col-2 justify-content-center text-center"><label
                                                class="col-form-label">INPUT TOKEN UJIAN</label>
                                        </th>
                                        <td class="col-6"><input type="text" class="form-control" name="token"
                                                placeholder="Token"></td>
                                        <td class="col-2"><button type="submit"
                                                class="btn form-control bg-blue">MULAI</button></td>
                                    </form>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Modal Cek Hasil -->
<div class="modal fade" id="hasil">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">HASIL UJIAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- form start -->
                <div class="card-body">
                    
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>