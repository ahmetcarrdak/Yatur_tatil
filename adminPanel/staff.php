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
            <h5 class="card-header">Personel Listesi</h5>
            <div class="table-responsive text-nowrap">
                <table id="example" class="mdl-data-table">
                    <thead>
                    <tr>
                        <th>İsim Soyisim</th>
                        <th>Tel No</th>
                        <th>E-Mail</th>
                        <th>Yetki</th>
                        <th>Hesap Gizliliği</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    /** @var TYPE_NAME $conn */
                    $veriIslem = "SELECT * FROM admins ORDER BY id DESC";
                    $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                    $veriIslem2->execute();
                    $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                    $say = $veriIslem2->rowCount();
                    if ($say > 0) {
                        foreach ($veriIslem3 as $admin) {
                            ?>
                            <tr>
                                <th><?php echo $admin["name"] ?></th>
                                <th><?php echo $admin['tel'] ?></th>
                                <th><?php echo $admin['mail'] ?></th>
                                <th><?php echo $admin['yetki'] ?></th>
                                <th><?php
                                    if ( $admin['gizlilik'] == 0){
                                        echo "Gizli Değil";
                                    }else {
                                        echo "Gizli" ;
                                    }

                                    ?></th>
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
                        <th>İsim Soyisim</th>
                        <th>Tel No</th>
                        <th>E-Mail</th>
                        <th>Yetki</th>
                        <th>Hesap Gizliliği</th>
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


<?php
if ($say > 0) {
    foreach ($veriIslem3 as $admin) {
        ?>
        <div class="modal fade" id="modalCenter<?php echo $admin['id'] ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle"
                            style="color: #03a6c9;font-size: 20px;"><?php echo $admin['name'] ?></h5>
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
                                <img
                                    src="../img/<?php echo $admin['foto'] ?>"
                                    alt=""
                                    style="width: 200px;"
                                    height="200px"
                                >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <span style="color: #2b517c;font-size: 15px">E-Mail:</span> <?php echo $admin['mail'] ?>
                            </div>
                            <div class="col-lg-6 mb-3" style="text-align: right">
                                <span style="color: #2b517c;font-size: 15px">Tel:</span> <?php echo $admin['tel'] ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <span style="color: #2b517c;font-size: 15px">Yetki:</span> <?php echo $admin['yetki'] ?>
                            </div>
                            <div class="col-lg-6 mb-3" style="text-align: right">
                                <span style="color: #2b517c;font-size: 15px">Gizlilik:</span> <?php
                                $g = $admin['gizlilik'];
                                if ($g == 1){
                                    echo "Sitede Gösterilmiyor";
                                }else if ($g == 0) {
                                    echo "Sitede Gösteriliyor";
                                }else{
                                    echo "Veritabanında hata tespit edildi lütfen yazılımcınız yada siber 
                                    güvenlikçiniz ile iletişime geçiniz";
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
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