<?php
include "koneksi.php";
$id_trip=$_POST['id_trip'];
$id_user=$_POST['id_user'];
$price= $_POST['price'];
$kuota=$_POST['kuota'];
$price1=$price*$kuota;

$query = "INSERT into pembelian (id_trip,id_user,price,kuota) values ('$id_trip','$id_user','$price1','$kuota')";
// echo $query;
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="myorder.php?page=1&count=1"</script>';

?>
