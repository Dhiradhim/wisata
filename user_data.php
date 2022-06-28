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
                                <center><h2>Data User</h2></center>							
                                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            
                            <div class="table-responsive">
                            <button class="btn btn-primary" onclick="location.href='user_input.php';">+ Tambah Data</button>
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th><div align="center">No</div></th>
                                                <th><div align="center">Nama</div></th>
                                                <th><div align="center">Username</div></th>
                                                <th><div align="center">Email</div></th>
                                                <th><div align="center">No Telp</div></th>
                                                <th><div align="center">Hak Akses</div></th>
                                                <th><div align="center">Action</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include("koneksi.php");
                                            $query = mysqli_query($con, "SELECT * FROM login ORDER BY id_user") or die(mysqli_connect_error());
                                            $row = mysqli_fetch_assoc($query);
                                            $count = 1;
                                            
                                            do { 
                                        ?>
                                                <tr>
                                                    <td><div align="center"><?php echo $count; ?></div></td>
                                                    <td><div align="center"><?php echo $row['nama']; ?></div></td>
                                                    <td><div align="center"><?php echo $row['username']; ?></div></td>
                                                    <td><div align="center"><?php echo $row['email']; ?></div></td>
                                                    <td><div align="center"><?php echo $row['no_telp']; ?></div></td>
                                                    <td><div align="center"><?php echo $row['hak_akses']; ?></div></td>
                                                    <td><div align="center">
                                                    <a href="user_edit.php?id_user=<?=$row['id_user']?>" title="Edit"><img src="images/edit.png" width="20" height="20" /></a>  
                                                    <a href="user_delete.php?id_user=<?=$row['id_user']?>" class="delete" title="Delete"><img src="images/trash.png" width="20" height="20" /></a>
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
                                                <th><div align="center">Nama</div></th>
                                                <th><div align="center">Username</div></th>
                                                <th><div align="center">Email</div></th>
                                                <th><div align="center">No Telp</div></th>
                                                <th><div align="center">Hak Akses</div></th>
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