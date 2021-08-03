
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Data Matakuliah Universitas Catur Insan Cendekia</h4>
                            </div>
                            <div class="card-body">
                                
                                <a href="<?php echo base_url().'index.php/Admin/Admin/data_matkul_input' ?>" class="btn btn-primary">Tambah Data Matakuliah</a><p></p>

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Matakuliah</th>
                                                <th>Nama Matakuliah</th>
                                                <th>SKS</th>
                                                <th>Keterangan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Matakuliah</th>
                                                <th>Nama Matakuliah</th>
                                                <th>SKS</th>
                                                <th>Keterangan</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_matkul as $matkul) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $matkul->kd_matkul ?></td>
                                                <td><?php echo $matkul->nm_matkul ?></td>
                                                <td><?php echo $matkul->sks ?></td>
                                                <td><?php echo $matkul->ket ?></td>
                                                <td><a href="<?php echo base_url().'index.php/Admin/Admin/data_matkul_edit/'.$matkul->id_matkul.'' ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_matkul_delete/'.$matkul->id_matkul.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data ini ?')">Delete</a>
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