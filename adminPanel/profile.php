<?php require "inc/ust.php"; ?>

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Hesap Yönetimi</h4>

            <div class="row">
                <div class="col-md-12">

                    <div class="card mb-4">
                        <h5 class="card-header">Profil Detayları</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <form action="controls/photoControl.php" method="post" enctype="multipart/form-data"
                                  id="formAccountDeactivation">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img hidden
                                         src="../img/<?php echo $admin['foto']; ?>"
                                         alt="user-avatar"
                                         class="d-block rounded"
                                         height="100"
                                         width="100"
                                         id="uploadedAvatar"
                                    />
                                    <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0" hidden>
                                            <span class="d-none d-sm-block">Fotoğraf Seç</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input
                                                type="file"
                                                id="upload"
                                                class="account-file-input"
                                                name="resim"
                                            />
                                        </label>
                                        <input type="file" name="resim">
                                        <input type="hidden" value="<?php echo $admin['id']; ?>" name="id">
                                        <button type="submit"
                                                class="btn btn-outline-secondary account-image-reset mb-4">
                                            <i class="bx bx-reset d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Fotoğrafı Kaydet</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr class="my-0"/>
                        <div class="card-body">
                            <form id="formAccountSettings" method="POST" action="controls/profileControls.php"
                                  onsubmit="return true">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <input type="hidden" name="id" value="<?php echo $admin['id'] ?>">
                                        <label for="firstName" class="form-label">İsim Soyisim</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            id="firstName"
                                            name="firstName"
                                            value="<?php echo $admin['name'] ?>"
                                            autofocus
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            id="email"
                                            name="email"
                                            value="<?php echo $admin['mail'] ?>"
                                            placeholder="john.doe@example.com"
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">Telefon Numarası</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">TR (+90)</span>
                                            <input
                                                type="text"
                                                id="phoneNumber"
                                                name="phoneNumber"
                                                class="form-control"
                                                value="<?php echo $admin['tel'] ?>"
                                            />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6 form-password-toggle">
                                        <label class="form-label" for="phoneNumber">Şifre</label>
                                        <div class="input-group input-group-merge">
                                            <input
                                                type="password"
                                                id="password"
                                                class="form-control"
                                                name="password"
                                                aria-describedby="password"
                                                value="<?php echo $admin['sifre'] ?>"
                                            />
                                            <span class="input-group-text cursor-pointer"><i
                                                    class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2" onclick="return sorgu()">Kaydet
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- /Account -->
                    </div>
                    <div class="card">
                        <h5 class="card-header">Profilimi Gizle</h5>
                        <div class="card-body">
                            <div class="mb-3 col-12 mb-0">
                                <div class="alert alert-warning">
                                    <h6 class="alert-heading fw-bold mb-1">Profilinizin Sitede Görünmesini İstemiyor
                                        Musnuz?</h6>
                                    <p class="mb-0">Dillerseniz Hesabınızı Buradan Gizleyebilirsiniz, Bu Ayarları Daha
                                        Sonra
                                        Değiştirebilirsiniz</p>
                                </div>
                            </div>
                            <form id="" action="controls/profilHide.php" onsubmit="return true"
                                  method="post">
                                <div class="form-check mb-3">
                                    <?php
                                    $checked = "";
                                    $sonuc = "";
                                    $gizlilik = $admin["gizlilik"];
                                    if ($gizlilik == 1) {
                                        $checked = "checked";
                                        $sonuc = "Hesap Gizliliği: <span style='font-weight: bold'>Gizli</span>";
                                    } else {
                                        $checked = "";
                                        $sonuc = "Hesap Gizliliği: <span style='font-weight: bold'>Gizli Değil</span>";
                                    }

                                    ?>
                                    <input type="hidden" value="<?php echo $admin['id']; ?>" name="id">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="accountActivation"
                                        id="accountActivation"
                                        <?php echo $checked; ?>
                                    />
                                    <label class="form-check-label" for="accountActivation"
                                    ><?php echo $sonuc; ?> </label
                                    >
                                </div>
                                <button type="submit" class="btn btn-danger deactivate-account" onclick="return sorgu">
                                    Kaydet
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>
    <!-- Content wrapper -->
    <script>
        function sorgu() {
            let text = "Değişiklik Yapmak İstediğinize Emin Misiniz?";
            if (confirm(text) === true) {
                return true;
            } else {
                return false
            }
        }
    </script>
<?php require "inc/alt.php"; ?>