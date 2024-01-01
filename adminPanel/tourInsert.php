<?php require "inc/ust.php"; ?>

    <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tur Ekle</span></h4>

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">

                        <div class="card-body">
                            <form id="tourInsertForm" method="POST" onsubmit="return false"
                                  enctype="multipart/form-data">
                                <div class="row">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <img
                                                src="assets/img/avatars/1.png"
                                                alt="user-avatar"
                                                class="d-block rounded"
                                                id="uploadedAvatar"
                                                style="max-width: 300px; max-height: 400px"
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
                                        <label class="form-label" for="inputGroupSelect01">Tur Tipi</label>
                                        <select class="form-select" id="inputGroupSelect01" name="turTipi">
                                            <option selected>Lütfen Seçiniz...</option>
                                            <option value="domestic">Yurtiçi Turlar</option>
                                            <option value="abroad">Yurtdışı Turlar</option>
                                            <option value="day">Günübirlik Turlar</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="lastName" class="form-label">Tur Adı</label>
                                        <input class="form-control" type="text" name="lastName" id="lastName"/>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="price" class="form-label">Tur Fiyatı</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            id="price"
                                            name="price"
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="organization" class="form-label">Anahtar Kelimeler</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="organization"
                                            name="keyword"
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">Gün Sayısı</label>
                                        <input
                                            type="text"
                                            id="day"
                                            name="day"
                                            class="form-control"
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="address" class="form-label">Şehir Adı</label>
                                        <input type="text" class="form-control" id="address" name="address"/>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="state" class="form-label">Kişi Sayısı</label>
                                        <input class="form-control" type="text" id="person" name="person"/>
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label for="detail" class="form-label">Tur Detayları</label>
                                        <textarea class="form-control" type="text" id="detail" name="detail"></textarea>
                                    </div>
                                </div>
                                <div class="mt-2" id="tourInsertAlert"
                                     style="font-size: 17px;color: #03a6c9"
                                ></div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2" id="tourInsertButton">Kaydet
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