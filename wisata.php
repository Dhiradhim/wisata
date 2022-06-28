<!DOCTYPE html>
<html lang="en">

<?php include('head.html');?>

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
                                            $query = mysqli_query($con, "SELECT * FROM trip ORDER BY id_trip desc LIMIT 5") or die(mysqli_connect_error());
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
								$query1 = mysqli_query($con, "SELECT id_trip, foto, nama_wisata, deskripsi, DATE_FORMAT(date, '%D %M %Y') as date1 FROM trip ORDER BY id_trip desc") or die(mysqli_connect_error());
								$row1 = mysqli_fetch_assoc($query1);
								$count = 1;
											
								do { 
							?>			
								<div class="col-md-6 col-lg-3">
									<div class="card">
										<img src="<?=$row1['foto'];?>" style="height:150px; object-fit: cover;">
										<div class="card-body">
											<h5 class="card-title"><a href="detail_wisata.php?id_trip=<?=$row1['id_trip'];?>"><?=$row1['nama_wisata'];?></a></h5>
											<p class="card-text"><?=$row1['deskripsi'];?></p>
											<p class="card-text"><small class="text-muted"><?=$row1['date1'];?></small>
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