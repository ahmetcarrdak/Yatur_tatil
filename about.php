<?php require 'inc/ust.php' ?>


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Hakkımızda</h6>
                    <h1 class="mb-4">Hoş Geldin <span class="text-primary">Yolcu</span></h1>
                    <p class="mb-4">
                        <?php /** @var TYPE_NAME $settings */
                        echo $settings['about'] ?>
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
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- About End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp text-center" data-wow-delay="0.3s">
                    <h1 class="mb-4"><span class="text-primary">Vizyonumuz</span></h1>
                    <p class="mb-4">
                        <?php echo $settings['vizyon'] ?>
                    </p>
                </div>

                <div class="col-lg-6 wow fadeInUp text-center" data-wow-delay="0.3s">
                    <h1 class="mb-4"><span class="text-primary">Misyonumuz</span></h1>
                    <p class="mb-4">
                        <?php echo $settings['misyon'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Ekibimiz</h6>
                <h1>Bizim Ekip</h1>
            </div>
            <div class="row g-4">

                <?php
                $veriIslem = "SELECT * FROM admins where gizlilik=0 order by id desc LIMIT 3 ";
                /** @var TYPE_NAME $conn */
                $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                $veriIslem2->execute();
                $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                $say = $veriIslem2->rowCount();
                if ($say > 0) {
                    foreach ($veriIslem3 as $a) {
                        ?>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="img/<?php echo $a["foto"] ?>" alt=""
                                         style="height: 300px">
                                </div>
                                <div class="text-center p-4">
                                    <h5 class="mb-0"><?php echo $a["name"] ?></h5>
                                    <small>
                                        <?php
                                        $yetki = $a["yetki"];
                                        if ($yetki == 1) {
                                            echo "Yönetici";
                                        } elseif ($yetki == 2) {
                                            echo "Müdür";
                                        } else if ($yetki == 3) {
                                            echo "Müdür Yardımcısı";
                                        }
                                        ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>
    <!-- Team End -->

<?php require 'inc/alt.php' ?>