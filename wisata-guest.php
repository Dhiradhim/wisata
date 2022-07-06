<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Wisata</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="./plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="./plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="./plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">   
    <!-- Custom Stylesheet -->
    <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
    <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <form action="search-guest.php" method="post">
                        <input type="search" class="form-control" placeholder="Cari Wisata" name="word" aria-label="Cari Wisata">
                        <div class="drop-down animated flipInX d-md-none">
                            <input type="submit" hidden />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Menu User</li>
                    <li>
                        <a href="wisata-guest.php" aria-expanded="false">
                            <i class="icon-globe menu-icon"></i><span class="nav-text">Wisata</span>
                        </a>
                    </li>
                    <li>
                        <a href="login.php" aria-expanded="false">
                            <i class="icon-key menu-icon"></i><span class="nav-text">Login</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
	

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			 <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h2>Destination</h2></center>
								<br>								
                                <div class="bootstrap-carousel">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                        </ol>
                                        <div class="carousel-inner">
										<div class="carousel-item active">
                                                <img class="d-block w-100" src="images/big/img5.jpg" style="height:400px; object-fit: cover;">
                                            </div>
										<?php
                                            include("koneksi.php");
                                            $query = mysqli_query($con, "SELECT * FROM trip WHERE date >= CURDATE() ORDER BY id_trip desc LIMIT 5") or die(mysqli_connect_error());
                                            $row = mysqli_fetch_assoc($query);
                                            $count = 1;
                                            
                                            do { 
                                        ?>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="<?=$row['foto']?>" style="height:400px; object-fit: cover;">
                                            </div>
                                            <?php 
                                            $count++;
                                            } while ($row = mysqli_fetch_assoc($query)); 
                                        ?>
                                        </div><a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carouselExampleIndicators"
                                            data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
					   <div class="col-12 m-b-30">
							<h4 class="d-inline">Upcoming Trip</h4>
							<p class="text-muted">Get your ticket now!</p>
							<div class="row">
							<?php
								include("koneksi.php");
								$query1 = mysqli_query($con, "SELECT id_trip, foto, nama_wisata, deskripsi, DATE_FORMAT(date, '%D %M %Y') as date1 FROM trip WHERE date >= CURDATE() ORDER BY id_trip desc") or die(mysqli_connect_error());
								$row1 = mysqli_fetch_assoc($query1);
								$count = 1;
											
								do { 
							?>			
								<div class="col-md-6 col-lg-3">
									<div class="card">
										<img src="<?=$row1['foto'];?>" style="height:150px; object-fit: cover;">
										<div class="card-body">
											<h5 class="card-title"><?=$row1['nama_wisata'];?></h5>
											<p class="card-text"><?=$row1['deskripsi'];?></p>
											<p class="card-text"><small class="text-muted"><?=$row1['date1'];?></small><br><br>
                                            <a href="detail_wisata_guest.php?id_trip=<?=$row1['id_trip'];?>"><button class="btn btn-primary">Detail</button></a>
                                                                
											</p>
										</div>
									</div>
								</div>
								<!-- End Col -->
							<?php 
                                $count++;
                                } while ($row1 = mysqli_fetch_assoc($query1)); 
                            ?>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
	<?php include('footer.html'); ?>		
	</div>
	<?php include('script.html'); ?>
</body>