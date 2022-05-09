<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?php echo project_name;?>::<?php echo $title;?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/favicon.ico"/>
    <link href="<?php echo base_url();?>assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url();?>assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
        
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>plugins/table/datatable/custom_dt_html5.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>plugins/table/datatable/dt-global_style.css">
    <link href="<?php echo base_url();?>assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url();?>plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="<?php echo base_url();?>plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL CUSTOM STYLES -->
    <script src="<?php echo base_url();?>assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
        .forn-control-danger {
            border-color: #ffcfcf !important;
            color: #FF3636;
            background-color: rgba(222, 222, 222, 0.1);
        }
    </style>
</head>
<body class="sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>
