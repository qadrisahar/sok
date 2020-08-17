<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$title?></title>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link
            href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap"
            rel="stylesheet">

        <link
            rel="stylesheet"
            href="<?php echo base_url() ?>assets/user/plataforma/css/open-iconic-bootstrap.min.css">
        <link
            rel="stylesheet"
            href="<?php echo base_url() ?>assets/user/plataforma/css/animate.css">

        <link
            rel="stylesheet"
            href="<?php echo base_url() ?>assets/user/plataforma/css/owl.carousel.min.css">
        <link
            rel="stylesheet"
            href="<?php echo base_url() ?>assets/user/plataforma/css/owl.theme.default.min.css">
        <link
            rel="stylesheet"
            href="<?php echo base_url() ?>assets/user/plataforma/css/magnific-popup.css">

        <link
            rel="stylesheet"
            href="<?php echo base_url() ?>assets/user/plataforma/css/aos.css">

        <link
            rel="stylesheet"
            href="<?php echo base_url() ?>assets/user/plataforma/css/ionicons.min.css">

        <link
            rel="stylesheet"
            href="<?php echo base_url() ?>assets/user/plataforma/css/bootstrap-datepicker.css">
        <link
            rel="stylesheet"
            href="<?php echo base_url() ?>assets/user/plataforma/css/jquery.timepicker.css">

        <link
            rel="stylesheet"
            href="<?php echo base_url() ?>assets/user/plataforma/css/flaticon.css">
        <link
            rel="stylesheet"
            href="<?php echo base_url() ?>assets/user/plataforma/css/icomoon.css">
        <link
            rel="stylesheet"
            href="<?php echo base_url() ?>assets/user/plataforma/css/style.css">
    </head>
    <body>

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
                    Menu
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
            style="background-image: url('<?php echo base_url() ?>assets/user/plataforma/images/bg_2.jpg');"
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
                            <br>
                            <span>Kontak</span>
                        </h1>
                    </div>
                    <div class="col-lg-2 col"></div>
                    <div class="col-lg-4 col-md-6 mt-0 mt-md-5"></div>
                </div>
            </div>
        </div>

        <section class="ftco-section contact-section">
            <div class="container">
                <div class="row d-flex mb-5 contact-info">
                    <div class="col-md-12 mb-4">
                        <h2 class="h3">Contact Information</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-3">
                        <p>
                            <span>Address:</span>
                            198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                    <div class="col-md-3">
                        <p>
                            <span>Phone:</span>
                            <a href="tel://1234567920">+ 1235 2355 98</a>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p>
                            <span>Email:</span>
                            <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p>
                            <span>Website</span>
                            <a href="#">yoursite.com</a>
                        </p>
                    </div>
                </div>
                <div class="row block-9">
                    <div class="col-md-6 order-md-last d-flex">
                        <form action="#" class="bg-light p-5 contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea
                                    name=""
                                    id=""
                                    cols="30"
                                    rows="7"
                                    class="form-control"
                                    placeholder="Pesan"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>

                    </div>

                    <div class="col-md-6 d-flex">
                        <div id="map" class="bg-white"></div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Keterangan.</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts.</p>
                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                                <li class="ftco-animate">
                                    <a href="#">
                                        <span class="icon-twitter"></span>
                                    </a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#">
                                        <span class="icon-facebook"></span>
                                    </a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#">
                                        <span class="icon-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4 ml-md-5">
                            <h2 class="ftco-heading-2">Links</h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="py-2 d-block">Beranda</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block">Data Proyek</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block">Kontak</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Privacy</h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="py-2 d-block">Career</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block">About Us</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block">Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Punya Pertanyaan ?</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li>
                                        <span class="icon icon-map-marker"></span>
                                        <span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon icon-phone"></span>
                                            <span class="text">+2 392 3929 210</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon icon-envelope"></span>
                                            <span class="text">info@yourdomain.com</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">

                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY
                            3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved by - PT. PLN (Persero)
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY
                            3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px"><circle
                class="path-bg"
                cx="24"
                cy="24"
                r="22"
                fill="none"
                stroke-width="4"
                stroke="#eeeeee"/><circle
                class="path"
                cx="24"
                cy="24"
                r="22"
                fill="none"
                stroke-width="4"
                stroke-miterlimit="10"
                stroke="#F96D00"/></svg>
        </div>

        <script src="<?php echo base_url() ?>assets/user/plataforma/js/jquery.min.js"></script>
        <script
            src="<?php echo base_url() ?>assets/user/plataforma/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/user/plataforma/js/popper.min.js"></script>
        <script
            src="<?php echo base_url() ?>assets/user/plataforma/js/bootstrap.min.js"></script>
        <script
            src="<?php echo base_url() ?>assets/user/plataforma/js/jquery.easing.1.3.js"></script>
        <script
            src="<?php echo base_url() ?>assets/user/plataforma/js/jquery.waypoints.min.js"></script>
        <script
            src="<?php echo base_url() ?>assets/user/plataforma/js/jquery.stellar.min.js"></script>
        <script
            src="<?php echo base_url() ?>assets/user/plataforma/js/owl.carousel.min.js"></script>
        <script
            src="<?php echo base_url() ?>assets/user/plataforma/js/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo base_url() ?>assets/user/plataforma/js/aos.js"></script>
        <script
            src="<?php echo base_url() ?>assets/user/plataforma/js/jquery.animateNumber.min.js"></script>
        <script src="<?php echo base_url() ?>assets/user/plataforma/js/scrollax.min.js"></script>
        <script
            src="<?php echo base_url() ?>assets/user/plataforma/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="<?php echo base_url() ?>assets/user/plataforma/js/google-map.js"></script>
        <script src="<?php echo base_url() ?>assets/user/plataforma/js/main.js"></script>

    </body>
</html>