<?php require "inc/ust.php"; ?>

<style>
    * {
        transition: 0.4s;
    }

    .col-lg-6 {
        margin-top: 10px;
    }

    label {
        display: block;
    }

    input {
        border: 1px solid #ddd;
        width: 90%;
        border-radius: 10px;
        padding: 5px 10px;
        outline-color: #8165b4;
        z-index: 10000000;
        color: #7f6d81;
    }

    #acentaHesapFormAlert {
        display: none;
        background: #0d6efd;
        color: white;
        font-size: 17px;
        border-radius: 0 10px;
        width: 40%;
        padding: 10px;
        border-left: 4px solid #0d376f;
        text-align: center;
    }

    .fa-eye {
        margin-left: -45px;
        cursor: pointer;
        z-index: 100000000;
        border-left: 1px solid #ddd;
        padding: 10px;
        height: 100%;
    }
</style>

<div class="row">
    <div class="col-lg-12 col-xl-12">
        <div class="card card-plain h-100">
            <div class="card-header pb-0 p-3 bg-primary">
                <h6 class="mb-0 text-uppercase text-white">Profil Ayarları</h6>
            </div>
            <div class="card-body p-3">
                <h6 class="text-uppercase text-body text-xs font-weight-bolder">Hesap</h6>
                <form method="post"  id="acentaHesapForm" onsubmit="return false">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">İsim Soyisim:</label>
                                <input type="text" name="firstname" value="<?php echo $acenta['firstname'] ?>">
                                <input type="hidden" name="id" value="<?php echo $acenta['id']; ?>">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Telefon Numarası:</label>
                                <input type="tel" name="tel" value="<?php echo $acenta['phoneNo'] ?>">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">E-Mail:</label>
                                <input type="email" name="email" value="<?php echo $acenta['email'] ?>">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Şifre:</label>
                                <input type="password" name="password" id="pass"
                                       value="<?php echo $acenta['password'] ?>">
                                <span><i class="fa fa-eye" id="passOpen"></i></span>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Pasaport Numarası:</label>
                                <input type="text" name="passport" value="<?php echo $acenta['pasaportNo'] ?>">
                                <label for="">Sahip Değilseniz;
                                    'Pasaport Numaram Yok' Olarak Doldurunuz!</label>
                            </div>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <div id="acentaHesapFormAlert"></div>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <button type="submit" class="btn btn-primary"
                                    id="acentaHesapFormButton">Kaydet
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require "inc/alt.php"; ?>

