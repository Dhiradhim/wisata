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
    
    <!-- QUERY -->
	<?php
    include("koneksi.php");
    $id_trip=$_GET['id_trip'];
    $query = mysqli_query($con, "SELECT * FROM trip WHERE id_trip=$id_trip") or die(mysqli_connect_error());
    $row = mysqli_fetch_assoc($query);
    ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			 <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h2>Input Destinasi Wisata</h2></center>
								<br>								
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-validation">
                                                    <form class="form-valide" action="trip_edit_save.php" method="post" enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <label class="col-lg-2 col-form-label" for="nama_wisata">Nama Wisata <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" placeholder="Masukkan nama tempat wisata.." value="<?=$row['nama_wisata']?>">
                                                                <input type="hidden" class="form-control" id="id_trip" name="id_trip" placeholder="Masukkan nama tempat wisata.." value="<?=$row['id_trip']?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-2 col-form-label" for="price">Harga <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-4">
                                                                <input type="text" class="form-control" id="price" name="price" placeholder="Harga per paket wisata.." value="<?=$row['price']?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-2 col-form-label" for="deskripsi">Deskripsi <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" placeholder="Deskripsikan tempat wisata.."><?=$row['deskripsi']?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-2 col-form-label" for="detail">Detail <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <textarea class="form-control" id="detail" name="detail" rows="5" placeholder="Jelaskan secara leBih detail tempat wisata.."><?=$row['detail']?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-2 col-form-label" for="itinerary">Itinerary <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <textarea class="form-control" id="itinerary" name="itinerary" rows="5" placeholder="Deskpripsikan itinerary wisata.."><?=$row['itinerary']?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-2 col-form-label" for="date">Date <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-2">
                                                                <input type="text" name="date" class="form-control" placeholder="YYYY-MM-DD" id="mdate" value="<?=$row['date']?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-2 col-form-label" for="kuota">Kuota <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-2">
                                                                <input type="text" class="form-control" id="kuota" name="kuota" placeholder="Kuota wisata.." value="<?=$row['kuota']?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-2 col-form-label" for="foto">Foto <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-4">
                                                                <img src="<?=$row['foto'];?>" width="300px"><br>
                                                                <input type="file" class="form-control-file" id="foto" name="foto">   
                                                            </div>                           
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-lg-8 ml-auto">
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                                <button class="btn btn-danger" type="button" onclick="window.history.back()">Cancel</button>
                                                            </div>
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
                </div>
            </div>
        </div>
	<?php include('footer.html'); ?>		
	</div>
	<?php include('script.html'); ?>
</body>