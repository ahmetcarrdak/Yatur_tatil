<?php require "inc/ust.php"; ?>

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Site Yönetimi</h4>

            <div class="row">
                <div class="col-md-12">

                    <div class="card mb-4">
                        <h5 class="card-header">Site Ayarları</h5>
                        <!-- Account -->
                        <?php

                        $veriIslem = "SELECT * FROM settings";
                        $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                        $veriIslem2->execute();
                        $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                        $say = $veriIslem2->rowCount();
                        if ($say > 0) {
                            foreach ($veriIslem3 as $settings) {
                            }
                        }

                        ?>
                        <hr class="my-0"/>
                        <div class="card-body">
                            <form id="siteSettingsForm" method="POST" onsubmit="return false">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <input type="hidden" name="id" value="<?php echo $settings['title'] ?>">
                                        <label for="title" class="form-label">Site Başlığı</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            id="title"
                                            name="title"
                                            value="<?php echo $settings['title'] ?>"
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="keyword" class="form-label">Anahtar Kelimeler (Sitenin Aramalarda
                                            Öne Çıkmasını Sağlar)</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            id="keyword"
                                            name="keyword"
                                            value="<?php echo $settings['keyword'] ?>"
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="desc">Site Hakkında (Sitede Görünmez, Sitenin
                                            Aramalarda
                                            Öne Çıkmasını Sağlar) </label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">TR (+90)</span>
                                            <input
                                                type="text"
                                                id="desc"
                                                name="desc"
                                                class="form-control"
                                                value="<?php echo $settings['description'] ?>"
                                            />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">Hakkımızda (Sitede Görünen
                                            Kısım)</label>
                                        <div class="input-group input-group-merge">
                                            <textarea
                                                type="text"
                                                id="about"
                                                class="form-control"
                                                name="about"
                                            ><?php echo $settings['about'] ?>
                                            </textarea>

                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">Vizyonumuz (Sitede Görünen
                                            Kısım)</label>
                                        <div class="input-group input-group-merge">
                                            <input
                                                type="text"
                                                id="vizyon"
                                                class="form-control"
                                                name="vizyon"
                                                value="<?php echo $settings['vizyon'] ?>"
                                            />

                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">Misyon (Sitede Görünen
                                            Kısım)</label>
                                        <div class="input-group input-group-merge">
                                            <input
                                                type="text"
                                                id="misyon"
                                                class="form-control"
                                                name="misyon"
                                                value="<?php echo $settings['misyon'] ?>"
                                            />

                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">Telefon Numarası (Sitede Görünen
                                            Kısım)</label>
                                        <div class="input-group input-group-merge">
                                            <input
                                                type="text"
                                                id="phone"
                                                class="form-control"
                                                name="phone"
                                                value="<?php echo $settings['phone'] ?>"
                                            />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">E-Mail (Sitede Görünen
                                            Kısım)</label>
                                        <div class="input-group input-group-merge">
                                            <input
                                                type="text"
                                                id="email"
                                                class="form-control"
                                                name="email"
                                                value="<?php echo $settings['email'] ?>"
                                            />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="phoneNumber">Adres (Sitede Görünen Kısım)</label>
                                        <div class="input-group input-group-merge">
                                            <input
                                                type="text"
                                                id="address"
                                                class="form-control"
                                                name="address"
                                                value="<?php echo $settings['address'] ?>"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div id="settingsAlert" class="text-primary"
                                     style="font-weight: bold;font-size: 15px;"></div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2"
                                            id="siteSettingsButton">
                                        Kaydet
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- /Account -->
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>
    <!-- Content wrapper -->
<?php require "inc/alt.php"; ?>