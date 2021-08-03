 <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-edit"></i> &nbsp;&nbsp;&nbsp;Form Input Data Matakuliah</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url().'index.php/Admin/Admin/data_matkul_input_aksi' ?>" method="POST">
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Kode Matakuliah</label>
                                                    <input type="text" class="form-control" placeholder="Kode Matakuliah" name="kd_matkul">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Jumlah SKS</label>
                                                    <select class="form-control" name="sks">
                                                        <option value="">~Pilih Jumlah SKS~</option>
                                                        <option value="2 SKS">2 SKS</option>
                                                        <option value="3 SKS">3 SKS</option>
                                                        <option value="4 SKS">4 SKS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Nama Matakuliah</label>
                                                    <input type="text" class="form-control" placeholder="Nama Matakuliah" name="nm_matkul">
                                                </div>
                                            </div>
                                        </div>

										<div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Keterangan Matakuliah</label>
                                                    <textarea class="form-control" rows="3" placeholder="Keterangan matakuliah..." name="ket"></textarea>
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