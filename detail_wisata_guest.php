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
                                    <h3>Rp. <?php $price=$row['price']; echo number_format($price, 2, ',', '.');?> / orang</h3><br>
                                    <h4>Kuota</h4>
                                    <h3><?=$kuota_total?> / <?=$row['kuota']?></h3>
                                </center>

                                <div class="bootstrap-modal">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Pesan</button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Silahkan Login</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="post">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Anda belum Login, silahkan Login terlebih dahulu!</label>
                                                            </div>   
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            <a href="login.php"><button type="button" class="btn btn-primary">Login</button></a>
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
                                                <p>Harga per paket : Rp. <?php $price=$row['price']; echo number_format($price, 2, ',', '.');?></p>
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
            var total = parseInt(price)*parseInt(kuota);
            var str1 = "Rp.";
            var str2 = ",00";

            var	reverse = total.toString().split('').reverse().join(''),
                ribuan 	= reverse.match(/\d{1,3}/g);
                ribuan	= ribuan.join('.').split('').reverse().join('');

            document.getElementById('total').value = str1 + ribuan + str2;
        }
    </script>

</body>