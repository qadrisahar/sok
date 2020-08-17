<nav
    class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
    id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">PT. PLN (PERSERO)</a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#ftco-nav"
            aria-controls="ftco-nav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="oi oi-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?php echo base_url('dashboard') ?>" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('proyek') ?>" class="nav-link">Data Project</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('kontak') ?>" class="nav-link">Kontak</a>
                </li>
                <li class="nav-item cta mr-md-2">
                    <a href="<?php echo base_url('login_user') ?>" class="nav-link">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div
    class="hero-wrap"
    style="background-image: url('<?php echo base_url() ?>assets/user/plataforma/images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div
            class="row no-gutters slider-text align-items-center justify-content-start"
            data-scrollax-parent="true">
            <div
                class="col-lg-6 col-md-6 ftco-animate"
                data-scrollax=" properties: { translateY: '70%' }">
                <h1
                    class="mb-4"
                    data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <?=$subtitle?>
                    <br>
                    <span><?=$title?></span>
                </h1>
            </div>
            <div class="col-lg-2 col"></div>
            <div class="col-lg-4 col-md-6 mt-0 mt-md-5"></div>
        </div>
    </div>
</div>