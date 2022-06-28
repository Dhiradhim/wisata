<?php
include('koneksi.php');
$id_trip = $_GET['id_trip'];

$cek = mysqli_query($con, "SELECT id_trip FROM trip WHERE id_trip='$id_trip'") or die(mysql_error());
if(mysqli_num_rows($cek) == 0){
	echo '<script>window.history.back()</script>';
}else{
	$del = mysqli_query($con, "DELETE FROM trip WHERE id_trip='$id_trip'");
if($del){
	echo ("<script language='JavaScript'> window.location.href='trip_data.php?page=1&count=1'; </script>");
	}else{
		echo 'Gagal menghapus data! ';
		echo '<a href="trip_data.php?page=1&count=1">Kembali</a>';
		
	}
		
}
	?>
