
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Data Dosen UCIC</h4>
                            </div>
                            <div class="card-body">
                                
                                <a href="<?php echo base_url().'index.php/Admin/Admin/data_dosen_input' ?>" class="btn btn-primary">Tambah Data Dosen</a>
                                <a href="<?php echo base_url().'index.php/Admin/Admin/cetak_data_dosen' ?>" target="blank" class="btn btn-success">Cetak Data Dosen</a><p></p>

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIDN Dosen</th>
                                                <th>Nama Dosen</th>
                                                <th>Gender</th>
                                                <th>Alamat</th>
                                                <th>No Handphone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>NIDN Dosen</th>
                                                <th>Nama Dosen</th>
                                                <th>Gender</th>
                                                <th>Alamat</th>
                                                <th>No Handphone</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_dosen as $dosen) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $dosen->nidn_dosen ?></td>
                                                <td><?php echo $dosen->nm_dosen ?></td>
                                                <td><?php echo $dosen->gender ?></td>
                                                <td><?php echo $dosen->alamat ?></td>
                                                <td><?php echo $dosen->nohp ?></td>
                                                <td><a href="<?php echo base_url().'index.php/Admin/Admin/data_dosen_edit/'.$dosen->id_dosen.'' ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_dosen_delete/'.$dosen->id_dosen.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data ini ?')">Delete</a>
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