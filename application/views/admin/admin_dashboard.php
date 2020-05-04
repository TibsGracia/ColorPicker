<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?= link_tag('https://use.fontawesome.com/releases/v5.8.2/css/all.css'); ?>
    <!-- Bootstrap core CSS -->
    <?= link_tag('assets/css/bootstrap.min.css'); ?>
    <!-- Material Design Bootstrap -->
    <?= link_tag('assets/css/mdb.min.css'); ?>
    <!-- Your custom styles (optional) -->
    <?= link_tag('assets/css/style.css'); ?>
    <!-- DataTables.net  -->
    <?= link_tag('assets/css/addons/datatables.min.css'); ?>
    <?= link_tag('assets/css/addons/datatables-select.min.css'); ?>
    <?= link_tag('assets/css/modules/animations-extended.min.css'); ?>

</head>

<body class="fixed-sn mdb-skin">
    <!--Main Navigation-->
    <?php include APPPATH.'views/admin/includes/sidebar.php';?>

    <!-- Main layout -->
    <main>
        <div class="container-fluid">
            <!-- <div class="container-fluid mb-5"> -->
            <?php include APPPATH.'views/admin/data_table.php';?>

            <!-- </div> -->
        </div>
    </main>
    <!-- Main layout -->

    <!-- Footer -->
    <footer class="page-footer pt-0 mt-5">

        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2020 <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank">
                    ColorPicker </a>

            </div>
        </div>

    </footer>
    <!-- Footer -->

    <!-- <script src="../../js/jquery-3.4.1.min.js"></script> -->
    <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= base_url('assets/js/mdb.min.js'); ?>"></script>
    <!-- DataTables Select  -->
    <script type="text/javascript" src="<?= base_url('assets/js/addons/datatables.min.js'); ?>"></script>
    <!-- DataTables Select  -->
    <script type="text/javascript" src="<?= base_url('assets/js/addons/datatables-select.min.js'); ?>"></script>
    <!-- Custom scripts -->
    <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
    });

    
    </script>
</body>

</html>