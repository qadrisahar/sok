
<div class="col-md-6 order-md-last d-flex">
    <form action="#" class="p-5 contact-form col-lg-12">
    <?php 
        echo validation_errors('<div class="alert alert-success">','</div>');
        if ($this->session->flashdata('warning')) {
            echo '<div class="alert alert-danger">';
            echo $this->session->flashdata('warning');
            echo '</div>';
        }

        if ($this->session->flashdata('sukses')) {
            echo '<div class="alert alert-info">';
            echo $this->session->flashdata('sukses');
            echo '</div>';
        }
    ?>
        <label for="">Username</label>
        <div class="form-group">
            <input type="text" name="username" class="form-control">
        </div>
        <label for="">Password</label>
        <div class="form-group">
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
                <input type="submit" value="Login" class="btn btn-primary py-2 px-5">
            </div>
        <h6>Jika belum memiliki akun silahkan registrasi <a href="<?php echo base_url('register') ?>">disini</a></h6>
    </form>
</div>
