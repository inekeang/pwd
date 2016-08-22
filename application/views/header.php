<!DOCTYPE HTML>
<html>
<head>
<title>PRAKTIKUM WEB DESAIN :: ineke-rania-ade</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/style.css') ?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet"> 
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"> </script>
<!-- Mainly scripts -->
<script src="<?php echo base_url('assets/js/jquery.metisMenu.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js') ?>"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
<script src="<?php echo base_url('assets/js/screenfull.js') ?>"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!--skycons-icons-->
<script src="assets/js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>
<div id="wrapper">


        <nav class="navbar-default navbar-static-top" role="navigation">
            <div class="navbar-default sidebar" role="navigation">
                <div class="navbar-header">
                    <h1><a class="navbar-brand" href="<?php echo base_url() ?>">Narotama</a></h1>         
                </div>
                <div class="clearfix"> </div>
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo base_url() ?>" class=" hvr-bounce-to-right"><i class="fa fa-home nav_icon "></i><span class="nav-label">HOME</span> </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Mahasiswa/create') ?>" class=" hvr-bounce-to-right"><i class="fa fa-child nav_icon "></i><span class="nav-label">TAMBAH MAHASISWA</span> </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Mahasiswa') ?>" class=" hvr-bounce-to-right"><i class="fa fa-users nav_icon "></i><span class="nav-label">LIST MAHASISWA</span> </a>
                    </li>
                    <li>
                    	<a href="<?php echo base_url('index.php/Welcome/author') ?>" class=" hvr-bounce-to-right"><i class="fa fa-smile-o nav_icon "></i><span class="nav-label">PROFIL KELOMPOK</span> </a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="content-main">
