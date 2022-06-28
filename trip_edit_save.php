<?php
session_start();  
include('koneksi.php');
$id_trip=$_POST['id_trip'];
$nama_wisata=$_POST['nama_wisata'];
$price=$_POST['price'];
$deskripsi= $_POST['deskripsi'];
$detail=$_POST['detail'];
$itinerary=$_POST['itinerary'];
$date=$_POST['date'];
$kuota=$_POST['kuota'];
// $tahun_ajaran=$_POST[''];
$filename = $_FILES["foto"]["name"];
if($filename!=="") 
{
	
	$file_ext = substr($filename, strripos($filename, '.'));
	$allowed_file_types = array('.jpg','.jpeg','.gif','.png');

	if (in_array($file_ext,$allowed_file_types))
		{	
			//Upload file foto
			$foto = $nama_wisata."_foto".$file_ext;
			$db_foto= "images/foto/" . $foto;
			move_uploaded_file($_FILES["foto"]["tmp_name"], "images/foto/" . $foto);
			// Update to DATABASE
			$query = "UPDATE trip SET nama_wisata='$nama_wisata', price='$price', deskripsi='$deskripsi', detail='$detail', itinerary='$itinerary', date='$date', kuota='$kuota', foto='$db_foto' WHERE id_trip='$id_trip'";
			// echo $query;
			$sql=mysqli_query($con, $query);
			echo "<script type='text/javascript'>alert('Data berhasil diedit.');</script>";
			echo '<script>window.location.href="trip_data.php"</script>';
		}
	else
		{
			// file type error
			$error="Format foto yang diizinkan hanya: " . implode(', ',$allowed_file_types);
			echo "<script type='text/javascript'>alert('$error');</script>";
			unlink($_FILES["foto"]["tmp_name"]);
			echo '<script>window.history.back()</script>';	
		}
} else
{
	// Update to DATABASE
	$query = "UPDATE trip SET nama_wisata='$nama_wisata', price='$price', deskripsi='$deskripsi', detail='$detail', itinerary='$itinerary', date='$date', kuota='$kuota' WHERE id_trip='$id_trip'";
	// echo $query;
	$sql=mysqli_query($con, $query);
	echo "<script type='text/javascript'>alert('Data berhasil diedit..');</script>";
	echo '<script>window.location.href="trip_data.php"</script>';
}
?>