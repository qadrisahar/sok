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
                        echo form_open(base_url('admin/admin/edit/'.$admin->admin_id),'class="form-horizontal"'); 
                    ?>
                        <section class="panel"> 
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-child"></i>
                                            </span>
                                            <input type="text" name="nama" class="form-control" value="<?=$admin->nama?>" placeholder="Masukkan Nama"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input type="text" name="username" class="form-control" value="<?=$admin->username?>" placeholder="Masukkan Username"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">No. Telepon</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            <input type="text" name="telepon" class="form-control" value="<?=$admin->telepon?>" placeholder="Masukkan No. Telepon"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-map-marker"></i>
                                            </span>
                                            <textarea name="alamat" class="form-control" rows="2" placeholder="Masukan Alamat"><?=$admin->alamat?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="col-sm-9 col-sm-offset-2">
                                <button class="btn btn-primary">Simpan</button>
                                <a href="<?php echo base_url('admin/admin') ?>" class="btn btn-success">Kembali</a>
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </section>
                    <?php echo form_close(); ?>
                </div>
            </section>
        </div>
    </div>
</section>