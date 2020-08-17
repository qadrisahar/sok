<div class="p-5 contact-form col-lg-12"><br>
    <p class="alert alert-danger" style="text-align:center;">
        PERHATIAN !!!<br>
        Untuk registrasi hanya diperbolehkan satu kali saja, pastikan data yang anda input valid. <br>
        Data yang anda masukkan dan tidak bisa dipertanggung jawabkan dapat dikenakan sanksi oleh PT. PLN (PERSERO).

    </p>
    <?php 
        echo validation_errors('<div class="alert alert-success">','</div>');
        if ($this->session->flashdata('warning')) {
            echo '<div class="alert alert-danger">';
            echo $this->session->flashdata('warning');
            echo '</div>';
        }

        if ($this->session->flashdata('sukses')) {
            echo '<div class="alert alert-danger">';
            echo $this->session->flashdata('sukses');
            echo '</div>';
        }
    ?>
</div>

<div class="row">
    <div class="col-md-6 order-md-last d-flex">
        <div class="p-5 contact-form col-lg-12">
            <?php echo form_open_multipart(base_url('register')) ?>
            <label for="">Nama Perusahaan</label>
            <div class="form-group">
                <input type="text" class="form-control" name="nama_perusahaan">
            </div>
            <label for="">Nama Direktur</label>
            <div class="form-group">
                <input type="text" class="form-control" name="nama_direktur">
            </div>
            <label for="">Email Perusahaan</label>
            <div class="form-group">
                <input type="text" class="form-control" name="email">
            </div>
            <label for="">No. Telepon Perusahaan</label>
            <div class="form-group">
                <input type="text" class="form-control" name="telepon">
            </div>
            <label for="">Unggah Gambar Scan NPWP</label>
            <div class="form-group">
                <input type="file" required name="berkas"><br>
                <small style="color:red;">* file: jpg / png / jpeg</small>
            </div>
            <label for="">Unggah Gambar Perusahaan</label>
            <div class="form-group">
                <input type="file" required name="gambar"><br>
                <small style="color:red;">* Gambar halaman depan perusahaan. file: jpg / png / jpeg</small>
            </div><br>
            <div class="form-group">
                <input type="submit" value="Register" class="btn btn-primary py-2 px-5">
            </div>
            <h6>Jika sudah memiliki akun silahkan login <a href="<?php echo base_url('login_user') ?>">disini</a></h6>
        </div>
    </div>
    <div class="col-md-6 order-md-last d-flex">
        <div class="p-5 contact-form col-lg-12">
            <label for="">Alamat Lengkap Perusahaan</label>
            <div class="form-group">
                <textarea name="alamat" id="" class="form-control" rows="4"></textarea>
            </div>
            <label for="">Website Perusahaan</label>
            <div class="form-group">
                <input type="text" class="form-control" name="website">
                <small style="color:red;">* Jika tidak memiliki website, biarkan kosong</small>
            </div>
            <label for="">Username</label>
            <div class="form-group">
                <input type="text" class="form-control" name="username">
            </div>
            <label for="">Password</label>
            <div class="form-group">
                <input type="password" class="form-control" name="password">
            </div>
            <label for="">Ulangi Password</label>
            <div class="form-group">
                <input type="password" class="form-control" name="ulangi_password">
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>

