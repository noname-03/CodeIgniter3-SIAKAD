<div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-edit"></i> &nbsp;&nbsp;&nbsp;Form Edit Data jadwal</h4>
                            </div>
                            <div class="card-body">

                            <?php foreach ($tbl_jadwal as $jadwal) { ?>

                                <form action="<?php echo base_url().'index.php/Admin/Admin/data_jadwal_edit_aksi' ?>" method="POST">
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Nama Ruangan</label>
                                                    <input type="hidden" class="form-control" name="id_jadwal" value="<?php echo $jadwal->id_jadwal ?>">
                                                    <input type="text" class="form-control" name="ruangan" value="<?php echo $jadwal->ruangan ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Hari Perkuliahan</label>
                                                    <select class="form-control" name="hari">
                                                        <option value="<?php echo $jadwal->hari ?>">~<?php echo $jadwal->hari ?>~</option>
                                                        <option value="Senin">Senin</option>
                                                        <option value="Selasa">Selasa</option>
                                                        <option value="Rabu">Rabu</option>
                                                        <option value="Kamis">Kamis</option>
                                                        <option value="Jum'at">Jum'at</option>
                                                        <option value="Sabtu">Sabtu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Jam Pelajaran</label>
                                                    <input type="time" class="form-control" name="jam" value="<?php echo $jadwal->jam?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Matakuliah</label>
                                                    <select class="form-control" name="id_matkul">
                                                        <option value="<?php echo $jadwal->id_matkul ?>">~<?php echo $jadwal->nm_matkul ?>~</option>
                                                        <?php 
                                                        foreach ($tbl_matkul as $matkul) { ?>
                                                        <option value="<?php echo $matkul->id_matkul ?>"><?php echo $matkul->nm_matkul ?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Kelas</label>
                                                    <select class="form-control" name="id_kelas" >
                                                        <option value="<?php echo $jadwal->id_kelas ?>">~<?php echo $jadwal->nm_kelas ?>/<?php echo $jadwal->semester ?>~</option>
                                                        <?php 
                                                        foreach ($tbl_kelas as $kelas) { ?>
                                                        <option value="<?php echo $kelas->id_kelas ?>"><?php echo $kelas->nm_kelas ?>/<?php echo $kelas->semester ?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Dosen</label>
                                                    <select class="form-control" name="id_dosen">
                                                        <option value="<?php echo $jadwal->id_dosen ?>">~<?php echo $jadwal->nm_dosen ?>~</option>
                                                        <?php 
                                                        foreach ($tbl_dosen as $dosen) { ?>
                                                        <option value="<?php echo $dosen->id_dosen ?>"><?php echo $dosen->nm_dosen ?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tahun Ajaran</label>
                                                    <input type="text" class="form-control" value="<?php echo $jadwal->thn_ajar ?>" name="thn_ajar">
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