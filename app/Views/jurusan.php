<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>MASTER JURUSAN</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <!-- Content Header (Page header) -->
        <div class="card card-primary">
            <div class="card-body">
                <!-- Button -->
                <div class="mt-2 mb-4">
                    <button type="button" data-toggle="modal" data-target="#myModal"
                        class="btn btn-sm bg-blue btn-flat"><i class="fa fa-plus"></i> Add Data</button>
                </div>
                <!-- table -->


                <div class="card-body p-0">
                    <table id="jurusan" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">No.</th>
                                <th>Jurusan</th>
                                <th style="width: 200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Update software</td>
                                <td>
                                    <button onclick="#" class="btn btn-sm btn-primary btn-flat" type="button"><i
                                            class="fa fa-edit"></i>
                                        Edit</button>
                                    <button onclick="#" class="btn btn-sm btn-danger btn-flat" type="button"><i
                                            class="fa fa-trash"></i>
                                        Delete</button>
                                </td>

                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Clean database</td>
                                <td><button onclick="#" class="btn btn-sm btn-primary btn-flat" type="button"><i
                                            class="fa fa-edit"></i>
                                        Edit</button>
                                    <button onclick="#" class="btn btn-sm btn-danger btn-flat" type="button"><i
                                            class="fa fa-trash"></i>
                                        Delete</button></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Cron job running</td>
                                <td><button onclick="#" class="btn btn-sm btn-primary btn-flat" type="button"><i
                                            class="fa fa-edit"></i>
                                        Edit</button>
                                    <button onclick="#" class="btn btn-sm btn-danger btn-flat" type="button"><i
                                            class="fa fa-trash"></i>
                                        Delete</button></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Fix and squish bugs</td>
                                <td><button onclick="#" class="btn btn-sm btn-primary btn-flat" type="button"><i
                                            class="fa fa-edit"></i>
                                        Edit</button>
                                    <button onclick="#" class="btn btn-sm btn-danger btn-flat" type="button"><i
                                            class="fa fa-trash"></i>
                                        Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <!-- <div class="card-body table-responsive p-0" style="height: 350px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jurusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>183</td>
                            <td>John Doe</td>
                            <td>
                                <button onclick="#" class="btn btn-sm btn-primary btn-flat" type="button"><i
                                        class="fa fa-edit"></i>
                                    Edit</button>
                                <button onclick="#" class="btn btn-sm btn-danger btn-flat" type="button"><i
                                        class="fa fa-trash"></i>
                                    Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>219</td>
                            <td>219</td>
                            <td>
                            <button onclick="#" class="btn btn-sm btn-primary btn-flat" type="button"><i
                                        class="fa fa-edit"></i>
                                    Edit</button>
                                <button onclick="#" class="btn btn-sm btn-danger btn-flat" type="button"><i
                                        class="fa fa-trash"></i>
                                    Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>
                            <button onclick="#" class="btn btn-sm btn-primary btn-flat" type="button"><i
                                        class="fa fa-edit"></i>
                                    Edit</button>
                                <button onclick="#" class="btn btn-sm btn-danger btn-flat" type="button"><i
                                        class="fa fa-trash"></i>
                                    Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>
                            <button onclick="#" class="btn btn-sm btn-primary btn-flat" type="button"><i
                                        class="fa fa-edit"></i>
                                    Edit</button>
                                <button onclick="#" class="btn btn-sm btn-danger btn-flat" type="button"><i
                                        class="fa fa-trash"></i>
                                    Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>
                            <button onclick="#" class="btn btn-sm btn-primary btn-flat" type="button"><i
                                        class="fa fa-edit"></i>
                                    Edit</button>
                                <button onclick="#" class="btn btn-sm btn-danger btn-flat" type="button"><i
                                        class="fa fa-trash"></i>
                                    Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>
                            <button onclick="#" class="btn btn-sm btn-primary btn-flat" type="button"><i
                                        class="fa fa-edit"></i>
                                    Edit</button>
                                <button onclick="#" class="btn btn-sm btn-danger btn-flat" type="button"><i
                                        class="fa fa-trash"></i>
                                    Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>
                            <button onclick="#" class="btn btn-sm btn-primary btn-flat" type="button"><i
                                        class="fa fa-edit"></i>
                                    Edit</button>
                                <button onclick="#" class="btn btn-sm btn-danger btn-flat" type="button"><i
                                        class="fa fa-trash"></i>
                                    Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>
                            <button onclick="#" class="btn btn-sm btn-primary btn-flat" type="button"><i
                                        class="fa fa-edit"></i>
                                    Edit</button>
                                <button onclick="#" class="btn btn-sm btn-danger btn-flat" type="button"><i
                                        class="fa fa-trash"></i>
                                    Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>
                            <button onclick="#" class="btn btn-sm btn-primary btn-flat" type="button"><i
                                        class="fa fa-edit"></i>
                                    Edit</button>
                                <button onclick="#" class="btn btn-sm btn-danger btn-flat" type="button"><i
                                        class="fa fa-trash"></i>
                                    Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>
                            <button onclick="#" class="btn btn-sm btn-primary btn-flat" type="button"><i
                                        class="fa fa-edit"></i>
                                    Edit</button>
                                <button onclick="#" class="btn btn-sm btn-danger btn-flat" type="button"><i
                                        class="fa fa-trash"></i>
                                    Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div></div> -->

            </div>


            <div class="card card-primary">
                <!-- form start -->
                <form action="inputpilgan" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <label for="exampleInputSeri">Seri Soal</label>
                                <input type="text" class="form-control" id="exampleInputSeri" name="serisoalessay"
                                    placeholder="Seri Soal">
                            </div>
                            <div class="col-5">
                                <label for="exampleInputSeri">Nama Soal</label>
                                <input type="text" class="form-control" id="exampleInputSeri" name="serisoalessay"
                                    placeholder="Nama Soal">
                            </div>
                            <div class="col-4">
                                <label for="exampleInputSeri">Jenis Soal</label>
                                <?php
                                $options = [
                                    '' => 'Jenis Soal',
                                    'soalpilgan'  => 'PILIHAN GANDA',
                                    'soalessay'    => 'ESSAY',
                                    'soalpilganessay'  => 'PILIHAN GANDA DAN ESSAY',
                                    'soalfile'  => 'FILE'
                                ];
                                
                                echo form_dropdown('role', $options, '','class = form-control');
                            ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Manage Jadwal</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body p-0">
                    <table class="table table-hover">
                        <tbody>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>
                                    <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                    UAS KELAS ILMU KOMPUTER | XYZ123
                                </td>
                            </tr>
                            <tr class="expandable-body">
                                <td>
                                    <div class="p-0">
                                        <table class="table table-hover table-sm">
                                            <tbody>
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Seri Soal</th>
                                                        <th>Nama Soal</th>
                                                        <th>Jenis Soal</th>
                                                        <th>
                                                            <ul class="nav nav-pills ml-auto p-0">
                                                                <li class="dropdown">
                                                                    <a class="dropdown-toggle" data-toggle="dropdown"
                                                                        href="#">
                                                                        Action <span class="caret"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item text-primary"
                                                                            tabindex="-1" href="#">Edit</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item text-danger"
                                                                            tabindex="-1" href="#">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tr data-widget="expandable-table" aria-expanded="false">
                                                    <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                        1
                                                    </td>
                                                    <td>XYZ123</td>
                                                    <td>UAS KELAS ILMU KOMPUTER</td>
                                                    <td>ESSAY</td>
                                                </tr>
                                                <tr class="expandable-body">
                                                    <td colspan="5">
                                                        <p><b>Soal:</b></p>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a
                                                            galley
                                                            of type and scrambled it to make a type specimen book. It
                                                            has
                                                            survived not only five centuries, but also the leap into
                                                            electronic typesetting, remaining essentially unchanged. It
                                                            was
                                                            popularised in the 1960s with the release of Letraset sheets
                                                            containing Lorem Ipsum passages, and more recently with
                                                            desktop
                                                            publishing software like Aldus PageMaker including versions
                                                            of
                                                            Lorem Ipsum.<b><br></b></p>
                                                        <p><span style="font-weight: bolder;">Jawaban:</span></p>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a
                                                            galley
                                                            of type and scrambled it to make a type specimen book. It
                                                            has
                                                            survived not only five centuries, but also the leap into
                                                            electronic typesetting, remaining essentially unchanged. It
                                                            was
                                                            popularised in the 1960s with the release of Letraset sheets
                                                            containing Lorem Ipsum passages, and more recently with
                                                            desktop
                                                            publishing software like Aldus PageMaker including versions
                                                            of
                                                            Lorem Ipsum.<span
                                                                style="font-weight: bolder;"><br></span><b><br></b></p>
                                                    </td>
                                                </tr>
                                                <tr data-widget="expandable-table" aria-expanded="false">
                                                    <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                        2
                                                    </td>
                                                    <td>XYZ123</td>
                                                    <td>
                                                        <ul class="nav nav-pills ml-auto p-0">
                                                            <li class="dropdown">
                                                                <a class="dropdown-toggle" data-toggle="dropdown"
                                                                    href="#">
                                                                    Action <span class="caret"></span>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item text-primary" tabindex="-1"
                                                                        href="#">Edit</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger" tabindex="-1"
                                                                        href="#">Delete</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="expandable-body">
                                                    <td colspan="5">
                                                        <p><b>Soal:</b></p>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a
                                                            galley
                                                            of type and scrambled it to make a type specimen book. It
                                                            has
                                                            survived not only five centuries, but also the leap into
                                                            electronic typesetting, remaining essentially unchanged. It
                                                            was
                                                            popularised in the 1960s with the release of Letraset sheets
                                                            containing Lorem Ipsum passages, and more recently with
                                                            desktop
                                                            publishing software like Aldus PageMaker including versions
                                                            of
                                                            Lorem Ipsum.<b><br></b></p>
                                                        <p><span style="font-weight: bolder;">Jawaban:</span></p>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a
                                                            galley
                                                            of type and scrambled it to make a type specimen book. It
                                                            has
                                                            survived not only five centuries, but also the leap into
                                                            electronic typesetting, remaining essentially unchanged. It
                                                            was
                                                            popularised in the 1960s with the release of Letraset sheets
                                                            containing Lorem Ipsum passages, and more recently with
                                                            desktop
                                                            publishing software like Aldus PageMaker including versions
                                                            of
                                                            Lorem Ipsum.<span
                                                                style="font-weight: bolder;"><br></span><b><br></b></p>
                                                    </td>
                                                </tr>
                                                <tr data-widget="expandable-table" aria-expanded="false">
                                                    <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                        3
                                                    </td>
                                                    <td>XYZ123</td>
                                                    <td>
                                                        <ul class="nav nav-pills ml-auto p-0">
                                                            <li class="dropdown">
                                                                <a class="dropdown-toggle" data-toggle="dropdown"
                                                                    href="#">
                                                                    Action <span class="caret"></span>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item text-primary" tabindex="-1"
                                                                        href="#">Edit</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger" tabindex="-1"
                                                                        href="#">Delete</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="expandable-body">
                                                    <td colspan="5">
                                                        <p><b>Soal:</b></p>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a
                                                            galley
                                                            of type and scrambled it to make a type specimen book. It
                                                            has
                                                            survived not only five centuries, but also the leap into
                                                            electronic typesetting, remaining essentially unchanged. It
                                                            was
                                                            popularised in the 1960s with the release of Letraset sheets
                                                            containing Lorem Ipsum passages, and more recently with
                                                            desktop
                                                            publishing software like Aldus PageMaker including versions
                                                            of
                                                            Lorem Ipsum.<b><br></b></p>
                                                        <p><span style="font-weight: bolder;">Jawaban:</span></p>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a
                                                            galley
                                                            of type and scrambled it to make a type specimen book. It
                                                            has
                                                            survived not only five centuries, but also the leap into
                                                            electronic typesetting, remaining essentially unchanged. It
                                                            was
                                                            popularised in the 1960s with the release of Letraset sheets
                                                            containing Lorem Ipsum passages, and more recently with
                                                            desktop
                                                            publishing software like Aldus PageMaker including versions
                                                            of
                                                            Lorem Ipsum.<span
                                                                style="font-weight: bolder;"><br></span><b><br></b></p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>
                                    <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                    SERI SOAL 2 | ABC123
                                </td>
                            </tr>
                            <tr class="expandable-body">
                                <td>
                                    <div class="p-0">
                                        <table class="table table-hover table-sm">
                                            <tbody>
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Seri Soal</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tr data-widget="expandable-table" aria-expanded="false">
                                                    <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                        1
                                                    </td>
                                                    <td>ABC123</td>
                                                    <td>
                                                        <ul class="nav nav-pills ml-auto p-0">
                                                            <li class="dropdown">
                                                                <a class="dropdown-toggle" data-toggle="dropdown"
                                                                    href="#">
                                                                    Action <span class="caret"></span>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item text-primary" tabindex="-1"
                                                                        href="#">Edit</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger" tabindex="-1"
                                                                        href="#">Delete</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="expandable-body">
                                                    <td colspan="5">
                                                        <p><b>Soal:</b></p>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a
                                                            galley
                                                            of type and scrambled it to make a type specimen book. It
                                                            has
                                                            survived not only five centuries, but also the leap into
                                                            electronic typesetting, remaining essentially unchanged. It
                                                            was
                                                            popularised in the 1960s with the release of Letraset sheets
                                                            containing Lorem Ipsum passages, and more recently with
                                                            desktop
                                                            publishing software like Aldus PageMaker including versions
                                                            of
                                                            Lorem Ipsum.<b><br></b></p>
                                                        <p><span style="font-weight: bolder;">Jawaban:</span></p>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a
                                                            galley
                                                            of type and scrambled it to make a type specimen book. It
                                                            has
                                                            survived not only five centuries, but also the leap into
                                                            electronic typesetting, remaining essentially unchanged. It
                                                            was
                                                            popularised in the 1960s with the release of Letraset sheets
                                                            containing Lorem Ipsum passages, and more recently with
                                                            desktop
                                                            publishing software like Aldus PageMaker including versions
                                                            of
                                                            Lorem Ipsum.<span
                                                                style="font-weight: bolder;"><br></span><b><br></b></p>
                                                    </td>
                                                </tr>
                                                <tr data-widget="expandable-table" aria-expanded="false">
                                                    <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                        2
                                                    </td>
                                                    <td>ABC123</td>
                                                    <td>
                                                        <ul class="nav nav-pills ml-auto p-0">
                                                            <li class="dropdown">
                                                                <a class="dropdown-toggle" data-toggle="dropdown"
                                                                    href="#">
                                                                    Action <span class="caret"></span>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item text-primary" tabindex="-1"
                                                                        href="#">Edit</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger" tabindex="-1"
                                                                        href="#">Delete</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="expandable-body">
                                                    <td colspan="5">
                                                        <p><b>Soal:</b></p>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a
                                                            galley
                                                            of type and scrambled it to make a type specimen book. It
                                                            has
                                                            survived not only five centuries, but also the leap into
                                                            electronic typesetting, remaining essentially unchanged. It
                                                            was
                                                            popularised in the 1960s with the release of Letraset sheets
                                                            containing Lorem Ipsum passages, and more recently with
                                                            desktop
                                                            publishing software like Aldus PageMaker including versions
                                                            of
                                                            Lorem Ipsum.<b><br></b></p>
                                                        <p><span style="font-weight: bolder;">Jawaban:</span></p>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a
                                                            galley
                                                            of type and scrambled it to make a type specimen book. It
                                                            has
                                                            survived not only five centuries, but also the leap into
                                                            electronic typesetting, remaining essentially unchanged. It
                                                            was
                                                            popularised in the 1960s with the release of Letraset sheets
                                                            containing Lorem Ipsum passages, and more recently with
                                                            desktop
                                                            publishing software like Aldus PageMaker including versions
                                                            of
                                                            Lorem Ipsum.<span
                                                                style="font-weight: bolder;"><br></span><b><br></b></p>
                                                    </td>
                                                </tr>
                                                <tr data-widget="expandable-table" aria-expanded="false">
                                                    <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                        3
                                                    </td>
                                                    <td>ABC123</td>
                                                    <td>
                                                        <ul class="nav nav-pills ml-auto p-0">
                                                            <li class="dropdown">
                                                                <a class="dropdown-toggle" data-toggle="dropdown"
                                                                    href="#">
                                                                    Action <span class="caret"></span>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item text-primary" tabindex="-1"
                                                                        href="#">Edit</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item text-danger" tabindex="-1"
                                                                        href="#">Delete</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="expandable-body">
                                                    <td colspan="5">
                                                        <p><b>Soal:</b></p>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a
                                                            galley
                                                            of type and scrambled it to make a type specimen book. It
                                                            has
                                                            survived not only five centuries, but also the leap into
                                                            electronic typesetting, remaining essentially unchanged. It
                                                            was
                                                            popularised in the 1960s with the release of Letraset sheets
                                                            containing Lorem Ipsum passages, and more recently with
                                                            desktop
                                                            publishing software like Aldus PageMaker including versions
                                                            of
                                                            Lorem Ipsum.<b><br></b></p>
                                                        <p><span style="font-weight: bolder;">Jawaban:</span></p>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a
                                                            galley
                                                            of type and scrambled it to make a type specimen book. It
                                                            has
                                                            survived not only five centuries, but also the leap into
                                                            electronic typesetting, remaining essentially unchanged. It
                                                            was
                                                            popularised in the 1960s with the release of Letraset sheets
                                                            containing Lorem Ipsum passages, and more recently with
                                                            desktop
                                                            publishing software like Aldus PageMaker including versions
                                                            of
                                                            Lorem Ipsum.<span
                                                                style="font-weight: bolder;"><br></span><b><br></b></p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</script>