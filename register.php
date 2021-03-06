<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Wisata</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
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

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                                    <a class="text-center" href="index.php"> <h4>Wisata</h4></a>
        
                                <form class="mt-5 mb-5 login-input" action="register_save.php" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Nama" id="nama" name="nama" required>
                                    </div>                                    
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" id="email" name="email" required>
                                        <input type="hidden" class="form-control"  value="user" id="hak_akses" name="hak_akses">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="No Telp" id="no_telp" name="no_telp" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Alamat" id="alamat" name="alamat" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Username" id="username" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Konfirmasi Password" id="reppassword" name="reppassword" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Daftar</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Sudah punya akun? <a href="login.php" class="text-primary">Masuk </a> sekarang</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>





