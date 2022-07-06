<?php
include "koneksi.php";
$q = mysqli_query($con, "SELECT kode_booking FROM pembelian") or die(mysqli_connect_error());
$x = mysqli_num_rows($q);
$jml= $x+1;
$date = new DateTime();
$Y=date_format($date,"Y");
$d=date_format($date,"d");
$m=date_format($date,"m");
$kode_booking=$jml."-".$d."-".$m."-".$Y;
$id_trip=$_POST['id_trip'];
$id_user=$_POST['id_user'];
$price= $_POST['price'];
$kuota=$_POST['kuota'];
$price1=$price*$kuota;
$query = "INSERT into pembelian (kode_booking,id_trip,id_user,price,kuota) values ('$kode_booking','$id_trip','$id_user','$price1','$kuota')";
// echo $query;
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="myorder.php?page=1&count=1"</script>';

?>
