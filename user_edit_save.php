<?php
session_start();  
include('koneksi.php');
$id_user=$_POST['id_user'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$no_telp=$_POST['no_telp'];
$alamat=$_POST['alamat'];
$username=$_POST['username'];
$oldpassword=md5($_POST['oldpassword']);
$reppassword=md5($_POST['reppassword']);
$hak_akses=$_POST['hak_akses'];

if ($oldpassword == ""){
	$query = "UPDATE login SET nama='$nama',email='$email',alamat='$alamat',no_telp='$no_telp',username='$username',hak_akses='$hak_akses' WHERE id_user='$id_user'";
	$update = mysqli_query($con, $query);
	echo '<script>window.location.href="user_data.php"</script>';
}
if ($oldpassword !== $reppassword)
{
	echo "<script type='text/javascript'>alert('Password Tidak Cocok');</script>";
	echo '<script>window.history.back()</script>';	
}else{
	$query = "UPDATE login SET nama='$nama',email='$email',alamat='$alamat',no_telp='$no_telp',username='$username',hak_akses='$hak_akses',password='$oldpassword' WHERE id_user='$id_user'";
	$update = mysqli_query($con, $query);
	echo '<script>window.location.href="user_data.php"</script>';
}?>