<?php
include "koneksi.php";
$kode_booking=$_POST['kode_booking'];

$filename = $_FILES["bukti_transfer"]["name"];
$file_ext = substr($filename, strripos($filename, '.'));
$allowed_file_types = array('.jpg','.jpeg','.gif','.png');

if (in_array($file_ext,$allowed_file_types))
	{	
		//Upload file foto
		$foto = $kode_booking."_bukti_transfer".$file_ext;
		$db_foto= "images/bukti_transfer/" . $foto;
		move_uploaded_file($_FILES["bukti_transfer"]["tmp_name"], "images/bukti_transfer/" . $foto);
		// Insert to DATABASE
        $query = "UPDATE pembelian SET bukti_transfer='$db_foto', status=2 WHERE kode_booking='$kode_booking'";
        $sql=mysqli_query($con, $query);        
		echo "<script type='text/javascript'>alert('Bukti Transfer berhadil diupload.');</script>";
		echo '<script>window.location.href="myorder.php?page=1&count=1"</script>';
		}
else
	{
		// file type error
		$error="Format foto yang diizinkan hanya: " . implode(', ',$allowed_file_types);
		echo "<script type='text/javascript'>alert('$error');</script>";
		unlink($_FILES["foto"]["tmp_name"]);
		// echo '<script>window.history.back()</script>';	
	}




?>
