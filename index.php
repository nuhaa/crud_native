<?php include 'app/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CRUD Native PHP</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/css/fonts/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="public/css/mdb.min.css">
    <style>
        
    </style>
</head>

<body class="fixed-sn white-skin">

    <!--Main Navigation-->
    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p><b>CRUD Native PHP</b></p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
            	<li>{{ <b>odos</b> }}</li>
            </ul>
        </nav>
        <!-- /.Navbar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card mb-4">
                        <div class="card-header  blue-gradient">
                            <b>Data CRUD  ( <a href="?crud_native=home" class="animated fadeIn infinite" style="color:white"><span class="fa fa-refresh"></span> Refresh</a> )</b>
                            <a href="?crud_native=proses"><i style="float:right;color:white"><span class="fa fa-plus"></span> Tambah</i></a>
                        </div>
                        <div class="card-body">
                            <?php
                                if (!empty($_GET['flash'] == 'ok')) {
                                ?>
                                <div class="alert alert-primary" role="alert">
                                  <b><center>  BERHASIL </center> </b>
                                </div>
                                <?php
                                }
                            ?>                        	
                            <?php
                        		$crud_native = (!empty($_GET['crud_native'])) ? $_GET['crud_native'] : "home";
	                        	switch ($crud_native) {
						            case $crud_native: include "views/".$crud_native.".php"; break;
						            default:include'views/home.php';
						        }
                        	?>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </main>
    <!--/Main layout-->

    <!--Footer-->
    <footer class="page-footer pt-0 mt-5 rgba-stylish-light fixed-bottom">

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                 © 2018 Copyright: <a href="#!">{{ <b>sodaqohsc</b> }}</a>, Thanks to <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>
            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->
    <!-- JQuery -->
    <script src="public/js/jquery-3.2.1.min.js"></script>
</body>
</html>