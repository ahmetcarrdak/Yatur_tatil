<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Menü</h4>
                <a class="btn btn-link" href="index">Anasayfa</a>
                <a class="btn btn-link" href="about">Hakkımızda</a>
                <a class="btn btn-link" href="blog">Blog</a>
                <a class="btn btn-link" href="tours">Turlar</a>
                <a class="btn btn-link" href="contact">İletişim</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">İletişim</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
                    <?php echo $settings['address'] ?>
                </p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>
                    <?php echo $settings['phone'] ?>
                </p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>
                    <?php echo $settings['email'] ?>
                </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Galeri</h4>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    Copyright
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; <a class="border-bottom" href="#">YATUR TATİL</a>

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Çerezler</a>
                        <a href="">KVKK</a>
                        <a href="">Hizmet Koşulları</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col text-center">
                    Yazılım: <a class="border-bottom" href="https://wa.me/+905356405103" target="_blank">ÇARDAK SOFT</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<style>
    .wp_link2 {
        position: fixed;
        width: 100px;
        height: 75px;
        top: 40%;
        left: -10%;
        transition: 0.3s;
        padding: 10px;
        z-index: 99999999;
    }

    .wp_link2 img {
        width: 60px;
        height: 60px;
    }
</style>

<div class="wp_link2">
    <img src="img/index.png" alt="">
</div>

<!-- Button Group -->
<div class="buttonGroup">
    <div class="bars">
        <div class="bar"></div>
        <div class="bar bars2"></div>
    </div>

    <div class="wpButton">
        <a target="_blank"
           href="https://wa.me/+905376737657?text=Merhabalar,%20turlarla%20ilgili%20bilgi%20almak%20istiyorum.">
            <img src="img/index.png" alt="">
        </a>
    </div>

    <div class="up" id="yukari">
        <i class="fas fa-chevron-up"></i>
    </div>
</div>
<!-- Button Group -->


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/ajax.js"></script>
<script>
    $(window).scroll(function () {
        var scrollAmount = $(window).scrollTop(); // Mevcut dikey kaydırma miktarını al

        // Aşağı kaydırma durumunda
        if (scrollAmount > 0) {
            $('.wp_link2').css('left', '10px'); // Sola 10px uzaklık ver
        }
        // Yukarı kaydırma durumunda
        else {
            $('.wp_link2').css('left', '-10%'); // Sola -10% uzaklık ver
        }
    });


</script>
</body>

</html>