<?php require "inc/ust.php"; ?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <style>
        .table-responsive {
            padding: 20px;
            width: 100%;
        }

        table {
            padding: 10px;
            margin-top: 10px;
        }

        thead, tfoot {
            background: #03a6c9;
        }

        #example {
            width: 100%;
        }

        .dataTables_wrapper {
            width: 100%;
            padding: 20px;
            border: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Table -->
        <div class="card">
            <h5 class="card-header">Tur Listesi</h5>
            <div class="table-responsive text-nowrap">
                <table id="example" class="mdl-data-table">
                    <thead>
                    <tr>
                        <th>Tur Tipi</th>
                        <th>Tur Adı</th>
                        <th>Tur Fiyatı</th>
                        <th>Eklendiği Tarih</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $veriIslem = "SELECT * FROM turlar ORDER BY id DESC";
                    $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                    $veriIslem2->execute();
                    $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                    $say = $veriIslem2->rowCount();
                    if ($say > 0) {
                        foreach ($veriIslem3 as $tour) {
                            ?>
                            <tr>
                                <th><?php
                                    $turTipi = $tour['turTipi'];
                                    if ($turTipi == "domestic") {
                                        echo "Yurtiçi";
                                    }
                                    if ($turTipi == "abroad") {
                                        echo "Yurtdışı";
                                    }
                                    if ($turTipi == "day") {
                                        echo "Günübirlik";
                                    }
                                    if ($turTipi == "hotel") {
                                        echo "Otel Rezervasyon";
                                    }
                                    if ($turTipi == "airplane") {
                                        echo "Uçuş / Vize İşlemleri ";
                                    }
                                    ?></th>
                                <th><?php echo $tour['turAdi'] ?></th>
                                <th><?php echo $tour['turFiyati'] ?></th>
                                <th><?php echo $tour['tarih'] ?></th>
                                <th class="text-center">
                                    <button type="button" class="btn btn-primary tourDetail"
                                            data-tip="<?php echo $tour['id'] ?>">Düzenle
                                    </button>
                                </th>
                            </tr>
                        <?php }
                    } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Tur Tipi</th>
                        <th>Tur Adı</th>
                        <th>Tur Fiyatı</th>
                        <th>Eklendiği Tarih</th>
                        <th></th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!--/ Responsive Table -->
    </div>
    <!-- / Content -->
</div>
<!-- Content wrapper -->

<style>
    .tourModal {
        display: none;
        position: fixed;
        background: rgba(79, 78, 78, 0.82);
        width: 100%;
        height: 100%;
        z-index: 999999;
        padding: 0;
        top: 0;
        bottom: 0;
        left: 0;
    }

    .tourModalActive {
        display: block;
    }

    .tourModalThis {
        width: 100%;
        max-width: 700px;
        text-align: center;
        margin: 7% auto;
        background: white;
        padding: 30px;
        border-radius: 30px;
    }

    .tourModalTitle {
        color: #03a6c9;
        z-index: 9999999;
        border-bottom: 1px solid #ddd;
    }

    .tourModalTitle h2 {
        color: #03a6c9;
        z-index: 9999999;
    }

    .tourToggle {
        text-align: right;
        font-size: 25px;
        color: darkred;
        cursor: pointer;
    }

    .tourModalBody {
        margin-top: 30px;
    }

    .tourModalBody .row, .col-lg-6 {
        margin-top: 10px;
    }

    .tourCompAl {
        margin-bottom: 10px;
        margin-top: -5px;
    }
</style>
<?php
$veriIslem = "SELECT * FROM turlar";
$veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
$veriIslem2->execute();
$veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
$say = $veriIslem2->rowCount();
if ($say > 0) {
    foreach ($veriIslem3 as $tourDet) {
        ?>
        <div class="tourModal" id="<?php echo $tourDet['id'] ?>">
            <div class="tourModalThis">
                <div class="tourToggle" data-tip="<?php echo $tourDet['id'] ?>">x</div>
                <div class="tourModalTitle">
                    <h2>Tur Detayları Düzenle</h2>
                </div>
                <div class="tourModalBody">
                    <form id="tourDetailForm<?php echo $tourDet['id'] ?>" onsubmit="return false" method="post">
                        <div class="row text-center">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Tur Adı</label>
                                    <input type="text" class="form-control" name="adi"
                                           value="<?php echo $tourDet['turAdi']; ?>">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Tur Fiyatı</label>
                                    <input type="text" class="form-control" name="fiyat"
                                           value="<?php echo $tourDet['turFiyati']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Anahtar Kelimeler</label>
                                    <input type="text" class="form-control" name="keyword"
                                           value="<?php echo $tourDet['keywords']; ?>">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Kişi Sayısı</label>
                                    <input type="text" class="form-control" name="kisi"
                                           value="<?php echo $tourDet['person']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row text-center">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Gün Sayısı</label>
                                    <input type="text" class="form-control" name="gun"
                                           value="<?php echo $tourDet['turDay']; ?>">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Şehir Adı</label>
                                    <input type="text" class="form-control" name="sehir"
                                           value="<?php echo $tourDet['turCity']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row text-center mt-3">
                            <div class="col-lg-12">
                                <label for="">Tur Detayları</label>
                                <textarea type="text" class="form-control"
                                          name="detay"><?php echo $tourDet['turDetaylari']; ?></textarea>
                                <input type="hidden" name="id" value="<?php echo $tourDet['id'] ?>">
                            </div>
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-lg-12">
                                <div class="tourCompAl"></div>
                                <div class="form-group">
                                    <button
                                        type="submit"
                                        class="btn btn-primary tourDetF"
                                        id="tourDetailButton"
                                        data-id="tourDetailForm<?php echo $tourDet['id'] ?>"
                                    >
                                        Düzenle
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
}
?>


<?php require "inc/alt.php"; ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.13.4/i18n/tr.json"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.material.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            autoWidth: false,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Turkish.json"
            },
            columnDefs: [
                {
                    targets: ['_all'],
                    className: 'mdc-data-table__cell',
                },

            ],
        });
    });

    $(function () {
        $("button.tourDetail").click(function () {
            var tip = $(this).data("tip");
            //alert(tip)
            $("#" + tip).addClass("tourModalActive");
        });

        $("div.tourToggle").click(function () {
            var tip = $(this).data("tip");
            //alert(tip)
            $("#" + tip).removeClass("tourModalActive");
        });

    });
</script>