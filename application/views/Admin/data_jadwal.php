
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Data Jadwal Perkuliahan</h4>
                            </div>
                            <div class="card-body">
                                
                                <a href="<?php echo base_url().'index.php/Admin/Admin/data_jadwal_input' ?>" class="btn btn-primary">Tambah Data Jadwal</a><p></p>

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Ruangan</th>
                                                <th>Hari & Jam</th>
                                                <th>Kelas</th>
                                                <th>Matakuliah</th>
                                                <th>Dosen</th>
                                                <th>Tahun Ajaran</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Ruangan</th>
                                                <th>Hari & Jam</th>
                                                <th>Kelas</th>
                                                <th>Matakuliah</th>
                                                <th>Dosen</th>
                                                <th>Tahun Ajaran</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_jadwal as $jadwal) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $jadwal->ruangan ?></td>
                                                <td><?php echo $jadwal->hari ?> / <?php echo $jadwal->jam ?></td>
                                                <td><?php echo $jadwal->nm_kelas ?></td>
                                                <td><?php echo $jadwal->nm_matkul ?></td>
                                                <td><?php echo $jadwal->nm_dosen ?></td>
                                                <td><?php echo $jadwal->thn_ajar ?></td>
                                                <td><a href="<?php echo base_url().'index.php/Admin/Admin/jadwal_edit/'.$jadwal->id_jadwal.'' ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_jadwal_delete/'.$jadwal->id_jadwal.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data ini ?')">Delete</a>
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