<section role="main" class="content-body">
    <header class="page-header">
    </header>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title"><?=$title?></h2>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                <?php 
                    echo validation_errors('<div class="alert alert-success">','</div>');
                    if ($this->session->flashdata('sukses')) {
                        echo '<div class="alert alert-info">';
                        echo $this->session->flashdata('sukses');
                        echo '</div>';
                    }
                ?>
                </div>
                <div class="col-sm-6">
                    <div class="mb-md">
                        <a href="<?php echo base_url('admin/admin/tambah') ?>" class="btn btn-primary">Tambah Pengguna 
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <table
                class="table table-bordered table-striped mb-none"
                id="datatable-editable" style="text-align:center;">
                <thead>
                    <tr>
                        <th style="text-align:center;">No</th>
                        <th style="text-align:center;">Nama</th>
                        <th style="text-align:center;">Username</th>
                        <th style="text-align:center;">Level</th>
                        <th style="text-align:center;">Aksi</th>
                    </tr>
                </thead>    
                <tbody>
                    <?php $no=1; foreach($admin as $admin){ ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $admin->nama; ?></td>
                        <td><?php echo $admin->username; ?></td>
                        <td><?php echo $admin->level; ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/admin/edit/'.$admin->admin_id) ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url('admin/admin/delete/'.$admin->admin_id) ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                            <a href="<?php echo base_url('admin/admin/ganti_pass/'.$admin->admin_id) ?>" class="btn btn-warning btn-xs"><i class="fa fa-key"></i> Ganti Password</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- end: page -->
</section>