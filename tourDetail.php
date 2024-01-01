<?php require "inc/ust.php"; ?>

    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <style>
                    .title {
                        padding: 10px 2px;
                        color: #9ec645;
                        font-size: 20px;
                    }

                    .info img {
                        width: 24px;
                    }

                    .price {
                        margin: 2% auto;
                        padding: 10px;
                        border: 1px solid #9ec645;
                        width: 100px;
                        text-align: center;
                        border-radius: 10px;
                    }
                </style>
                <?php
                $id = $_GET["turNo"];
                $veriIslem = "SELECT * FROM turlar where id=$id";
                /** @var TYPE_NAME $conn */
                $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                $veriIslem2->execute();
                $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                $say = $veriIslem2->rowCount();
                if ($say > 0) {
                    foreach ($veriIslem3 as $tour) {
                        ?>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-5">
                                    <img src="img/<?php echo $tour["turResmi"] ?>" alt="" style="width: 100%">
                                </div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="title">
                                                <?php echo $tour["turAdi"] ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <button class="btn btn-primary" id="modal-form-start">Sizi Arayalım</button>
                                            <style>
                                                .form-modal {
                                                    position: fixed;
                                                    width: 100%;
                                                    height: 100%;
                                                    background: rgba(30, 44, 60, 0.44);
                                                    z-index: 99999999;
                                                    top: 0;
                                                    left: 0;
                                                    display: none;
                                                }

                                                .form-modal-form {
                                                    top: 20%;
                                                    left: 20%;
                                                    margin: 0 auto;
                                                    width: 60%;
                                                    height: 500px;
                                                    position: fixed;
                                                    z-index: 999999999;
                                                    background: #dddddd;
                                                    border-radius: 20px;
                                                    display: none;
                                                }

                                                .form-item {
                                                    margin: 10% auto;
                                                    width: 80% !important;
                                                }

                                                @media (max-width: 550px) {
                                                    .form-modal-form {
                                                        width: 80%;
                                                        left: 10%;
                                                    }
                                                }

                                                @media (max-width: 410px) {
                                                    .form-modal-form {
                                                        width: 90%;
                                                        left: 5%;
                                                    }
                                                }

                                            </style>
                                            <div class="form-modal"></div>
                                            <div class="form-modal-form">
                                                <div class="form-item">
                                                    <form action="" id="tourSingleForm1" onsubmit="return false">
                                                        <div class="row">
                                                            <div class="col text-center">
                                                                <h2>Sizi Arayalım</h2>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-lg-6 mt-1">
                                                                <label for="">İsim Soyisim</label>
                                                                <input type="text" class="form-control"
                                                                       name="firstname">
                                                            </div>
                                                            <div class="col-lg-6 mt-1">
                                                                <label for="">E-Mail</label>
                                                                <input type="email" class="form-control" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-lg-6 mt-1">
                                                                <label for="">Tel No</label>
                                                                <input type="tel" class="form-control" name="tel">
                                                            </div>
                                                            <div class="col-lg-6 mt-1">
                                                                <label for="">İl / İlçe</label>
                                                                <input type="text" class="form-control" name="city">
                                                            </div>
                                                            <input type="hidden" name="tip"
                                                                   value="<?php echo $tour['turTipi'] ?>">
                                                            <input type="hidden" name="hangiTur"
                                                                   value="<?php echo $tour['turAdi'] ?>">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="col p-2 tourSingleAlert1"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col text-center">
                                                                <button
                                                                    class="btn btn-primary w-100 tourSingleFormButton"
                                                                    data-id="1"
                                                                >
                                                                    Gönder
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-6 info">
                                            <div>
                                                <img src="adminPanel/assets/img/icons/brands/asana.png" alt="">
                                                <?php echo $tour["turDay"] ?> Gün
                                            </div>

                                            <div class="mt-2">
                                                <img src="adminPanel/assets/img/icons/brands/asana.png" alt="">
                                                <?php echo $tour["person"] ?>
                                                Kişi
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="price">
                                                <?php echo $tour["turFiyati"] ?> ₺
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="detail">
                                                <?php echo $tour["turDetaylari"] ?>
                                            </div>
                                        </div>
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