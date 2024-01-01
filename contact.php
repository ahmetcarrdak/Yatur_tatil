<?php require 'inc/ust.php'; ?>


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">İletişim</h6>
                <h1 class="mb-5">İster Arayın İster Mesaj Yollayın</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>İletişim Seçenekleri</h5>
                    <p class="mb-4">İster arayın, ister mail atın, ister form doldurun. Her zaman
                        yanınızdayız.</p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                             style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Ofis</h5>
                            <p class="mb-0"><?php echo $settings["address"] ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                             style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Telefon</h5>
                            <p class="mb-0"><?php echo $settings["phone"] ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                             style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0"><?php echo $settings["email"] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form method="post" action="contactpress.php" onsubmit="return false" id="contactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" placeholder="İsim Soyisim">
                                    <label for="name">İsim Soyisim</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="E-Mail"
                                           id="email">
                                    <label for="email">E-Mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="subject" placeholder="Konu">
                                    <label for="subject">Konu</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Lütfen Mesajınızı Giriniz"
                                              name="message"
                                              style="height: 100px"></textarea>
                                    <label for="message">Lütfen Mesajınızı Giriniz</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 success overflow-hidden" type="submit"
                                        id="contactButton"
                                        style="position: relative;max-height: 60px">
                                    <div class="message-span">Mesajı Gönder</div>
                                    <div class="message-i">
                                        <i class="fa fa-check"></i>
                                    </div>
                                </button>
                                <style>

                                    .message-i {
                                        margin-top: 30px;
                                        transition: 0.5s;
                                    }

                                    .fa-check {
                                        background: none;
                                        border-radius: 100%;
                                        padding: 10px;
                                        border: 2px solid whitesmoke;
                                        color: whitesmoke;
                                        transition: 0.5s;
                                        opacity: 0;
                                    }

                                    .message-span {
                                        transition: 0.3s;
                                    }


                                    .message-i-active {
                                        margin-top: 0;
                                    }

                                    .fa-check-active {
                                        opacity: 1;
                                    }

                                    .message-active {
                                        width: 0;
                                        overflow: hidden;
                                        display: none;
                                    }
                                </style>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


<?php require 'inc/alt.php'; ?>