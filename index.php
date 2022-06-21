<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
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
	<?php include('header.html'); ?>
	<?php include('sidebar.html'); ?>
	

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
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="images/big/card-1.png" style="height:400px; object-fit: cover;">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="images/big/card-2.png" style="height:400px; object-fit: cover;">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="images/big/card-3.png" style="height:400px; object-fit: cover;">
                                            </div>
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
								<div class="col-md-6 col-lg-3">
									<div class="card">
										<img class="img-fluid" src="images/big/img1.jpg" alt="">
										<div class="card-body">
											<h5 class="card-title">Card title</h5>
											<p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little bit longer.</p>
											<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
											</p>
										</div>
									</div>
								</div>
								<!-- End Col -->
								<div class="col-md-6 col-lg-3">
									<div class="card">
										<img class="img-fluid" src="images/big/img2.jpg" alt="">
										<div class="card-body">
											<h5 class="card-title">Card title</h5>
											<p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little bit longer.</p>
											<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
											</p>
										</div>
									</div>
								</div>
								<!-- End Col -->
								<div class="col-md-6 col-lg-3">
									<div class="card">
										<img class="img-fluid" src="images/big/img3.jpg" alt="">
										<div class="card-body">
											<h5 class="card-title">Card title</h5>
											<p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little bit longer.</p>
											<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
											</p>
										</div>
									</div>
								</div>
								<!-- End Col -->
								<div class="col-md-6 col-lg-3">
									<div class="card">
										<img class="img-fluid" src="images/big/img4.jpg" alt="">
										<div class="card-body">
											<h5 class="card-title">Card title</h5>
											<p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little bit longer.</p>
											<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
											</p>
										</div>
									</div>
								</div>
								<!-- End Col -->
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

</html>