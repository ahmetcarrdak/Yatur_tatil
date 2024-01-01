<?php include "inc/ust.php";
$gelen_id = $_GET["blogNo"];
/** @var $conn */

$veriIslem = "SELECT * FROM blog";
$veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
$veriIslem2->execute();
$veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
foreach ($veriIslem3 as $blog) {
}
?>
    <style>
        #slider {
            font: 19px sans-serif;
            margin: 0px auto;
            position: relative;
            width: 100%;
            height: 400px;
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
            right: 0;
            bottom: 10px;
        }

        .kontrol a {
            color: #ffffff;
            background-color: rgba(55, 112, 114, 0.5);
            padding: 10px;
            margin: 5px;
            text-decoration: none;
        }

        .blogTitle {
            text-align: right;
            font-size: 23px;
            color: #0d6efd;
            border-bottom: 1px solid #ddd;
            padding: 10px;
            margin-top: 5px;
        }

        .blogDetay {
            margin-top: 20px;
            color: #b4b3b3;
            padding-left: 20px;
            padding-right: 10px;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">

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

            <div class="col-lg-6">
                <div class="blogTitle">
                    <?php echo $blog['blogAdi'] ?>
                </div>

                <div class="blogDetay">
                    <?php echo $blog['blogDetay'] ?>
                </div>
            </div>

        </div>
    </div>


<?php include "inc/alt.php" ?>