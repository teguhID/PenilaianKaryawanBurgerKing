<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Burger King</title>
    <!-- Bootstrap Styles-->
    <link href="<?php echo base_url('assets/')?>css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="<?php echo base_url('assets/')?>css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="<?php echo base_url('assets/')?>js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- jQuery Js -->
    <script src="<?php echo base_url('assets/')?>js/jquery-3.4.1.slim.min.js"></script>
    <!-- Validation-->
    <script src="<?php echo base_url('assets/')?>js/jquery-3.4.1.slim.min.js"> </script>
    <script src="<?php echo base_url('assets/')?>js/jquery-1.10.2.js"></script>
    <!-- Custom Styles-->
    <link href="<?php echo base_url('assets/')?>css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 

    <style>
        .error {
            color: red;
            border-color: red;
        }
    </style>
     
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="background-color:#38ada9" href="<?php echo site_url('Route/Dashboard')?>"></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <?php echo $this->session->jabatan . ' '?><i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo site_url('Login/Logout')?>"><i style="color:black" class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a id="Dashboard" class="" href="<?php echo site_url('Route/Dashboard')?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a id="Karyawan" class="" href="<?php echo site_url('Route/Karyawan')?>"><i class="fa fa-desktop"></i> Karyawan</a>
                    </li>
                    <?php if ($this->session->jabatan == 'Operational Manager' || $this->session->jabatan == 'admin') { ?>
                        <li>
                            <a id="Bobot" class="" href="<?php echo site_url('Route/Bobot')?>"><i class="fa fa-bar-chart-o"></i> Bobot</a>
                        </li>
                        <li>
                            <a id="Reward" class="" href="<?php echo site_url('Route/Reward')?>"><i class="fa fa-table"></i> Reward</a>
                        </li>
                    <?php } else{ ?>

                    <?php }?>
                    <li>
                        <a id="Normalisasi" class="" href="<?php echo site_url('Route/Normalisasi')?>"><i class="fa fa-table"></i> Normalisasi</a>
                    </li>
                    <li>
                        <a id="Hasil" class="" href="#"><i class="fa fa-table"></i> Hasil</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url('Route/HasilSemuaKaryawan')?>">Semua Karyawan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Route/KaryawanTerbaik')?>">Karyawan Terbaik</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">