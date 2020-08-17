<section role="main" class="content-body">
    <header class="page-header">
    </header>

    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>
                    <h2 class="panel-title"><?=$title?></h2>
                </header>
                <div class="panel-body">
                    <?php 
                        echo validation_errors('<div class="alert alert-warning">','</div>');
                        echo form_open(base_url('admin/admin/detail'),'class="form-horizontal"'); 
                    ?>
                        <section class="panel"> 
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Vendor</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-university"></i>
                                            </span>
                                            <input type="text" class="form-control" value="<?=$vendor->nama_perusahaan?>" readonly/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Direktur</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input type="text" class="form-control" value="<?=$vendor->nama_direktur?>" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email Perusahaan</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                            <input type="text" class="form-control" value="<?=$vendor->email?>" readonly/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">No. Telepon</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            <input type="text" class="form-control" value="<?=$vendor->telepon?>" readonly/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Alamat</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-map-marker"></i>
                                            </span>
                                            <textarea name="alamat" class="form-control" rows="2" readonly><?=$vendor->alamat?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tanggal Registrasi</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            <input type="text" class="form-control" value="<?=date('d-m-Y', strtotime($vendor->tanggal_daftar))?>" readonly/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Gambar Scan SPWP</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <a target="_blank" href="<?php echo base_url('assets/upload/register/'.$vendor->berkas) ?>">
                                            <img src="<?php echo base_url('assets/upload/register/'.$vendor->berkas) ?>" width="300" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Verikasi</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-check"></i>
                                            </span>
                                            <select name="status" class="form-control" id="">
                                                <option value="">- Pilih -</option>
                                                <option value="Diterima">Diterima</option>
                                                <option value="Ditolak">Ditolak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="col-sm-5 col-sm-offset-2">
                                <button class="btn btn-primary">Update</button>
                                <a href="<?php echo base_url('admin/vendor') ?>" class="btn btn-success">Kembali</a>
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </section>
                    <?php echo form_close(); ?>
                </div>
            </section>
        </div>
    </div>
</section>