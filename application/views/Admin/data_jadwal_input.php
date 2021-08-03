<div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-edit"></i> &nbsp;&nbsp;&nbsp;Form Input Data Jadwal</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url().'index.php/Admin/Admin/data_jadwal_input_aksi' ?>" method="POST">
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Nama Ruangan</label>
                                                    <input type="text" class="form-control" placeholder="nama ruangan" name="ruangan">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Hari Perkuliahan</label>
                                                    <select class="form-control" name="hari">
                                                        <option value="">~Pilih Hari~</option>
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
                                                    <input type="time" class="form-control" name="jam">
                                                </div>
                                            </div>
                                        </div>

										<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Matakuliah</label>
                                                    <select class="form-control" name="id_matkul">
                                                        <option value="">~Pilih Nama Mata Kuliah~</option>
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
                                                    <select class="form-control" name="id_kelas">
                                                        <option value="">~Pilih Nama Kelas~</option>
                                                        <?php 
                                                        foreach ($tbl_kelas as $kelas) { ?>
                                                        <option value="<?php echo $kelas->id_kelas ?>"><?php echo $kelas->nm_kelas ?>/<?php echo $kelas->semester ?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Dosen</label>
                                                    <select class="form-control" name="id_dosen">
                                                        <option value="">~Pilih Nama Dosen~</option>
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
                                                    <input type="text" class="form-control" placeholder="tahun ajaran" name="thn_ajar">
                                                </div>
                                            </div>
                                        </div>

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
            </div>
        </div>
    </div>