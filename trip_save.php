<?php
include "koneksi.php";
$nama_wisata=$_POST['nama_wisata'];
$price=$_POST['price'];
$deskripsi= $_POST['deskripsi'];
$detail=$_POST['detail'];
$itinerary=$_POST['itinerary'];
$date=$_POST['date'];
$kuota=$_POST['kuota'];


$filename = $_FILES["foto"]["name"];
$file_ext = substr($filename, strripos($filename, '.'));
$allowed_file_types = array('.jpg','.jpeg','.gif','.png');

if (in_array($file_ext,$allowed_file_types))
	{	
		//Upload file foto
		$foto = $nama_wisata."_foto".$file_ext;
		$db_foto= "images/foto/" . $foto;
		move_uploaded_file($_FILES["foto"]["tmp_name"], "images/foto/" . $foto);
		// Insert to DATABASE
        $query = "INSERT into trip (nama_wisata,deskripsi,price,detail,itinerary,date,kuota,foto) values ('$nama_wisata','$deskripsi','$price','$detail','$itinerary','$date','$kuota','$db_foto')";
        $sql=mysqli_query($con, $query);        
		echo "<script type='text/javascript'>alert('Data berhasil disimpan.');</script>";
		echo '<script>window.location.href="trip_data.php?page=1&count=1"</script>';
		}
else
	{
		// file type error
		$error="Format foto yang diizinkan hanya: " . implode(', ',$allowed_file_types);
		echo "<script type='text/javascript'>alert('$error');</script>";
		unlink($_FILES["foto"]["tmp_name"]);
		echo '<script>window.history.back()</script>';	
	}




?>
