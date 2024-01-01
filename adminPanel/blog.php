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

        #slider {
            font: 19px sans-serif;
            margin: 0px auto;
            position: relative;
            width: 100%;
            height: 300px;
            overflow:;
        }

        .sliderDiv {
            width: 100%;
            height: 100%;
        }

        .sliderİmg {
            width: 100%;
            height: 100%;
        }

        .kontrol {
            position: absolute;
            right: 0px;
            bottom: 10px;
        }

        .kontrol a {
            color: #ffffff;
            background-color: rgba(55, 112, 114, 0.5);
            padding: 10px;
            margin: 5px;
            text-decoration: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Table -->
        <div class="card">
            <h5 class="card-header">Personel Listesi</h5>
            <div class="table-responsive text-nowrap">
                <table id="example" class="mdl-data-table">
                    <thead>
                    <tr>
                        <th>Blog Adı</th>
                        <th>Blog Detayları</th>
                        <th>Görüntüle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    /** @var TYPE_NAME $conn */
                    $veriIslem = "SELECT * FROM blog ORDER BY id DESC";
                    $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                    $veriIslem2->execute();
                    $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                    $say = $veriIslem2->rowCount();
                    if ($say > 0) {
                        foreach ($veriIslem3 as $admin) {
                            ?>
                            <tr>
                                <th><?php echo $admin["blogAdi"] ?></th>
                                <th><?php echo $admin['blogDetay'] ?></th>
                                <th class="text-center">
                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalCenter<?php echo $admin['id'] ?>"
                                    >Görüntüle
                                    </button>
                                </th>
                            </tr>
                        <?php }
                    } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Blog Adı</th>
                        <th>Blog Detayları</th>
                        <th>Görüntüle</th>
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
    foreach ($veriIslem3 as $admin) {
        ?>
        <div class="modal fade" id="modalCenter<?php echo $admin['id'] ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle"
                            style="color: #03a6c9;font-size: 20px;"><?php echo $admin['blogAdi'] ?></h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">

                                <div id="slider">
                                    <?php
                                    $sec_id = $admin["sec_id"];
                                    $veriIslem = "SELECT * FROM galeri WHERE sec_id=$sec_id";
                                    $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                                    $veriIslem2->execute();
                                    $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                                    foreach ($veriIslem3 as $resim) {
                                        ?>
                                        <div class="slayt<?php echo $admin['id'] ?> sliderDiv">
                                            <img src="../img/<?php echo $resim['isim']; ?>" class="sliderİmg"/>
                                        </div>
                                    <?php } ?>

                                    <div class="kontrol">
                                        <a href="javascript:oncekiSlayt<?php echo $admin['id'] ?>()"> <i
                                                class="bx bx-arrow-from-right"></i> </a>
                                        <a href="javascript:sonrakiSlayt<?php echo $admin['id'] ?>()"> <i
                                                class="bx bx-arrow-from-left"></i> </a>
                                    </div>

                                    <script>
                                        "use strict";
                                        var _slayt<?php echo $admin['id'] ?> = document.getElementsByClassName("slayt<?php echo $admin['id'] ?>");
                                        var slaytSayisi<?php echo $admin['id'] ?> = _slayt<?php echo $admin['id'] ?>.length;
                                        var slaytNo<?php echo $admin['id'] ?> = 0;
                                        var i = 0;

                                        slaytGoster<?php echo $admin['id'] ?>(slaytNo<?php echo $admin['id'] ?>);

                                        function sonrakiSlayt<?php echo $admin['id'] ?>() {
                                            slaytNo<?php echo $admin['id'] ?>++;
                                            slaytGoster<?php echo $admin['id'] ?>(slaytNo<?php echo $admin['id'] ?>);
                                        }

                                        function oncekiSlayt<?php echo $admin['id'] ?>() {
                                            slaytNo<?php echo $admin['id'] ?>--;
                                            slaytGoster<?php echo $admin['id'] ?>(slaytNo<?php echo $admin['id'] ?>);
                                        }

                                        function slaytGoster<?php echo $admin['id'] ?>(slaytNumarasi) {
                                            slaytNo<?php echo $admin['id'] ?> = slaytNumarasi;
                                            if (slaytNumarasi >= slaytSayisi<?php echo $admin['id'] ?>) slaytNo<?php echo $admin['id'] ?> = 0;
                                            if (slaytNumarasi < 0) slaytNo<?php echo $admin['id'] ?> = slaytSayisi<?php echo $admin['id'] ?> - 1;
                                            for (i = 0; i < slaytSayisi<?php echo $admin['id'] ?>; i++) {
                                                _slayt<?php echo $admin['id'] ?>[i].style.display = "none";
                                            }
                                            _slayt<?php echo $admin['id'] ?>[slaytNo<?php echo $admin['id'] ?>].style.display = "block";
                                        }
                                    </script>
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <?php echo $admin['blogDetay'] ?>
                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <a href="component/blogSil?blogId=<?php echo $admin['id'] ?>&imgId=<?php echo $admin['sec_id'] ?>"
                           onclick="return confirm('Silme İstiyor Musunuz?')"
                           class="btn btn-danger">Bloğu
                            Sil</a>
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


</script>