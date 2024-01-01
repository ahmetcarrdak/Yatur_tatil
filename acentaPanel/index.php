<?php require "inc/ust.php"; ?>


    <div class="row">

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">weekend</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Satın Alınan</p>
                        <h4 class="mb-0">
                            <?php
                            /** @var TYPE_NAME $conn */
                            $sorgu = $conn->prepare("SELECT COUNT(*) FROM basvuru WHERE acentaMail = '$mail' and onayDurum = '1'");
                            $sorgu->execute();
                            $say = $sorgu->fetchColumn();
                            echo $say;
                            ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">weekend</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Bekleyen Başvuru</p>
                        <h4 class="mb-0">
                            <?php
                            $sorgu = $conn->prepare("SELECT COUNT(*) FROM basvuru WHERE acentaMail = '$mail' and onayDurum = '0'");
                            $sorgu->execute();
                            $say = $sorgu->fetchColumn();
                            echo $say;
                            ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">weekend</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Toplam Turlar</p>
                        <h4 class="mb-0">
                            <?php
                            $sorgu = $conn->prepare("SELECT COUNT(*) FROM turlar");
                            $sorgu->execute();
                            $say = $sorgu->fetchColumn();
                            echo $say;
                            ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Turlar </h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">

                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tur</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tur
                                    Adı
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                    Eklenme Tarihi
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $veriIslem = "SELECT * FROM turlar ORDER BY id DESC LIMIT 7";
                            $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                            $veriIslem2->execute();
                            $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                            $say = $veriIslem2->rowCount();
                            if ($say > 0) {
                                foreach ($veriIslem3 as $tour) {
                                    ?>
                                    <tr>
                                        <th><?php
                                            $turTipi = $tour['turTipi'];
                                            if ($turTipi == "domestic") {
                                                echo "Yurtiçi";
                                            }
                                            if ($turTipi == "abroad") {
                                                echo "Yurtdışı";
                                            }
                                            if ($turTipi == "day") {
                                                echo "Günübirlik";
                                            }
                                            if ($turTipi == "hotel") {
                                                echo "Otel Rezervasyon";
                                            }
                                            if ($turTipi == "airplane") {
                                                echo "Uçuş / Vize İşlemleri ";
                                            }
                                            ?></th>
                                        <th><?php echo $tour['turAdi'] ?></th>

                                        <th><?php echo $tour['tarih'] ?></th>
                                        <th class="text-center">
                                            <a class="btn btn-primary tourDetail"
                                               href="tourDetail?tourNo=<?php echo $tour['id'] ?>"
                                               data-id="<?php echo $tour['id'] ?>">İncele
                                            </a>
                                        </th>
                                    </tr>
                                <?php }
                            }else {
                                echo "Görüntülenecek Veri Bulunamadı";
                            } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php require "inc/alt.php"; ?>