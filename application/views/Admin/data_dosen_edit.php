 <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-edit"></i> &nbsp;&nbsp;&nbsp;Form Edit Data Dosen</h4>
                            </div>
                            <div class="card-body">

                            <?php foreach ($tbl_dosen as $dosen) { ?>

                                <form action="<?php echo base_url().'index.php/Admin/Admin/data_dosen_edit_aksi' ?>" method="POST">
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>NIDN Dosen</label>
                                                    <input type="hidden" class="form-control" name="id_dosen" value="<?php echo $dosen->id_dosen ?>">
                                                    <input type="text" class="form-control" name="nidn_dosen" value="<?php echo $dosen->nidn_dosen ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Dosen</label>
                                                    <input type="text" class="form-control" name="nm_dosen" value="<?php echo $dosen->nm_dosen ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label><br>
                                                    <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="custom1" name="gender" value="Laki-Laki" <?php if($dosen->gender == 'Laki-Laki') echo "checked='checked'" ?>>
                                                    <label class="custom-control-label" for="custom1">Laki-Laki</label>
                                                    </div>&nbsp;&nbsp;
                                                    
                                                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="custom2" name="gender" value="Perempuan" <?php if($dosen->gender == 'Perempuan') echo "checked='checked'" ?>>
                                                    <label class="custom-control-label" for="custom2">Perempuan</label>
                                                    </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>No Handphone</label>
                                                    <input type="text" class="form-control" placeholder="No Handphone" name="nohp" value="<?php echo $dosen->nohp ?>">
                                                </div>
                                            </div>
                                        </div>


										<div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea class="form-control" rows="3" name="alamat"><?php echo $dosen->alamat ?></textarea>
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