<div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-edit"></i> &nbsp;&nbsp;&nbsp;Form Edit Data Kelas</h4>
                            </div>
                            <div class="card-body">

                            <?php foreach ($tbl_kelas as $kelas) { ?>

                                <form action="<?php echo base_url().'index.php/Admin/Admin/data_kelas_edit_aksi' ?>" method="POST">
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Kode Kelas</label>
                                                    <input type="hidden" class="form-control" name="id_kelas" value="<?php echo $kelas->id_kelas ?>">
                                                    <input type="text" class="form-control" name="kd_kelas" value="<?php echo $kelas->kd_kelas ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Kelas</label>
                                                    <input type="text" class="form-control" name="nm_kelas" value="<?php echo $kelas->nm_kelas ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Jurusan</label>
                                                    <select class="form-control" name="jurusan">
                                                        <option value="<?php echo $kelas->jurusan ?>">~<?php echo $kelas->jurusan ?>~</option>
                                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                                        <option value="Sistem Informasi">Sistem Informasi</option>
                                                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                                                        <option value="Komputerisasi Akutansi">Komputerisasi Akutansi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Semester</label>
                                                    <select class="form-control" name="semester">
                                                        <option value="<?php echo $kelas->semester ?>">~Semester <?php echo $kelas->semester ?>~</option>
                                                        <option value="1">Semester 1</option>
                                                        <option value="2">Semester 2</option>
                                                        <option value="3">Semester 3</option>
                                                        <option value="4">Semester 4</option>
                                                        <option value="5">Semester 5</option>
                                                        <option value="6">Semester 6</option>
                                                        <option value="7">Semester 7</option>
                                                        <option value="8">Semester 8</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="form-actions">
                                        <div class="text-right">
                                            <input type="submit" class="btn btn-info" value="Update Data">
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>

                            <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>