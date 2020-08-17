<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div
                class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url(<?php echo base_url() ?>assets/user/plataforma/images/about.jpg);"></div>
            <div class="col-md-7 wrap-about py-md-5 ftco-animate">
                <div class="heading-section mb-5 pt-5 pl-md-5">
                    <div class="pr-md-5 mr-md-5">
                        <h2 class="mb-4">What is all about us?</h2>
                    </div>

                    <p>A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country, in which roasted parts of
                        sentences fly into your mouth.</p>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where
                        it came from it would have been rewritten a thousand times and everything that
                        was left from its origin would be the word "and" and the Little Blind Text
                        should turn around and return to its own, safe country. But nothing the copy
                        said could convince her and so it didn’t take long until a few insidious Copy
                        Writers ambushed her, made her drunk with Longe and Parole and dragged her into
                        their agency, where they abused her for their.</p>
                    <p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><br><br>


<section class="ftco-section ftco-gallery ftco-no-pt">
    <div class="container-fluid px-4">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-3"> Galeri</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 ftco-animate">
                <a
                    href="<?php echo base_url() ?>assets/user/plataforma/images/image_1.jpg"
                    class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(<?php echo base_url() ?>assets/user/plataforma/images/image_1.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a
                    href="<?php echo base_url() ?>assets/user/plataforma/images/image_2.jpg"
                    class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(<?php echo base_url() ?>assets/user/plataforma/images/image_2.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a
                    href="<?php echo base_url() ?>assets/user/plataforma/images/image_3.jpg"
                    class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(<?php echo base_url() ?>assets/user/plataforma/images/image_3.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a
                    href="<?php echo base_url() ?>assets/user/plataforma/images/image_4.jpg"
                    class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(<?php echo base_url() ?>assets/user/plataforma/images/image_4.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-3">Vendors Terdaftar</h2>
            </div>
        </div>
        <div class="row ftco-animate">
        <?php foreach($vendor as $vendor){ ?>
            <div class="col-md-4">
                <div class="item">
                    <div class="testimony-wrap text-center py-4 pb-5">
                        <!-- <div class="user-img mb-4" style="background-image: url(<?php echo base_url() ?>assets/upload/register/'.$vendor->gambar.')"></div> -->
                        <img src="<?php echo base_url('assets/upload/register/thumbs/'.$vendor->gambar) ?>" width="350" alt="">
                        <div class="text pt-4">
                            <p class="name"><?=$vendor->nama_perusahaan?></p>
                            <!-- <span class="position" style="color:black"><?=$vendor->nama_direktur?></span> -->
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Project Tersedia</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a
                        href="blog-single.html"
                        class="block-20"
                        style="background-image: url('<?php echo base_url() ?>assets/user/plataforma/images/image_1.jpg');"></a>
                    <div class="text pt-4">
                        <div class="meta mb-3">
                            <div>
                                <a href="#">July. 14, 2019</a>
                            </div>
                            <div>
                                <a href="#">Admin</a>
                            </div>
                            <div>
                                <a href="#" class="meta-chat">
                                    <span class="icon-chat"></span>
                                    3</a>
                            </div>
                        </div>
                        <h3 class="heading mt-2">
                            <a href="#">Why Lead Generation is Key for Business Growth</a>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a
                        href="blog-single.html"
                        class="block-20"
                        style="background-image: url('<?php echo base_url() ?>assets/user/plataforma/images/image_2.jpg');"></a>
                    <div class="text pt-4">
                        <div class="meta mb-3">
                            <div>
                                <a href="#">July. 14, 2019</a>
                            </div>
                            <div>
                                <a href="#">Admin</a>
                            </div>
                            <div>
                                <a href="#" class="meta-chat">
                                    <span class="icon-chat"></span>
                                    3</a>
                            </div>
                        </div>
                        <h3 class="heading mt-2">
                            <a href="#">Why Lead Generation is Key for Business Growth</a>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a
                        href="blog-single.html"
                        class="block-20"
                        style="background-image: url('<?php echo base_url() ?>assets/user/plataforma/images/image_3.jpg');"></a>
                    <div class="text pt-4">
                        <div class="meta mb-3">
                            <div>
                                <a href="#">July. 14, 2019</a>
                            </div>
                            <div>
                                <a href="#">Admin</a>
                            </div>
                            <div>
                                <a href="#" class="meta-chat">
                                    <span class="icon-chat"></span>
                                    3</a>
                            </div>
                        </div>
                        <h3 class="heading mt-2">
                            <a href="#">Why Lead Generation is Key for Business Growth</a>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
