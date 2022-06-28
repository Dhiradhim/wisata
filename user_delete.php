<?php
include('koneksi.php');
$id_user = $_GET['id_user'];

$cek = mysqli_query($con, "SELECT id_user FROM login WHERE id_user='$id_user'") or die(mysql_error());
if(mysqli_num_rows($cek) == 0){
	echo '<script>window.history.back()</script>';
}else{
	$del = mysqli_query($con, "DELETE FROM login WHERE id_user='$id_user'");
	$del1 = mysqli_query($con, "DELETE FROM pembelian WHERE id_user='$id_user'");
if($del && $del1){
	echo ("<script language='JavaScript'> window.location.href='user_data.php?page=1&count=1'; </script>");
	}else{
		echo 'Gagal menghapus data! ';
		echo '<a href="user_data.php?page=1&count=1">Kembali</a>';
		
	}
		
}
	?>
