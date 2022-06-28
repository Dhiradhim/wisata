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
                                <center><h2>Input User</h2></center>
								<br>								
                                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="user_save.php" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="nama">Nama <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama user..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="email">Email <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-4">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="no_telp">No. Telepon <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukkan no telepon..">
                                            </div>
                                        </div>                                        
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="alamat">Alamat <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="alamat" name="alamat" rows="5" placeholder="Alamat lengkap.."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="username">Username <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="password">Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="reppassword">Konfirmasi Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="reppassword" name="reppassword" placeholder="Ketik kembali password..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="hak_akses">Hak Akses <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                            <select class="custom-select" id="hak_akses" name="hak_akses">
                                                <option selected="selected" hidden >Choose...</option>
                                                <option value="admin">Administrator</option>
                                                <option value="user">User</option>
                                            </select>
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