<?php require "inc/ust.php"; ?>

<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tur Ekle</span></h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">

                    <div class="card-body">
                        <form id="blogUpload" method="POST" onsubmit="return false" action="controls/blogUpload.php"
                              enctype="multipart/form-data">
                            <div class="row">
                                <div class="card-body">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">

                                        <div class="button-wrapper">
                                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                <span class="d-none d-sm-block">Fotoğraf Yükle</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input
                                                    type="file"
                                                    id="upload"
                                                    class="account-file-input"
                                                    name="resim[]"
                                                    multiple
                                                />
                                            </label>
                                            <span>Birden Fazla Fotoğraf Seçebilirsiniz</span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-3"/>

                                <div class="mb-3 col-md-12">
                                    <label for="state" class="form-label">Blog Adı</label>
                                    <input class="form-control" type="text" id="person" name="isim"/>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="state" class="form-label">Blog Adı</label>
                                    <textarea class="form-control" name="detay"></textarea>
                                </div>


                            </div>
                            <div class="mt-2" id="blogAlert"
                                 style="font-size: 17px;color: #03a6c9"
                            ></div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2" id="blogButton">Kaydet
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

