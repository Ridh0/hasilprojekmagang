<?php $this->load->view('header') ?>


<body id="page-top">
    <!-- Navigation-->
    <?php $this->load->view('navbar') ?>

   
   <!-- Masthead-->
   <header class="masthead bg-gambar bg-primary text-dark text-center">
        <div class="  d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <div style="margin-top:200px ;" class="col-sm-8">
                <h1 class="  mb-0">Kami Hadir Disini
                    Untuk Memberikan Pelayanan Terbaik Untuk Kamu</h1>
            </div>
            <!-- Masthead Heading-->
            <!-- Icon Divider-->

            <!-- Masthead Subheading-->
            <div class="text-center mt-4 ">
                <a style=" box-shadow:10px 11px 1px #0000002f;" class="btn btn-xl btn-primary bg-utama"
                    href="https://startbootstrap.com/theme/freelancer/">
                    <h4>

                        Segera Wujudkan Ide-mu Bersama Kami!
                    </h4>
                </a>

            </div>
        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">

    </section>
    <!-- About Section-->
    <section class="page-section bg-lain text-dark mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-dark text-shadow"
                style="font-weight:800; text-shadow: 9px 11px 4px #0000002f;">Mengapa Digital Creative ?</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->

            <!-- About Section Button-->
            <div class="text-center mt-4">
                <div class="row">
                    <div class="col-sm-3">

                        <h2>

                            <div style="margin-right:20px ;"
                                class="shadow-lg mb-3 btn btn-light btn-fitur  divider-custom-icon">

                                <img src="<?php echo base_url();?>/assets/ideas.png" width="60%" alt="">

                            </div>
                            <h2>Kreatif</h2>
                        </h2>
                    </div>
                    <div class="col-sm-3">

                        <div class="shadow-lg mb-3 btn btn-light btn-fitur divider-custom-icon">
                            <img src="<?php echo base_url();?>/assets/verifieds.png" width="60%" alt="">


                        </div>
                        <h2>Bergaransi</h2>
                    </div>
                    <div class="col-sm-3">

                        <div class="shadow-lg mb-3 btn btn-light btn-fitur divider-custom-icon">
                            <img src="<?php echo base_url();?>/assets/user-groups.png" width="60%" alt="">


                        </div>
                        <h2>User Testing Experience</h2>
                    </div>
                    <div class="col-sm-3">

                        <div class="shadow-lg mb-3  btn btn-light btn-fitur divider-custom-icon">
                            <img src="<?php echo base_url();?>/assets/clock.png" width="60%" alt="">
                        </div>
                        <h2>Tepat Waktu</h2>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="page-section portfolio" id="portfolio">

    </section>
    <!-- Contact Section-->
    <section class="page-section bg-utama" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-dark mb-0">Digital Creative</h2>
            <p class="page-section-heading text-center mt-4 text-dark mb-4">“We Create Your Idea With Our Digital
                Creativity”</p>

            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7  mt-4">
                    <h3 style="text-align:center;">

                        Digital Creative adalah Perusahaan yang bergerak dibidang
                        IT Service dimana kami memberikan layanan-layanan seputar IT.
                        Seperti moto perusahaan, kami akan membantu untuk membuat
                        keinginan dan harapan klien akan terwujud dengan ide-ide kreatif
                        yang kami buat menjadi sebuah produk IT yang handal, aman dan
                        tentunya dengan harga yang sesuai.
                    </h3>
                </div>
                <div class="col-lg-8 col-xl-7  mt-4">
                </div>
                <form action="" class="form-inline justify-content-center">
                    <div class="input-group mb-3 mt-2 w-50">
                        <input type="submit" value="About Digital Creative" class="form-control text-center"
                            style="background-color: #FEF56C; border: none;" placeholder="Cari Tahu Tentang Kami">
                        <div class="input-group-append ">
                            <span class="input-group-text" style="background-color: #FEF56C; border: none;"><img
                                    width="30px" src="<?php echo base_url();?>/assets/dashicons_arrow-right-alt2.png" alt=""></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="page-section  text-dark mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-dark text-shadow"
                style="font-weight:800; text-shadow: 9px 11px 4px #0000002f;">Layanan Kami</h2>
            <!-- Icon Divider-->

        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12" style="text-align: center; margin-top:80px;">
                <img src="<?php echo base_url();?>/assets/Component 3.png" style=" margin-top: 10px;" width="100%" alt="">
            </div>
        </div>
        <div class="row" style="text-align:center; margin-top:40px;">
            <form action="" class="form-inline justify-content-center">
                <div class="input-group mb-3 mt-2 w-50">
                    <input type="submit" value="See How We Work" class="form-control text-center"
                        style="background-color: #81CA9D; border: none;" placeholder="Cari Tahu Tentang Kami">
                    <div class="input-group-append ">
                        <span class="input-group-text" style="background-color: #81CA9D; border: none;"><img
                                width="30px" src="<?php echo base_url();?>/assets/dashicons_arrow-right-alt2.png" alt=""></span>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <?php $this->load->view('footer') ?>

    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 5-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 6-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo base_url('assets/template/'); ?>js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>