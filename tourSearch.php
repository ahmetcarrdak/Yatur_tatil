<?php require "inc/ust.php"; ?>


<!-- Package Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Turlarımız</h6>
            <h1 class="mb-5">İstediğiniz Turu Seçin Hemen Götürelim</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
            if (isset($_POST['tour'])) {
                $url = $_POST['tour'];
            } else {
                $url = "";
            }

            $veriIslem = "SELECT * FROM turlar where turDetaylari like '%$url%' || keywords like '%$url%'";
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
            } else {
                echo "Herhangi bir tur kaydı bulunamadı";
            }
            ?>


        </div>
    </div>
</div>
<!-- Package End -->


<?php require "inc/alt.php"; ?>
