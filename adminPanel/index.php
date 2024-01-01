<?php require "inc/ust.php" ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Hoşgeldin
                                    <?php /** @var TYPE_NAME $adi */
                                    echo $adi ?> 🎉
                                </h5>
                                <p class="mb-4">
                                    <?php
                                    /** @var TYPE_NAME $admin */
                                    if ($admin['gizlilik'] == 0) {
                                        echo "Profiliniz web sitemizde gösterilmektedir, bu ayarı dilerseniz 
                                        <a href='profile'>profilim</a>'den değiştirebilirsiniz";
                                    } else if ($admin["gizlilik"] == 1) {
                                        echo "Profiliniz web sitemizde gösterilmemektedir, bu ayarı dilerseniz 
                                        <a href='profile'>profilim</a>'den değiştirebilirsiniz";
                                    } else {
                                        echo "Hata";
                                    }
                                    ?>
                                </p>

                                <a href="profile" class="btn btn-sm btn-outline-primary">Profile git</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="assets/img/illustrations/man-with-laptop-light.png" height="140"
                                    alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                    <?php
                    $connect_web = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');

                    $usd_buying = $connect_web->Currency[0]->BanknoteBuying;
                    $usd_selling = $connect_web->Currency[0]->BanknoteSelling;

                    $euro_buying = $connect_web->Currency[3]->BanknoteBuying;
                    $euro_selling = $connect_web->Currency[3]->BanknoteSelling;
                    ?>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                            class="rounded" />
                                    </div>

                                </div>
                                <span>Dolar</span>
                                <h3 class="card-title text-nowrap mb-1">
                                    <?php echo $usd_buying; ?>₺
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                            class="rounded" />
                                    </div>
                                </div>
                                <span>Euro</span>
                                <h3 class="card-title text-nowrap mb-1">
                                    <?php echo $euro_buying; ?>₺
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total Revenue -->

            <!--/ Total Revenue -->
            <div class="col-lg-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="assets/img/icons/unicons/chart-success.png" alt="chart success"
                                            class="rounded" />
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                            <a class="dropdown-item" href="register">Görüntüle</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Tur Kayıtları</span>
                                <h3 class="card-title mb-2">
                                    <?php
                                    /** @var TYPE_NAME $conn */
                                    $sorgu = $conn->prepare("SELECT COUNT(*) FROM turKayitlar");
                                    $sorgu->execute();
                                    $say = $sorgu->fetchColumn();
                                    echo $say;
                                    ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="assets/img/icons/unicons/chart-success.png" alt="chart success"
                                            class="rounded" />
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                            <a class="dropdown-item" href="staff">Görüntüle</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Personel</span>
                                <h3 class="card-title mb-2">
                                    <?php
                                    /** @var TYPE_NAME $conn */
                                    $sorgu = $conn->prepare("SELECT COUNT(*) FROM admins");
                                    $sorgu->execute();
                                    $say = $sorgu->fetchColumn();
                                    echo $say;
                                    ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="assets/img/icons/unicons/chart-success.png" alt="chart success"
                                            class="rounded" />
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                            <a class="dropdown-item" href="acenta">Görüntüle</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Acentalar</span>
                                <h3 class="card-title mb-2">
                                    <?php
                                    /** @var TYPE_NAME $conn */
                                    $sorgu = $conn->prepare("SELECT COUNT(*) FROM acentalar");
                                    $sorgu->execute();
                                    $say = $sorgu->fetchColumn();
                                    echo $say;
                                    ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="assets/img/icons/unicons/chart-success.png" alt="chart success"
                                            class="rounded" />
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                            <a class="dropdown-item" href="tours">Görüntüle</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Turlar</span>
                                <h3 class="card-title mb-2">
                                    <?php
                                    /** @var TYPE_NAME $conn */
                                    $sorgu = $conn->prepare("SELECT COUNT(*) FROM turlar");
                                    $sorgu->execute();
                                    $say = $sorgu->fetchColumn();
                                    echo $say;
                                    ?>
                                </h3>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-2 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                    <img src="assets/img/icons/unicons/chart-success.png" alt="chart success"
                                            class="rounded" />
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                            <a class="dropdown-item" href="cook">Görüntüle</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Ziyaret</span>
                                <h3 class="card-title mb-2">
                                    <?php
                                    /** @var TYPE_NAME $conn */
                                    $sorgu = $conn->prepare("SELECT COUNT(*) FROM cerez");
                                    $sorgu->execute();
                                    $say = $sorgu->fetchColumn();
                                    echo $say;
                                    ?>
                                </h3>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-2 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="assets/img/icons/brands/slack.png" alt="chart success"
                                            class="rounded" />
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                            <a class="dropdown-item" href="tours">Görüntüle</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Mesajlar</span>
                                <h3 class="card-title mb-2">
                                    <?php
                                    /** @var TYPE_NAME $conn */
                                    $sorgu = $conn->prepare("SELECT COUNT(*) FROM contact");
                                    $sorgu->execute();
                                    $say = $sorgu->fetchColumn();
                                    echo $say;
                                    ?>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->


</div>
<!-- Content wrapper -->
<?php require "inc/alt.php" ?>