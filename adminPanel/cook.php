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

        thead,
        tfoot {
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

        .alert {
            font-size: 14px;
            margin: auto;
            padding: 15px;
            width: 60%;
        }

        ::selection {
            background: none;
            color: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Responsive Table -->
        <div class="card">
            <h5 class="card-header">Site Ziyaret Bilgilendirmesi</h5>
            <div class="alert alert-danger">
                <strong>Uyarı!!!</strong>
                <span>
                    Burada bulunan veriler gizli bilgiler olduğundan dolayı, çıkarılması veya bir işleme sokulması yasal
                    suçtur.
                    <br> Bu bilgiler yalnızca site ziyaret akışını takip etmenizi kolaylaştırmak amacı ile
                    yapılandırılmıştır.
                    <br> Bu sebepten dolayı sitenizin bir an önce
                    <a target="_blank"
                        href="https://ads.google.com/aw/campaigns?ocid=775451487&euid=559185285&__u=1430231965&uscid=775451487&__c=3755847463&authuser=0&workspaceId=0&subid=ALL-tr-et-g-aw-c-home-awhp_xin1_signin!o2-awhp-hv-01-22">
                        GOOGLE ADS
                    </a>
                    kaydınızı yapmanız ve bu kanalı kapatması için yazılımcınız ile iletişime geçmenizi öneririz!
                </span>
            </div>
            <div class="table-responsive text-nowrap">
                <table id="example" class="mdl-data-table">
                    <thead>
                        <tr>
                            <th>İp</th>
                            <th>Locasyon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $veriIslem = "SELECT * FROM cerez ORDER BY id DESC";
                        $veriIslem2 = $conn->prepare($veriIslem, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                        $veriIslem2->execute();
                        $veriIslem3 = $veriIslem2->fetchall(PDO::FETCH_BOTH);
                        $say = $veriIslem2->rowCount();
                        if ($say > 0) {
                            foreach ($veriIslem3 as $tour) {
                                ?>
                                <tr>
                                    <th>
                                        <?php echo $tour['ip'] ?>
                                    </th>
                                    <th>
                                        <?php echo $tour['locasyon'] ?>
                                    </th>
                                </tr>
                            <?php }
                        } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>İp</th>
                            <th>Locasyon</th>
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