<?php session_start();
require "baglan.php" ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>
        <?php echo $settings['title'] ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?php echo $settings['keyword'] ?>" name="keywords">
    <meta content=<?php echo $settings['description'] ?>"" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="adminPanel/assets/img/favicon/favicon.ico">
</head>

<body>
<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>
                    <?php echo $settings["address"] ?>
                </small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>
                    <?php echo $settings["phone"] ?>
                </small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>
                    <?php echo $settings["email"] ?>
                </small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                        class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>YATUR TATİL</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index" class="nav-item nav-link index">Anasayfa</a>
                <a href="about" class="nav-item nav-link about">Hakkımızda</a>
                <a href="blog" class="nav-item nav-link blog">Blog</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle tours domestic abroad day hotel airplane"
                       data-bs-toggle="dropdown">Hizmetlerimiz</a>
                    <div class="dropdown-menu m-0">
                        <a href="domestic" class="dropdown-item domestic">Yurtiçi Turlar</a>
                        <a href="abroad" class="dropdown-item abroad">Yurtdışı Turlar</a>
                        <a href="day" class="dropdown-item day">Günübirlik Turlar</a>
                        <a href="hotel" class="dropdown-item hotel">Otel Rezervasyon</a>
                        <a href="airplane" class="dropdown-item airplane">Uçak Bileti / Vize İşlemleri</a>
                        <hr>
                        <style>

                        </style>
                        <a href="tours" class="dropdown-item tours">Tüm Turlarımız</a>
                    </div>
                </div>
                <a href="contact" class="nav-item nav-link contact">İletişim</a>
            </div>
            <button class="btn btn-primary rounded-pill py-2 px-4" id="singIn">Acenta Giriş</button>
        </div>
    </nav>


    <div id="sıngInModal" class="sıngInModal"></div>

    <div class="sıngInModalItem" id="sıngInModal2">
        <h3>Giriş Yap</h3>
        <div class="sıngInModalItemPress">
            <form action="" onsubmit="return false" id="singInForm" method="post">
                <div class="form-group">
                    <input type="email" placeholder="E-Mail" name="email" class="form-control">
                    <input type="hidden" name="url" value="singIn">
                </div>

                <div class="form-group">
                    <input type="password" placeholder="Şifre" name="password" class="form-control">
                </div>
                <div id="singInAlert" class="mt-1"></div>
                <div class="form-group">
                    <button type="submit" class="btn-primary" id="singInButton">Giriş Yap</button>
                </div>
            </form>
            <div class="sıngInModalItemPressFooter">
                <span>Hesabınız yok mu? Hemen <a href="javascript:void(0)" id="singUp">Kayıt</a> olun</span>
            </div>
        </div>
    </div>

    <div class="sıngInModalItem sıngInModalItem2" id="sıngInModal3">
        <h3>Kayıt Ol</h3>
        <div class="sıngInModalItemPress">
            <form action="" onsubmit="return false" id="singUpForm" method="post">
                <div class="form-group">
                    <input type="text" placeholder="İsim Soyisim" name="firstname" class="form-control">
                    <input type="hidden" name="url" value="singUp">
                </div>

                <div class="form-group">
                    <input type="tel" placeholder="Telefon Numarası" name="tel" class="form-control">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="E-Mail" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <input type="password" placeholder="Şifre" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <input type="password" placeholder="Şifre Tekrar" name="password2" class="form-control">
                </div>

                <div id="singUpAlert" class="mt-2"></div>

                <div class="form-group">
                    <button type="submit" class="btn-primary" id="singUpButton">Kayıt Ol</button>
                </div>
            </form>

        </div>
    </div>


    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Bizimle Tatilinizin tadını çıkarın
                    </h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">İsediğiniz Turu Hemen Aratın, Tatilin
                        Keyfini
                        Çıkarın</p>
                    <div class="position-relative w-75 mx-auto animated slideInDown">
                        <form action="tourSearch" autocomplete="off" method="post">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5"
                                   type="search"
                                   placeholder="Örn: Umre"
                                   name="tour"
                                   id="searchInput"
                            >
                            <button type="submit"
                                    class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                                    style="margin-top: 7px;"
                                    id="searchButton"
                            >Ara
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->


<!--- Cookkies --->
<?php
if (isset($_SESSION["alfatTruzimSession"])) {
} else {
    ?>
    <div class="cookkies" id="cerez">
        <div class="cookTitle">
            Çerezler Sizler İçin Deneyim Tecrübemizi Arttırır
        </div>

        <div class="cookBody">
            Web sitemizin çalışması için gerekli çerezleri kullanıyoruz. Ziyaretiniz kişiselleştirip deneyiminizi
            geliştirmek ve web sitemizin performansını analiz etmek istiyoruz.
        </div>

        <div class="cookFooter">
            <div class="btn btn-primary" id="cookkiesButton">
                Kabul Et
            </div>

            <div class="btn btn-light ml-2" onclick="$('.cookkies').hide()">
                Kapat
            </div>
        </div>
    </div>
    <?php
}
?>
<!--- Cookkies --->