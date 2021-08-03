<div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Absensi Mahasiswa</h4>
                            </div>
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM Mahasiswa</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Pertemuan</th>
                                                <th>Tanggal</th>
                                                <th>Kehadiran</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM Mahasiswa</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Pertemuan</th>
                                                <th>Tanggal</th>
                                                <th>Kehadiran</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_absensi as $absensi) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $absensi->nim_mahasiswa ?></td>
                                                <td><?php echo $absensi->nm_mahasiswa ?></td>
                                                <td><?php echo $absensi->pertemuan ?></td>
                                                <td><?php echo $absensi->tgl ?></td>
                                                <td><?php echo $absensi->absensi ?></td>
                                                
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- order table -->
            </div>
    </div>