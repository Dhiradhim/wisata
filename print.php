<style>
table {
	max-width: 99%;
	max-height: 99%;
}
body {
	padding: 5px;
	position: relative;
	width: 99%;
	height: 99%;
}
table th,
table td {
	padding: .625em;
  text-align: center;
}
table .kop:before {
	content: ': ';
}
.left {
	text-align: left;
}
table #caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}
table.border {
  width: 99%;
  border-collapse: collapse
}

table.border tbody th, table.border tbody td {
  border: thin solid #000;
  padding: 2px
}
.ttd td, .ttd th {
	padding-bottom: 4em;
}
</style>

<?php
include("koneksi.php");
$kode=$_GET['kode_booking'];
$query = mysqli_query($con, "SELECT login.nama, trip.nama_wisata, trip.price as price1, DATE_FORMAT(trip.date, '%D %M %Y') as date1, DATE_FORMAT(pembelian.date, '%D %M %Y') as date2, pembelian.* FROM pembelian INNER JOIN login ON login.id_user=pembelian.id_user INNER JOIN trip ON trip.id_trip=pembelian.id_trip WHERE pembelian.kode_booking='$kode'") or die(mysqli_connect_error());
$row = mysqli_fetch_assoc($query);
?>

<div id="printable" class="container">
<table border="0" cellpadding="0" cellspacing="0" width="485" class="border" style="overflow-x:auto;">
  <thead>
  <tr>
    <td colspan="6" width="485" id="caption">APLIKASI WISATA</td>
  </tr>
  <tr>
    <td colspan="2">Nama Pemesan</td>
    <td class="left kop"><?=$row['nama'];?></td>
  </tr>
  <tr>
    <td colspan="2">Kode Booking</td>
    <td class="left kop"><?=$row['kode_booking'];?></td>
  </tr>
  <tr>
    <td colspan="2">Nama Wisata</td>
    <td class="left kop"><?=$row['nama_wisata'];?></td>
  </tr>
  <tr>
    <td colspan="2">Tanggal Pembelian</td>
    <td class="left kop"><?=$row['date2'];?></td>
  </tr>
  <tr>
    <td colspan="2">Tanggal Keberangkatan</td>
    <td class="left kop"><?=$row['date1'];?></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  </thead>
  <tbody>
    <tr>
      <th>No</th>
      <th>NAMA WISATA</th>
      <th>HARGA SATUAN</th>
      <th>KUOTA</th>
      <th>TOTAL HARGA</th>
      <th>KETERANGAN</th>
    </tr>
    <tr>
      <td>1</td>
      <td><?=$row['nama_wisata'];?></td>
      <td>Rp. <?php $price=$row['price1']; echo number_format($price, 2, ',', '.');?></td>
      <td><?=$row['kuota'];?></td>
      <td>Rp. <?php $price=$row['price']; echo number_format($price, 2, ',', '.');?></td>
      <td>LUNAS</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class="ttd">
      <th colspan="2"></th>
      <th colspan="2"></th>
      <th colspan="2">Tertanda</th>
    </tr>
    <tr>
      <td colspan="2"></td>
      <td colspan="2"></td>
      <td colspan="2">Penyedia Jasa</td>
    </tr>
  </tfoot>
</table>
</div>

<script>
    window.print();
    // window.close();
</script>