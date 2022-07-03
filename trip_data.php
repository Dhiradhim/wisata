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
                                <center><h2>Data Trip</h2></center>							
                                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            
                            <div class="table-responsive">
                            <button class="btn btn-primary" onclick="location.href='trip_input.php';">+ Tambah Data</button>
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th><div align="center">No</div></th>
                                                <th><div align="center">Nama Wisata</div></th>
                                                <th><div align="center">Tanggal</div></th>
                                                <th><div align="center">Harga</div></th>
                                                <th><div align="center">Kuota</div></th>
                                                <th><div align="center">Action</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include("koneksi.php");
                                            $query = mysqli_query($con, "SELECT * FROM trip ORDER BY id_trip") or die(mysqli_connect_error());
                                            $row = mysqli_fetch_assoc($query);
                                            $count = 1;
                                            
                                            do { 
                                        ?>
                                                <tr>
                                                    <td><div align="center"><?php echo $count; ?></div></td>
                                                    <td><div align="center"><?php echo $row['nama_wisata']; ?></div></td>
                                                    <td><div align="center"><?php echo $row['date']; ?></div></td>
                                                    <td><div align="center">Rp. <?php $price=$row['price']; echo number_format($price, 2, ',', '.');?></div></td>
                                                    <td><div align="center"><?php echo $row['kuota']; ?></div></td>
                                                    <td><div align="center">
                                                    <a href="trip_edit.php?id_trip=<?=$row['id_trip']?>" title="Edit"><img src="images/edit.png" width="20" height="20" /></a>  
                                                    <a href="trip_delete.php?id_trip=<?=$row['id_trip']?>" class="delete" title="Delete"><img src="images/trash.png" width="20" height="20" /></a>
                                                    </div></td>
                                                </tr>
                                        <?php 
                                            $count++;
                                            } while ($row = mysqli_fetch_assoc($query)); 
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th><div align="center">No</div></th>
                                                <th><div align="center">Nama Wisata</div></th>
                                                <th><div align="center">Tanggal</div></th>
                                                <th><div align="center">Harga</div></th>
                                                <th><div align="center">Kuota</div></th>
                                                <th><div align="center">Action</div></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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