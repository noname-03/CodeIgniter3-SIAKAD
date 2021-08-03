
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Data Mahasiswa Universitas Catur Insan Cendekia</h4>
                            </div>
                            <div class="card-body">
                                
                                <a href="<?php echo base_url().'index.php/Admin/Admin/data_mhs_input' ?>" class="btn btn-primary">Tambah Data Mahasiswa</a><p></p>

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM Mahasiswa</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Alamat</th>
                                                <th>Gender</th>
                                                <th>No Handphone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM Mahasiswa</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Alamat</th>
                                                <th>Gender</th>
                                                <th>No Handphone</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_mhs as $mhs) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $mhs->nim_mahasiswa ?></td>
                                                <td><?php echo $mhs->nm_mahasiswa ?></td>
                                                <td><?php echo $mhs->alamat ?></td>
                                                <td><?php echo $mhs->gender ?></td>
                                                <td><?php echo $mhs->nohp ?></td>
                                                <td><a href="<?php echo base_url().'index.php/Admin/Admin/data_mhs_edit/'.$mhs->id_mahasiswa.'' ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_mhs_delete/'.$mhs->id_mahasiswa.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data ini ?')">Delete</a>
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