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
                                <center><h2>My Order</h2></center>							
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
                                                <th><div align="center">Nama Wisata</div></th>
                                                <th><div align="center">Tanggal</div></th>
                                                <th><div align="center">Harga</div></th>
                                                <th><div align="center">Kuota</div></th>
                                                <th><div align="center">Bukti Transfer</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include("koneksi.php");
                                            $user=$row_user['id_user'];
                                            $query = mysqli_query($con, "SELECT login.nama, trip.nama_wisata, DATE_FORMAT(trip.date, '%D %M %Y') as date1, pembelian.* FROM pembelian INNER JOIN login ON login.id_user=pembelian.id_user INNER JOIN trip ON trip.id_trip=pembelian.id_trip WHERE pembelian.id_user=$user") or die(mysqli_connect_error());
                                            $row = mysqli_fetch_assoc($query);
                                            $count = 1;
                                            
                                            do { 
                                        ?>
                                                <tr>
                                                    <td><div align="center"><?php echo $count; ?></div></td>
                                                    <td><div align="center"><?php echo $row['kode_booking']; ?></div></td>
                                                    <td><div align="center"><?php echo $row['nama_wisata']; ?></div></td>
                                                    <td><div align="center"><?php echo $row['date1']; ?></div></td>
                                                    <td><div align="center">Rp. <?php $price=$row['price']; echo number_format($price, 2, ',', '.');?></div></td>
                                                    <td><div align="center"><?php echo $row['kuota']; ?></div></td>
                                                    <td><div align="center">
                                                        <?php
                                                            if ($row['status']==1)
                                                            {
                                                        ?>
                                                            <div class="bootstrap-modal">
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Upload Bukti Bayar</button>
                                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Pembayaran ke <?=$row['nama_wisata']?></h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form method="post" action="upload_bukti_bayar.php" enctype="multipart/form-data">
                                                                                    <div class="form-group">
                                                                                        <input type="file" class="form-control-file" id="bukti_transfer" name=bukti_transfer>
                                                                                        <input type="hidden" class="form-control-file" id="kode_booking" name=kode_booking value=<?=$row['kode_booking']?>>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                                                        <button type="submit" class="btn btn-primary">Upload</button>
                                                                                    </div>
                                                                                </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                            }
                                                            if ($row['status']==2)
                                                            {
                                                        ?>
                                                            <button class="btn btn-warning">MENUNGGU VALIDASI</button>
                                                        <?php
                                                            }
                                                            if ($row['status']==3)
                                                            {                                                            
                                                        ?>
                                                            <a href="print.php?kode_booking=<?=$row['kode_booking'];?>" target="_blank"><button class="btn btn-primary">CETAK</button></a>
                                                            <button class="btn btn-success">SUDAH DIBAYAR</button>
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
                                                <th><div align="center">Nama Wisata</div></th>
                                                <th><div align="center">Tanggal</div></th>
                                                <th><div align="center">Harga</div></th>
                                                <th><div align="center">Kuota</div></th>
                                                <th><div align="center">Bukti Transfer</div></th>
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