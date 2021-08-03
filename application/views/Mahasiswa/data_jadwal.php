
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Data Jadwal Perkuliahan</h4>
                            </div>
                            <div class="card-body">

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
                                                <td><?php echo $jadwal->nm_kelas ?>/<?php echo $jadwal->semester ?></td>
                                                <td><?php echo $jadwal->nm_matkul ?></td>
                                                <td><?php echo $jadwal->nm_dosen ?></td>
                                                <td><?php echo $jadwal->thn_ajar ?></td>
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