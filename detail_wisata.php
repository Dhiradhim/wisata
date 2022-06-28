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
    $id_trip=$_GET['id_trip'];
    $query = mysqli_query($con, "SELECT *, DATE_FORMAT(date, '%D %M %Y') as date1 FROM trip WHERE id_trip='$id_trip'") or die(mysqli_connect_error());
    $row = mysqli_fetch_assoc($query);
    $query_kuota = mysqli_query($con, "SELECT kuota FROM pembelian WHERE id_trip='$id_trip'") or die(mysqli_connect_error());
    $row_kuota=mysqli_num_rows($query_kuota);
    if ($row_kuota=='0')
    {
        $kuota_total='0';
    } else
    {
    
    while ($data = mysqli_fetch_array($query_kuota))
    {
    $kuota1[]=$data['kuota'];
    }
    //total
    $kuota_total=array_sum($kuota1);
    }?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			 <div class="container-fluid">
             <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h2><?=$row['nama_wisata'];?></h2></center>
                            </div>
                        </div>
					   
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">								
                                <img src="<?=$row['foto'];?>" style="width:740px; height:400px; object-fit: cover;">
                            </div>
                        </div>
					   
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <center>
                                    <h4>Harga</h4>
                                    <h3>Rp. <?=$row['price']?>,- / orang</h3><br>
                                    <h4>Kuota</h4>
                                    <h3><?=$kuota_total?> / <?=$row['kuota']?></h3>
                                </center>

                                <div class="bootstrap-modal">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Pesan</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Pemesanan ke <?=$row['nama_wisata']?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="pembelian.php">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Nama:</label>
                                                            <input type="text" class="form-control" id="recipient-name" disabled value="<?=$row_user['nama'];?>">
                                                        </div>
                                                            <input type="text" class="form-control" name="price" id="price"  value="<?=$row['price'];?>" hidden>
                                                            <input type="text" class="form-control" name="id_trip" id="id_trip"  value="<?=$row['id_trip'];?>" hidden>
                                                            <input type="text" class="form-control" name="id_user" id="id_user"  value="<?=$row_user['id_user'];?>" hidden>
                                             
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Kuota:</label>
                                                            <input type="text" class="form-control" name="kuota" id="kuota" onblur="calculate()"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Total Harga:</label>
                                                            <input type="text" class="form-control" name="total" id="total" disabled>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-primary">Pesan</button>
                                                        </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">	
                                <!-- Nav tabs -->
                                <div class="default-tab">
                                    <ul class="nav nav-tabs mb-3" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#deskripsi">Deskripsi</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#detail">Detail</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#itinerary">Itinerary</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="deskripsi" role="tabpanel">
                                            <div class="p-t-15">
                                                <h4><?=$row['nama_wisata'];?></h4><br>
                                                <p>Tanggal Keberangkatan : <?=$row['date1'];?></p>
                                                <p>Harga per paket : Rp. <?=$row['price'];?>,-</p>
                                                <p><?=$row['deskripsi'];?></p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="detail">
                                            <div class="p-t-15">
                                                <h4><?=$row['nama_wisata'];?></h4><br>
                                                <p><?=$row['detail'];?></p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="itinerary">
                                            <div class="p-t-15">
                                                <h4><?=$row['nama_wisata'];?></h4><br>
                                                <p><?=$row['itinerary'];?></p>
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

    <script>
        calculate = function()
        {
            var price = document.getElementById('price').value;
            var kuota = document.getElementById('kuota').value; 
            var str1 = "Rp. ";
            var str2 = ",-";
            var total = parseInt(price)*parseInt(kuota);
            document.getElementById('total').value = str1 + total + str2;
        }
    </script>

</body>