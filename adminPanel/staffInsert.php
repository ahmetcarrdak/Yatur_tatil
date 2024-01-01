<?php require "inc/ust.php"; ?>

    <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Personel Ekle</span></h4>

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">

                        <div class="card-body">
                            <form id="staffInsertForm" method="POST" onsubmit="return false"
                                  enctype="multipart/form-data">
                                <div class="row">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <img
                                                src="assets/img/avatars/1.png"
                                                alt="user-avatar"
                                                class="d-block rounded"
                                                id="uploadedAvatar"
                                                style="width: 200px;height: 200px"
                                            />
                                            <div class="button-wrapper">
                                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                    <span class="d-none d-sm-block">Fotoğraf Yükle</span>
                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                    <input
                                                        type="file"
                                                        id="upload"
                                                        class="account-file-input"
                                                        name="resim"
                                                        hidden
                                                    />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-3"/>


                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputGroupSelect01">Yetki</label>
                                        <select class="form-select" id="inputGroupSelect01" name="yetki">
                                            <option selected>Lütfen Seçiniz...</option>
                                            <option value="1">Yönetici</option>
                                            <option value="2">Müdür</option>
                                            <option value="3">Müdür Yardımcısı</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="lastName" class="form-label">İsim Soyisim</label>
                                        <input class="form-control" type="text" name="lastName" id="lastName"/>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="price" class="form-label">E-Mail</label>
                                        <input
                                            class="form-control"
                                            type="email"
                                            id="email"
                                            name="email"
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="organization" class="form-label">Telefon No</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="organization"
                                            name="phone"
                                        />
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="phoneNumber">Şifre</label>
                                        <input
                                            type="password"
                                            id="day"
                                            name="pass"
                                            class="form-control"
                                        />
                                    </div>

                                </div>
                                <div class="mt-2" id="staffInsertAlert"
                                     style="font-size: 17px;color: #03a6c9"
                                ></div>
                                <div class="mt-2" style="color: #03a6c9;font-size: 17px;padding: 6px">
                                    <div id="staffInsertAlert" style="display: none"></div>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2" id="staffInsertButton">Kaydet
                                    </button>
                                    <button type="reset" class="btn btn-outline-secondary">Reddet</button>
                                </div>
                            </form>
                        </div>
                        <!-- /Account -->
                    </div>
                </div>
            </div>
        </div>

    </div>


<?php require "inc/alt.php"; ?>