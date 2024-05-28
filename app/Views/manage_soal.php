<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>MANAGE SOAL</h1>
                    </div>
                    <!-- <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Text Editors</li>
              </ol>
            </div> -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
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
                                                    <th><ul class="nav nav-pills ml-auto p-0">
                                                        <li class="dropdown">
                                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
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
                                                    </ul></th>
                                                </tr>
                                            </thead>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i> 1
                                                </td>
                                                <td>XYZ123</td>
                                                <td>UAS KELAS ILMU KOMPUTER</td>
                                                <td>ESSAY</td>
                                            </tr>
                                            <tr class="expandable-body">
                                                <td colspan="5">
                                                    <p><b>Soal:</b></p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.<b><br></b></p>
                                                    <p><span style="font-weight: bolder;">Jawaban:</span></p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.<span
                                                            style="font-weight: bolder;"><br></span><b><br></b></p>
                                                </td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i> 2
                                                </td>
                                                <td>XYZ123</td>
                                                <td>
                                                    <ul class="nav nav-pills ml-auto p-0">
                                                        <li class="dropdown">
                                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.<b><br></b></p>
                                                    <p><span style="font-weight: bolder;">Jawaban:</span></p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.<span
                                                            style="font-weight: bolder;"><br></span><b><br></b></p>
                                                </td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i> 3
                                                </td>
                                                <td>XYZ123</td>
                                                <td>
                                                    <ul class="nav nav-pills ml-auto p-0">
                                                        <li class="dropdown">
                                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.<b><br></b></p>
                                                    <p><span style="font-weight: bolder;">Jawaban:</span></p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
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
                                                <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i> 1
                                                </td>
                                                <td>ABC123</td>
                                                <td>
                                                    <ul class="nav nav-pills ml-auto p-0">
                                                        <li class="dropdown">
                                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.<b><br></b></p>
                                                    <p><span style="font-weight: bolder;">Jawaban:</span></p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.<span
                                                            style="font-weight: bolder;"><br></span><b><br></b></p>
                                                </td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i> 2
                                                </td>
                                                <td>ABC123</td>
                                                <td>
                                                    <ul class="nav nav-pills ml-auto p-0">
                                                        <li class="dropdown">
                                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.<b><br></b></p>
                                                    <p><span style="font-weight: bolder;">Jawaban:</span></p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.<span
                                                            style="font-weight: bolder;"><br></span><b><br></b></p>
                                                </td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i> 3
                                                </td>
                                                <td>ABC123</td>
                                                <td>
                                                    <ul class="nav nav-pills ml-auto p-0">
                                                        <li class="dropdown">
                                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
                                                        Lorem Ipsum.<b><br></b></p>
                                                    <p><span style="font-weight: bolder;">Jawaban:</span></p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of Letraset sheets
                                                        containing Lorem Ipsum passages, and more recently with desktop
                                                        publishing software like Aldus PageMaker including versions of
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