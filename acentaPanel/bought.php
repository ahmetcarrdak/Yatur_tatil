<?php require "inc/ust.php"; ?>

    <div class="row mt-5">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Onaylanan Başvurularım </h6>
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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tur
                                    Onay Durum
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $veriIslem = "SELECT * FROM basvuru where acentaMail='$mail' and onayDurum = 1";
                            $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                            $veriIslem2->execute();
                            $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                            $say = $veriIslem2->rowCount();
                            if ($say > 0) {
                                foreach ($veriIslem3 as $basvuru) {
                                    $id = $basvuru['turId'];

                                    $veriIslem = "SELECT * FROM turlar WHERE id=$id ORDER BY id DESC";
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

                                                <th class="text-center">
                                                    <span class="btn btn-success"
                                                          style="cursor: inherit">Onaylandı</span>
                                                </th>
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
                            }else {
                                echo "Görüntülenecek Veri Bulunamadı";
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php require "inc/alt.php"; ?>