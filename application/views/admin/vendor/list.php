<section role="main" class="content-body">
    <header class="page-header">
    </header>

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
                        <!-- <a href="<?php echo base_url('admin/admin/tambah') ?>" class="btn btn-primary">Tambah Pengguna 
                            <i class="fa fa-plus"></i>
                        </a> -->
                    </div>
                </div>
            </div>
            <table
                class="table table-bordered table-striped"
                id="datatable-vendor" style="text-align:center;">
                <thead>
                    <tr>
                        <th style="text-align:center;">No</th>
                        <th style="text-align:center;">Vendor</th>
                        <th style="text-align:center;">Direktur</th>
                        <th style="text-align:center;">Email</th>
                        <th style="text-align:center;">No. Telepon</th>
                        <th style="text-align:center;">Aksi</th>
                    </tr>
                </thead>    
                <tbody>
                    <?php $no=1; foreach($vendor as $vendor){ ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $vendor->nama_perusahaan; ?></td>
                        <td><?php echo $vendor->nama_direktur; ?></td>
                        <td><?php echo $vendor->email; ?></td>
                        <td><?php echo $vendor->telepon; ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/vendor/detail/'.$vendor->id_vendor) ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Detail</a>
                            <a href="<?php echo base_url('admin/vendor/delete/'.$vendor->id_vendor) ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</section>