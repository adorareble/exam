<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>INPUT PILIHAN GANDA</h1>
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
        <!-- input Soal -->
        <div class="card card-primary">
            <!-- form start -->
            <form action="inputpilgan" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputSeri">Seri Soal</label>
                        <!-- <input type="text" class="form-control " id="exampleInputSeri" name="serisoalpilgan"
                            placeholder="Seri Soal"> -->
                        <select name="serisoalpilgan" class="form-control col-5">
                            <option value="uts12">UTS ILKOM 23 APRIL 2022</option>
                            <option value="uas23">UAS ILKOM 12 APRIL 2021</option>
                            <option value="quiz34">KALO INI QUIZ DOANG, EZ LAH</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSoal">Input Soal</label>
                        <input type="textarea" name="pilgansoal"
                            id="summernote"></input>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSoal">Input Jawaban Benar</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="A" name="pilganjawaban">
                            <label class="form-check-label">A</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="B" name="pilganjawaban">
                            <label class="form-check-label">B</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="C" name="pilganjawaban">
                            <label class="form-check-label">C</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="D" name="pilganjawaban">
                            <label class="form-check-label">D</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="E" name="pilganjawaban">
                            <label class="form-check-label">E</label>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

        <!-- list soal with table -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Soal</h3>
            </div>
            <!-- ./card-header -->
            <div class="card-body p-0">
                <table class="table table-hover">
                    <tbody>
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>
                                <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                SERI SOAL 1 | XYZ123
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
                                                    <th>Kunci Jawaban</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i> 1
                                                </td>
                                                <td>XYZ123</td>
                                                <td>A</td>
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
                                                    <p>A. lorem<br>B. ipsum<br>C. is<br>D. simply<br>E. hehehe</p>
                                                </td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i> 2
                                                </td>
                                                <td>XYZ123</td>
                                                <td>B</td>
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
                                                    <p>A. lorem<br>B. ipsum<br>C. is<br>D. simply<br>E. hehehe</p>
                                                </td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i> 3
                                                </td>
                                                <td>XYZ123</td>
                                                <td>C</td>
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
                                                    <p>A. lorem<br>B. ipsum<br>C. is<br>D. simply<br>E. hehehe</p>
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
                                                    <th>Kunci Jawaban</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i> 1
                                                </td>
                                                <td>ABC123</td>
                                                <td>A</td>
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
                                                    <p>A. lorem<br>B. ipsum<br>C. is<br>D. simply<br>E. hehehe</p>
                                                </td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i> 2
                                                </td>
                                                <td>ABC123</td>
                                                <td>B</td>
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
                                                    <p>A. lorem<br>B. ipsum<br>C. is<br>D. simply<br>E. hehehe</p>
                                                </td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i> 3
                                                </td>
                                                <td>ABC123</td>
                                                <td>C</td>
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
                                                    <p>A. lorem<br>B. ipsum<br>C. is<br>D. simply<br>E. hehehe</p>
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