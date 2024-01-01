<?php require 'inc/ust.php' ?>

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpeg" alt=""
                             style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Hakkımızda</h6>
                    <h1 class="mb-4">Hoş Geldin <span class="text-primary">Yolcu</span></h1>
                    <p class="mb-4">
                        <?php
                        /** @var TYPE_NAME $settings */
                        $about = $settings['about'];
                        echo substr($about, 0, 321) . "...";
                        ?>
                    </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>1. Sistem Otobüsler</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Kalmaya Doyamayacığınız
                                Oteller</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Dili Tatlı Rehberler</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>İnanamayacağınız Yerler
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>100+ Gezi Turu
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Servis</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="about">Devamını Oku</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- About Start -->
    <div class="container-xxl py-5 text-center">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Kur Oranları</h6>
                    <div class="row gy-2 gx-4 mb-4">
                        <?php

                        $connect_web = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');

                        $usd_buying = $connect_web->Currency[0]->BanknoteBuying;
                        $usd_selling = $connect_web->Currency[0]->BanknoteSelling;

                        $euro_buying = $connect_web->Currency[3]->BanknoteBuying;
                        $euro_selling = $connect_web->Currency[3]->BanknoteSelling;
                        ?>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Dolar
                                (Alış): <?php echo $usd_buying; ?></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Dolar
                                (Satış): <?php echo $usd_selling; ?></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Euro
                                (Alış): <?php echo $euro_buying; ?></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Euro
                                (Satış): <?php echo $euro_selling; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <style>
        #slider {
            font: 19px sans-serif;
            margin: 0px auto;
            position: relative;
            width: 100%;
            height: 200px;
        }

        .sliderDiv {
            width: 100%;
            height: 100%;
        }

        .sliderİmg {
            width: 100%;
            height: 100%;
        }

        .kontrol {
            position: absolute;
            right: 0px;
            bottom: 10px;
        }

        .kontrol a {
            color: #ffffff;
            background-color: rgba(55, 112, 114, 0.5);
            padding: 10px;
            margin: 5px;
            text-decoration: none;
        }
    </style>


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <?php
                $veriIslem = "SELECT * FROM blog";
                $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                $veriIslem2->execute();
                $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                foreach ($veriIslem3 as $blog) {
                    ?>
                    <div class="col-lg-4 wow fadeInUp text-center" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <div class="blog">
                                <div class="blog-item" style="border-bottom: 1px solid #c2c1c1;">
                                    <div class="blog-img">

                                        <div id="slider">
                                            <?php
                                            $sec_id = $blog['sec_id'];
                                            $veriIslem = "SELECT * FROM galeri WHERE sec_id=$sec_id";
                                            $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                                            $veriIslem2->execute();
                                            $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                                            foreach ($veriIslem3 as $resim) {
                                                ?>
                                                <div class="slayt<?php echo $blog['id'] ?> sliderDiv">
                                                    <img src="img/<?php echo $resim['isim']; ?>" class="sliderİmg"/>
                                                </div>
                                            <?php } ?>

                                            <div class="kontrol">
                                                <a href="javascript:oncekiSlayt<?php echo $blog['id'] ?>()"> <i
                                                        class="fas fa-chevron-left"></i> </a>
                                                <a href="javascript:sonrakiSlayt<?php echo $blog['id'] ?>()"> <i
                                                        class="fas fa-chevron-right"></i> </a>
                                            </div>

                                            <script>
                                                "use strict";
                                                var _slayt<?php echo $blog['id'] ?> = document.getElementsByClassName("slayt<?php echo $blog['id'] ?>");
                                                var slaytSayisi<?php echo $blog['id'] ?> = _slayt<?php echo $blog['id'] ?>.length;
                                                var slaytNo<?php echo $blog['id'] ?> = 0;
                                                var i = 0;

                                                slaytGoster<?php echo $blog['id'] ?>(slaytNo<?php echo $blog['id'] ?>);

                                                function sonrakiSlayt<?php echo $blog['id'] ?>() {
                                                    slaytNo<?php echo $blog['id'] ?>++;
                                                    slaytGoster<?php echo $blog['id'] ?>(slaytNo<?php echo $blog['id'] ?>);
                                                }

                                                function oncekiSlayt<?php echo $blog['id'] ?>() {
                                                    slaytNo<?php echo $blog['id'] ?>--;
                                                    slaytGoster<?php echo $blog['id'] ?>(slaytNo<?php echo $blog['id'] ?>);
                                                }

                                                function slaytGoster<?php echo $blog['id'] ?>(slaytNumarasi) {
                                                    slaytNo<?php echo $blog['id'] ?> = slaytNumarasi;
                                                    if (slaytNumarasi >= slaytSayisi<?php echo $blog['id'] ?>) slaytNo<?php echo $blog['id'] ?> = 0;
                                                    if (slaytNumarasi < 0) slaytNo<?php echo $blog['id'] ?> = slaytSayisi<?php echo $blog['id'] ?> - 1;
                                                    for (i = 0; i < slaytSayisi<?php echo $blog['id'] ?>; i++) {
                                                        _slayt<?php echo $blog['id'] ?>[i].style.display = "none";
                                                    }
                                                    _slayt<?php echo $blog['id'] ?>[slaytNo<?php echo $blog['id'] ?>].style.display = "block";
                                                }
                                            </script>
                                        </div>

                                    </div>
                                    <div class="blog-title text-center"
                                         style="color: #9ec645;font-size: 24px;padding: 10px">
                                        <?php echo $blog["blogAdi"] ?>
                                    </div>
                                    <div class="blog-desc" style="padding: 10px">
                                        <a href="blogDetay?blogNo=<?php echo $blog['id'] ?>"
                                           class="btn btn-outline-primary"
                                           style="border-radius: 5px"
                                        >Görüntüle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!-- About End -->


<?php require 'inc/alt.php' ?>