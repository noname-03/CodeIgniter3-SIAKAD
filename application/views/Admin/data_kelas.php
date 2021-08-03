
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Data Kelas UCIC</h4>
                            </div>
                            <div class="card-body">
                                
                                <a href="<?php echo base_url().'index.php/Admin/Admin/data_kelas_input' ?>" class="btn btn-primary">Tambah Data Kelas</a><p></p>

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Kelas</th>
                                                <th>Nama Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Semester</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Kelas</th>
                                                <th>Nama Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Semester</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_kelas as $kelas) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>    
                                                <td><?php echo $kelas->kd_kelas ?></td>
                                                <td><?php echo $kelas->nm_kelas ?>/<?php echo $kelas->semester ?></td>
                                                <td><?php echo $kelas->jurusan ?></td>
                                                <td><?php echo $kelas->semester ?></td>
                                                <td>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_kelas_mahasiswa/'.$kelas->id_kelas.'' ?>" class="btn btn-warning">Input Mahasiswa</a>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_kelas_mahasiswa_view/'.$kelas->id_kelas.'' ?>" class="btn btn-primary">View Mahasiswa</a>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_kelas_edit/'.$kelas->id_kelas.'' ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_kelas_delete/'.$kelas->id_kelas.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data ini ?')">Delete</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- order table -->
            </div>