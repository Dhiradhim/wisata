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
	<?php
    include("koneksi.php");
    $word=$_POST['word'];
    $search="%".$word."%";
    $query1 = mysqli_query($con, "SELECT id_trip, foto, nama_wisata, deskripsi, DATE_FORMAT(date, '%D %M %Y') as date1 FROM trip WHERE nama_wisata LIKE '$search' ORDER BY id_trip desc") or die(mysqli_connect_error());
    $row1 = mysqli_fetch_assoc($query1);
    $count = 1;
    ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			 <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
					   <div class="col-12 m-b-30">
							<h4 class="d-inline">Search for "<?=$word?>"</h4><br><br>
							<div class="row">
							<?php											
								do { 
							?>			
								<div class="col-md-6 col-lg-3">
									<div class="card">
										<img src="<?=$row1['foto'];?>" style="height:150px; object-fit: cover;">
										<div class="card-body">
											<h5 class="card-title"><?=$row1['nama_wisata'];?></h5>
											<p class="card-text"><?=$row1['deskripsi'];?></p>
											<p class="card-text"><small class="text-muted"><?=$row1['date1'];?></small><br><br>
                                            <a href="detail_wisata.php?id_trip=<?=$row1['id_trip'];?>"><button class="btn btn-primary">Pesan</button></a>
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