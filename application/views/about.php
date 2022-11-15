<?php $this->load->view('header') ?>


<body id="page-top">
    <!-- Navigation-->
    <?php $this->load->view('navbar') ?>

    <style>
    .bg-utama {
        background-color: #81CA9D;
        border-color: #81CA9D;
    }

    .bg-lain {
        background-color: #FEF56C;
        border-color: #FEF56C;
    }

    @media (min-width: 360px) {

        .img-headerblog {
            position: relative;
            right: 20px;
            width: 600px;
        }

        .button-blog {
            left:170px;
            border: solid 1px #000;
            border-radius: 0.5rem;
        }

        .strofmuba-img {
            margin-right: 0px;
            margin-top: 10px;
            width: 100%;
        }

        .img-classico {
            margin-right: 20px;
            margin-top: 10px;
            width: 100%;
        }
        .img-hp{
            width: 100px;
        }
    }

    @media (min-width: 768px) {
        .img-headerblog {
            position: relative;
            right: 80px;
            width: 650px;
        }

        .button-blog {
            left: 230px;
            border: solid 1px #000;
            border-radius: 0.5rem;
        }

        .strofmuba-img {
            margin-right: 0px;
            margin-top: 10px;
            width: 100%;
        }

        .img-classico {
            margin-right: 20px;
            margin-top: 10px;
            width: 100%;
        }
        .img-hp{
            width: 150px;
        }
    }

    @media (min-width: 992px) {
        .img-headerblog {
            position: relative;
            right: 70px;
            width: 850px;
        }

        .button-blog {
            left: 310px;
            border: solid 1px #000;
            border-radius: 0.5rem;
        }

        .strofmuba-img {
            margin-right: 0px;
            margin-top: 10px;
            width: 100%;
        }

        .img-classico {
            margin-right: 20px;
            margin-top: 10px;
            width: 100%;
        }
        .img-hp{
            width: 180px;
        }
    }

    @media (min-width: 1200px) {
        .img-headerblog {
            position: relative;
            right: 80px;
            width: 1050px;
        }

        .button-blog {
            left: 370px;
            border: solid 1px #000;
            border-radius: 0.5rem;
        }
        .img-hp{
            width: 210px;
        }
        .strofmuba-img {
            margin-right: 0px;
            margin-top: 10px;
            width: 100%;
        }

        .img-classico {
            margin-right: 20px;
            margin-top: 10px;
            width: 100%;
        }
    }

</style>
    
    <!-- Masthead-->
    <header class="masthead  text-dark ">
        <div class="container  d-flex flex-column">
            <!-- Masthead Avatar Image-->
            <div class="row " style="margin-top: 100px;">

                <div class="col-sm-4">
                    <img class="img-headerblog" src="<?php echo base_url() ?>/assets/undraw_File_manager_re_ms29 1.png">
                </div>
                <div class="col-sm-8   ">

                    <h1 class=" text-end fw-bolder mb-0">Our Portofolio</h1>
                    <h2 class="text-end mb-0">We Create Your Idea With Our Digital Creativity</h2>
                    <div class="input-group text-end mb-3 mt-2 w-50 button-blog">
                        <input type="text" class="form-control text-center"
                            style="background-color: white; border: none;" placeholder="Start Project with Us">
                        <div class="input-group-append ">
                            <span class="input-group-text" style="background-color: white; border: none;"><img
                                    width="30px" src="<?php echo base_url() ?>/assets/dashicons_arrow-right-alt2.png" alt=""></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!-- Portfolio Section-->

    <!-- About Section-->
    <section class="page-section  text-dark mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center  text-dark text-shadow"
                style="font-weight:800; text-shadow: 9px 11px 4px #0000002f;">Mou Go</h2>
            <div class="row d-flex justify-content-center">
                <div class="col-12" style="text-align: center; margin-top:80px;">
                    <img class="img-hp" src="<?php echo base_url() ?>/assets/image 3.png" style="margin-right: 20px; margin-top: -110px;" alt="">
                    <img class="img-hp" src="<?php echo base_url() ?>/assets/image 1.png" style="margin-right: 20px; margin-top: 60px;" alt="">
                    <img class="img-hp" src="<?php echo base_url() ?>/assets/image 4.png" style="margin-right: 20px; margin-top: 60px;" alt="">
                </div>
            </div>
            <div class="row" style="text-align:center; margin-top:40px;">
                <h1>Mou go adalah app transportasi online dan juga sarana
                    bisnis networking / jaringan yang di desain cukup mudah
                    bagi masyarakat dalam penggunaannya.</h1>
            </div>
            <!-- Icon Divider-->

        </div>
    </section>

    <section class="page-section  text-dark mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-dark text-shadow"
                style="font-weight:800; text-shadow: 9px 11px 4px #0000002f;">A Story Of Muba</h2>
            <!-- Icon Divider-->
            <div class="row d-flex justify-content-center">
                <div class="col-12" style="text-align: center; margin-top:80px;">
                    <img src="<?php echo base_url() ?>/assets/image 5.png" class="strofmuba-img" alt="">
                </div>
            </div>
            <div class="row" style="text-align:center; margin-top:40px;">
                <h1>A Story Of Muba adalah sebuah game yang menceritakan tentang Musi Banyuasin.</h1>
            </div>
        </div>
    </section>
    <section class="page-section  text-dark mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-dark text-shadow"
                style="font-weight:800; text-shadow: 9px 11px 4px #0000002f;">Classico</h2>
            <!-- Icon Divider-->
            <div class="row d-flex justify-content-center">
                <div class="col-12" style="text-align: center; margin-top:80px;">
                    <img src="<?php echo base_url() ?>/assets/image 2.png" class="img-classico" alt="">
                </div>
            </div>
            <div class="row" style="text-align:center; margin-top:40px;">
                <h1>Classico adalah website tentang pelatihan dan pembelajaran
                    tentang coding/ bahasa pemrograman</h1>
            </div>
        </div>
    </section>
    <section class="page-section  text-dark mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-dark text-shadow"
                style="font-weight:800; text-shadow: 9px 11px 4px #0000002f;">Dinas Koperasi Dan UKM Prov. Sumsel</h2>
            <!-- Icon Divider-->
            <div class="row d-flex justify-content-center">
                <div class="col-12" style="text-align: center; margin-top:80px;">
                    <img src="<?php echo base_url() ?>/assets/image 6.png" style=" margin-top: 10px;" width="80%" alt="">
                </div>
            </div>
            <div class="row" style="text-align:center; margin-top:40px;">
                <h1>Website Resmi Dinas Koperasi Dan UKM Prov.Sumsel</h1>
            </div>
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