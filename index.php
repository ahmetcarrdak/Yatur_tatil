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


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Servis</h6>
                <h1 class="mb-5">Hizmet Kalitemiz</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>Yurtiçi / Yurt Dışı </h5>
                            <p>Hem yurt içi hem yurt dışı turlarımız ile her daim hizmetnizdeyiz</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Otel Rezarvasyon</h5>
                            <p>Yanlızca tur ve gezi organisasyonları değil, otel rezervasyon hizmeti de sağlıyoruz</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Seyahat Rehberleri</h5>
                            <p>Her daim sizlerin tur rehberlerimiz ile gezileriniz
                                daha keyifli hale gelecek</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Vize İşlemleri</h5>
                            <p>Artık uçmak için zaman, sıra kolaamayacaksınız. Hemen başvurun
                                istediğiniz yere uçuralım</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
                <h1 class="mb-5">Popular Destination</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="abroad">
                                <img class="img-fluid" src="img/destination-1.jpg" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    30%
                                    İndirim
                                </div>
                                <div
                                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Yurtdışı geziler
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="domestic">
                                <img class="img-fluid" src="img/destination-2.jpg" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    25%
                                    İndirim
                                </div>
                                <div
                                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Yurtiçi Geziler
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="day">
                                <img class="img-fluid" src="img/destination-3.jpg" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    10%
                                    İndirim
                                </div>
                                <div
                                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Günübirlik Geziler
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="airplane">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/destination-4.jpg" alt=""
                             style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20%
                            İndirim
                        </div>
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                            Uçak/Vize İşlemleri
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Tüm Turlarımız</h6>
                <h1 class="mb-5">İstediğiniz Turu Seçin Hemen Götürelim</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php
                $veriIslem = "SELECT * FROM turlar order by id desc LIMIT 3";
                /** @var TYPE_NAME $conn */
                $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                $veriIslem2->execute();
                $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                $say = $veriIslem2->rowCount();
                if ($say > 0) {
                    foreach ($veriIslem3 as $tour) {
                        ?>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="package-item" style="position: relative">
                                <div class="tourForm" id="<?php echo $tour['id'] ?>">
                                    <h2>Sizi Arayalım</h2>
                                    <form action="" id="tourSingleForm<?php echo $tour['id'] ?>" method="post"
                                          onsubmit="return false">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="İsim Soyisim"
                                                       name="firstname">
                                                <input type="hidden" name="tip" value="<?php echo $tour['turTipi'] ?>">
                                                <input type="hidden" name="hangiTur"
                                                       value="<?php echo $tour['turAdi'] ?>">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="il / İlçe"
                                                       name="city">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="tel" class="form-control" placeholder="Tel No" name="tel">
                                            </div>
                                            <div class="col">
                                                <input type="email" class="form-control" placeholder="E-Mail"
                                                       name="email">
                                            </div>
                                        </div>
                                        <div class="row mt-1 ml-3">
                                            <div class="col p-2 tourSingleAlert<?php echo $tour['id'] ?>"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3 tourSingleFormButton" data-id="<?php echo $tour['id'] ?>">
                                                <button type="submit" class="btn btn-primary">Gönder</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-danger tourFormAtt"
                                                        data-tip="<?php echo $tour['id'] ?>"
                                                >Kapat
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="img/<?php echo $tour["turResmi"]; ?>" alt=""
                                         style="height: 270px">
                                </div>
                                <div class="d-flex border-bottom">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $tour["turCity"]; ?>
                                    </small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-calendar-alt text-primary me-2"></i><?php echo $tour["turDay"]; ?>
                                        Gün</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-user text-primary me-2"></i><?php echo $tour["person"]; ?>
                                        Kişi</small>
                                </div>
                                <div class="text-center p-4">
                                    <h3 class="mb-0">₺<?php echo $tour["turFiyati"]; ?></h3>
                                    <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                    <p><?php
                                        $turAdi = $tour['turAdi'];
                                        echo $turAdi;

                                        ?></p>
                                    <div class="d-flex justify-content-center mb-2">
                                        <a href="tourDetail?turNo=<?php echo $tour['id'] ?>"
                                           class="btn btn-sm btn-primary px-3 border-end"
                                           style="border-radius: 30px 0 0 30px;">Detaylar</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-primary px-3 tourFormAtt"
                                           data-tip="<?php echo $tour['id'] ?>"
                                           style="border-radius: 0 30px 30px 0;">Sizi Arayalım</a>
                                    </div>
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
    <!-- Package End -->


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
                                    <small><?php
                                        $yetki = $a["yetki"];
                                        if ($yetki == 1) {
                                            echo "Yönetici";
                                        } elseif ($yetki == 2) {
                                            echo "Müdür";
                                        } else if ($yetki == 3) {
                                            echo "Müdür Yardımcısı";
                                        }
                                        ?></small>
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


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Bilgelerden</h6>
                <h1 class="mb-5">Özlü Sözler!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item bg-white text-center border p-4" style="height: 250px">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-3.jpg"
                         style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Emile Zola</h5>
                    <p class="mb-0">Hiç birşey zekayı seyahat etmek kadar geliştiremez</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4" style="height: 250px">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-3.jpg"
                         style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Mark Twain</h5>
                    <p class="mt-2 mb-0">Öğrenmek istiyorsan seyahat etmelisin</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4" style="height: 250px">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-3.jpg"
                         style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Albert Camus</h5>
                    <p class="mt-2 mb-0">Yolculuk bizi kendimize getirir</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4" style="height: 250px">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-3.jpg"
                         style="width: 80px; height: 80px;">
                    <h5 class="mb-0">S. Johnson</h5>
                    <p class="mt-2 mb-0">Seyehat etmek, hayal gücümüzü gerçeklerle dengeler ve bazı şeylerin nasıl
                        olduğunu
                        düşünmek yerine onları görmemizi sağlar</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

<?php require 'inc/alt.php' ?>