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
            <h5 class="card-header">Tur Kayıt Listesi</h5>
            <div class="table-responsive text-nowrap">
                <table id="example" class="mdl-data-table">
                    <thead>
                    <tr>
                        <th>Tur Tipi</th>
                        <th>Tur Adı</th>
                        <th>İsim</th>
                        <th>Şehir</th>
                        <th>Eklendiği Tarih</th>
                        <th>İletişim Seçenekleri</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $veriIslem = "SELECT * FROM turKayitlar where tip='abroad' ORDER BY id DESC";
                    $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                    $veriIslem2->execute();
                    $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                    $say = $veriIslem2->rowCount();
                    if ($say > 0) {
                        foreach ($veriIslem3 as $tour) {
                            ?>
                            <tr>
                                <th><?php
                                    $turTipi = $tour['tip'];
                                    if($turTipi == "domestic"){
                                        echo "Yurtiçi";
                                    }
                                    if($turTipi == "abroad"){
                                        echo "Yurtdışı";
                                    }
                                    if($turTipi == "day"){
                                        echo "Günübirlik";
                                    }
                                    if($turTipi == "hotel"){
                                        echo "Otel Rezervasyon";
                                    }
                                    if($turTipi == "airplane"){
                                        echo "Uçuş / Vize İşlemleri ";
                                    }
                                    ?></th>
                                <th><?php echo $tour['hangiTur'] ?></th>
                                <th><?php echo $tour['name'] ?></th>
                                <th><?php echo $tour['city'] ?></th>
                                <th><?php echo $tour['date'] ?></th>
                                <th class="text-center">
                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalCenter<?php echo $tour['id'] ?>"
                                    >Görüntüle
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
                        <th>İsim</th>
                        <th>Şehir</th>
                        <th>Eklendiği Tarih</th>
                        <th>İletişim Seçenekleri</th>
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

<?php
if ($say > 0) {
    foreach ($veriIslem3 as $tour) {
        ?>
        <div class="modal fade" id="modalCenter<?php echo $tour['id'] ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle"
                            style="color: #03a6c9;font-size: 20px;"><?php echo $tour['name'] ?></h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <div class="modalItem">
                            <a href="tel:<?php echo $tour['tel'] ?>">Ara: <?php echo $tour['tel'] ?></a>
                        </div>
                        <div class="modalItem">
                            <a href="mailto:<?php echo $tour['mail'] ?>">Mail Gönder: <?php echo $tour['mail'] ?></a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="component/basvuruSil?basvuruNo=<?php echo $tour['id'] ?>"
                           onclick="return confirm('Başvuruyu Silmek İstediğinize Emin Misiniz?')"
                           class="btn btn-danger"
                        >Başvuruyu Sil</a>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Kapat
                        </button>
                    </div>
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