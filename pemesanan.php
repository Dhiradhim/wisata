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
                                <center><h2>Pemesanan</h2></center>							
                                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            
                            <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th><div align="center">No</div></th>
                                                <th><div align="center">Kode Booking</div></th>
                                                <th><div align="center">Nama</div></th>
                                                <th><div align="center">Nama Wisata</div></th>
                                                <th><div align="center">Tanggal</div></th>
                                                <th><div align="center">Harga</div></th>
                                                <th><div align="center">Kuota</div></th>
                                                <th><div align="center">Status</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include("koneksi.php");
                                            $user=$row_user['id_user'];
                                            $query = mysqli_query($con, "SELECT login.nama, trip.nama_wisata, DATE_FORMAT(trip.date, '%D %M %Y') as date1, pembelian.* FROM pembelian INNER JOIN login ON login.id_user=pembelian.id_user INNER JOIN trip ON trip.id_trip=pembelian.id_trip ORDER BY kode_booking desc") or die(mysqli_connect_error());
                                            $row = mysqli_fetch_assoc($query);
                                            $count = 1;
                                            
                                            do { 
                                        ?>
                                                <tr>
                                                    <td><div align="center"><?php echo $count; ?></div></td>
                                                    <td><div align="center"><?php echo $row['kode_booking']; ?></div></td>
                                                    <td><div align="center"><?php echo $row['nama']; ?></div></td>
                                                    <td><div align="center"><?php echo $row['nama_wisata']; ?></div></td>
                                                    <td><div align="center"><?php echo $row['date1']; ?></div></td>
                                                    <td><div align="center"><?php echo $row['price']; ?></div></td>
                                                    <td><div align="center"><?php echo $row['kuota']; ?></div></td>
                                                    <td><div align="center">
                                                        <?php
                                                            if ($row['status']==1)
                                                            {
                                                        ?>
                                                            <button class="btn btn-danger">BELUM BAYAR</button>
                                                        <?php
                                                            }
                                                            if ($row['status']==2)
                                                            {
                                                        ?>
                                                            <a href="<?=$row['bukti_transfer']?>" target="_blank"><button class="btn btn-warning">LIHAT</button><a>
                                                            <a href="pemesanan_validasi.php?kode_booking=<?=$row['kode_booking']?>"><button class="btn btn-primary">VALIDASI</button>
                                                        <?php
                                                            }
                                                            if ($row['status']==3)
                                                            {                                                            
                                                        ?>
                                                            <a href="<?=$row['bukti_transfer']?>" target="_blank"><button class="btn btn-warning">LIHAT</button><a>
                                                            <button class="btn btn-success">SUDAH VALID</button>
                                                        <?php
                                                            }
                                                        ?>
                                                    </div></td>
                                                    <!-- <td><div align="center">
                                                    <a href="batch_edit.php?id=<?=$row['id']?>" title="Edit"><img src="images/application_form_edit.png" width="16" height="16" /></a>  
                                                    <a href="batch_delete.php?id=<?=$row['id']?>" class="delete" title="Delete"><img src="images/application_delete.png" width="16" height="16" /></a>
                                                    </div></td> -->
                                                </tr>
                                        <?php 
                                            $count++;
                                            } while ($row = mysqli_fetch_assoc($query)); 
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th><div align="center">No</div></th>
                                                <th><div align="center">Kode Booking</div></th>
                                                <th><div align="center">Nama</div></th>
                                                <th><div align="center">Nama Wisata</div></th>
                                                <th><div align="center">Tanggal</div></th>
                                                <th><div align="center">Harga</div></th>
                                                <th><div align="center">Kuota</div></th>
                                                <th><div align="center">Status</div></th>
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