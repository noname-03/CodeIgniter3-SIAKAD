        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-edit"></i> &nbsp;&nbsp;&nbsp;Data Kelas Mahasiswa</h4>
                            </div>
                            <div class="card-body">

                            <?php foreach ($tbl_kelas as $kelas) { ?>

                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Kode Kelas</label>
                                                    <input type="text" class="form-control" name="kd_kelas" readonly="readonly" value="<?php echo $kelas->kd_kelas ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Kelas</label>
                                                    <input type="text" class="form-control" readonly="readonly" name="nm_kelas" value="<?php echo $kelas->nm_kelas ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Jurusan</label>
                                                    <input type="text" class="form-control" readonly="readonly" name="jurusan" value="<?php echo $kelas->jurusan ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Semester</label>
                                                    <input type="text" class="form-control" readonly="readonly" name="semester" value="<?php echo $kelas->semester ?>">
                                                </div>
                                            </div>
                                        </div>


                            <?php } ?>

                            </div>
                        </div>
                   
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Pilih Mahasiswa Kelas</h4>
                            </div>
                            <div class="card-body">
                                
                            <form action="<?php echo base_url().'index.php/Admin/Admin/data_kelas_mahasiswa_aksi' ?>" method="POST">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM Mahasiswa</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Pilih</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM Mahasiswa</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Pilih</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_mhs as $mhs) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo "$mhs[nim_mahasiswa]" ?></td>
                                                <td><?php echo "$mhs[nm_mahasiswa] "?></td>
                                                <td>
                                                <input type="hidden" class="form-control" name="id_kelas" readonly="readonly" value="<?php echo $kelas->id_kelas ?>">
                                                <input type="Checkbox" class="form-control" name="id_mahasiswa[]" value="<?php echo "$mhs[id_mahasiswa]" ?>">
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                                <p></p>
                                <div class="form-actions">
                                    <div class="text-left">
                                        <input type="submit" class="btn btn-info" value="Simpan Data">
                                        <button type="reset" class="btn btn-dark">Reset</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- order table -->
            </div>

    







    </div>