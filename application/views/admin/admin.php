<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $title ?></title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url() ?>theme/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="<?php echo base_url() ?>theme/plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="<?php echo base_url() ?>theme/plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="<?php echo base_url() ?>theme/plugins/morrisjs/morris.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="<?php echo base_url() ?>theme/css/style.css" rel="stylesheet" />
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url() ?>theme/css/themes/all-themes.css" rel="stylesheet" />
        <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url() ?>theme/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
</head>

<body class="theme-deep-purple">
    
    <!-- header start -->
           <!-- header end -->

    <section id="main">
        
        <!-- sidebar start -->
            <?php $this->load->view('admin/sidebar'); ?>
        <!-- sidebar end -->

        <!-- content start -->
           <?php $this->load->view($contentadmin); ?>
        <!-- content end -->

    </section>


<!-- Jquery Core Js -->
    <script src="<?php echo base_url() ?>theme/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url() ?>theme/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url() ?>theme/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url() ?>theme/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url() ?>theme/plugins/node-waves/waves.js"></script>
        <!-- Autosize Plugin Js -->
    <script src="<?php echo base_url() ?>theme/plugins/autosize/autosize.js"></script>

        <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url() ?>theme/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>theme/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url() ?>theme/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>theme/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url() ?>theme/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>theme/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>theme/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>theme/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>theme/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>


    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url() ?>theme/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url() ?>theme/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>theme/plugins/morrisjs/morris.js"></script>


    <!-- ChartJs -->
    <script src="<?php echo base_url() ?>theme/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?php echo base_url() ?>theme/plugins/flot-charts/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>theme/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url() ?>theme/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>theme/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url() ?>theme/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url() ?>theme/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url() ?>theme/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

        <!-- SweetAlert Plugin Js -->
    <!-- <script src="<?php echo base_url() ?>theme/plugins/sweetalert/sweetalert.min.js"></script> -->

    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>theme/js/admin.js"></script>
 <!--   <script src="<?php echo base_url() ?>theme/js/pages/index.js"></script> -->
    <script src="<?php echo base_url() ?>theme/js/pages/tables/jquery-datatable.js"></script>
    <!--<script src="<?php echo base_url() ?>theme/js/pages/widgets/infobox/infobox-1.js"></script> -->
    <!-- <script src="<?php echo base_url() ?>theme/js/pages/ui/dialogs.js"></script> -->

    <!-- Demo Js -->
    <script src="<?php echo base_url() ?>theme/js/demo.js"></script>
</body>

</html>