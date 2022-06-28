<?php
include "koneksi.php";
$nama=$_POST['nama'];
$email=$_POST['email'];
$no_telp= $_POST['no_telp'];
$alamat=$_POST['alamat'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$reppassword=md5($_POST['reppassword']);
$hak_akses=$_POST['hak_akses'];


if ($password !== $reppassword)
{
	echo "<script type='text/javascript'>alert('Password Tidak Cocok');</script>";
	echo '<script>window.history.back()</script>';	
}
else
{
$query = "INSERT into login (nama,no_telp,email,alamat,username,password,hak_akses) values ('$nama','$no_telp','$email','$alamat','$username','$password','$hak_akses')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="user_data.php?page=1&count=1"</script>';
}
?>
