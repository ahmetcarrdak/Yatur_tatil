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
            <h5 class="card-header">Acentalar Listesi</h5>
            <div class="table-responsive text-nowrap">
                <table id="example" class="mdl-data-table">
                    <thead>
                    <tr>
                        <th>Acenta Adı</th>
                        <th>Tur Adı</th>
                        <th>Eklendiği Tarih</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    /** @var TYPE_NAME $conn */
                    $veriIslem = "SELECT * FROM basvuru where onayDurum=1 ORDER BY id DESC";
                    $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                    $veriIslem2->execute();
                    $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                    $say = $veriIslem2->rowCount();
                    if ($say > 0) {
                        foreach ($veriIslem3 as $acenta) {
                            ?>
                            <tr>
                                <th><?php echo $acenta["acentaAdi"] ?></th>
                                <th><?php echo $acenta['turAdi'] ?></th>
                                <th><?php echo $acenta['date'] ?></th>
                                <th class="text-center">
                                    <button
                                        type="button"
                                        class="btn btn-success"
                                        disabled
                                    >Onaylanmış
                                    </button>
                                </th>
                            </tr>
                        <?php }
                    } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Acenta Adı</th>
                        <th>Tur Adı</th>
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