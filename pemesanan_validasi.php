<?php
include "koneksi.php";
$kode_booking=$_GET['kode_booking'];
$query = "UPDATE pembelian SET status=3 WHERE kode_booking=$kode_booking";
$sql=mysqli_query($con, $query);        
echo "<script type='text/javascript'>alert('Bukti Transfer berhadil divalidasi.');</script>";
echo '<script>window.location.href="pemesanan.php?page=1&count=1"</script>';



?>
