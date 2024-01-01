<?php require "inc/ust.php";

if (isset($_GET["tourNo"])) {
    $id = $_GET["tourNo"];

    $veriIslem = "SELECT * FROM turlar where id=$id";
    $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $veriIslem2->execute();
    $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
    $say = $veriIslem2->rowCount();
    if ($say > 0) {
        foreach ($veriIslem3 as $tour) {
            $turAdi = $tour["turAdi"];
            $turId = $tour["id"];
            $detail = $tour["turDetaylari"];
            $resim = $tour["turResmi"];
        }
    }
} else {
    header("location:tours");
}
?>

    <div class="row mt-5">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Turlar Detayları</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <img src="../img/<?php echo $resim ?>" alt="" class="w-100">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <h3
                                style="border-bottom: 1px solid #ddd; width: 90%"
                            ><?php echo $turAdi ?></h3>
                            <div class="detail">
                                <?php echo $detail ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="buttons" style="border-top: 1px solid #ddd;">
                                <form method="post" id="<?php echo $tour['id'] ?>" onsubmit="return false">
                                    <input type="hidden" name="turAdi"
                                           value="<?php echo $tour['turAdi'] ?>">
                                    <input type="hidden" name="acentaAdi" value="<?php echo $adi ?>">
                                    <input type="hidden" name="mail" value="<?php echo $mail ?>">
                                    <input type="hidden" name="turId" value="<?php echo $tour['id'] ?>">
                                    <?php

                                    $veriIslem = "SELECT * FROM basvuru where turId='$turId' and acentaMail='$mail'";
                                    $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                                    $veriIslem2->execute();
                                    $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                                    $say = $veriIslem2->rowCount();
                                    if ($say > 0) {
                                        foreach ($veriIslem3 as $durum) {
                                            $durum = $durum["onayDurum"];
                                        }

                                        if ($durum == 0) {
                                            ?>
                                            <button type="submit" class="btn btn-primary mt-2" disabled>
                                                    Başvuruldu
                                            </button>
                                            <?php
                                        } else if ($durum == 1) {
                                            ?>
                                            <button type="submit" class="btn btn-success mt-2" disabled>
                                                Satın Alma Onaylandı
                                            </button>
                                            <?php
                                        }
                                    }else {
                                        ?>
                                        <button type="submit" class="btn btn-primary tourSale mt-2"
                                                id="button<?php echo $tour['id'] ?>"
                                                data-id="<?php echo $tour['id'] ?>">Satın AL
                                        </button>
                                        <?php
                                    }
                                    ?>
                                    <a
                                        href="<?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                        echo $url ?>"
                                        class="btn btn-light mt-2 ml-2">Geri Dön</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php require "inc/alt.php"; ?>